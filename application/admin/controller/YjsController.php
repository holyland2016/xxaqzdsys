<?php
namespace app\admin\controller;
use app\admin\model\User;
use app\admin\model\Yjs as YjsModel;
use think\Controller;
use app\admin\controller\AdminAuthController;
use think\Validate;

/**
 *
 */
class YjsController extends AdminAuthController
{
  //模块基本信息
  private $data = array(
    // 'upload_path' => UPLOAD_PATH,
    'module_url'  => '/admin/Yjs/',
    'upload_url'  => '/public/uploads/',
      'ckeditor'    => array(
            'id'     => 'ckeditor_post_content',
            //Optionnal values
            'config' => array(
                'width'  => "100%", //Setting a custom width
                'height' => '400px',
            )
        ),
  );
  // 创建新文章
  public function create()
  {
    $admins = User::where('status',1)->column('username','nickname');
    // dump($list);
    $this->data['edit_fields'] = array(
      'post_title'     => array('type' => 'text', 'placeholder' => '在此输入标题'),
      'post_content'   => array('type' => 'textarea', 'id'=>'ckeditor_post_content'),
      'post_author'    => array('type' => 'select', 'label' => '作者','default' => $admins, 'extra'=>array('wrapper'=>'col-sm-3')),
      'status'         => array('type' => 'radio', 'label' => '状态','default'=> array(-1 => '删除', 0 => '草稿', 1 => '发布',2 => '待审核')),
      'taxonomy'       => array('type' => 'taxonomy', 'label' => '分类','default'=>
                          array(1=>'招生指南',2=>'研究生导师',3=>'在读研究生',4=>'毕业生')),
      'create_time'    => array('type' => 'text1', 'label' => '发布时间','id'=>'datetimepicker1','extra'=>array('format'=>'YYYY-MM-DD hh:mm:ss')),
      'feature_image'  => array('type' => 'file','label'     => '特色图片','exampleInputFile'		=> '点击图片上传'),
        // 'post_excerpt'   => array('type' => 'textarea', 'label' => '摘要'),
    );

    //默认值设置
    $item['status']         = '发布';
    $item['comment_status'] = config('comment_toggle') ? '打开' : '关闭';
    $item['create_time']    = date('Y-m-d H:i:s');

    $this->assign('item',$item);
    $this->assign('data',$this->data);
    return $this->fetch('',[],['__PUBLIC__'=>'/static']);
  }

  public function read($id='')
    {
        $admins = user::where('status',1)->column('nickname','id');

        $this->data['edit_fields'] = array(
					'post_title'     => array('type' => 'text', 'placeholder' => '在此输入标题'),
			  	'post_content'   => array('type' => 'textarea', 'id'=>'ckeditor_post_content'),
					'post_author'    => array('type' => 'select', 'label' => '作者','default' => $admins, 'extra'=>array('wrapper'=>'col-sm-3')),
					'status'         => array('type' => 'radio', 'label' => '状态','default'=> array(-1 => '删除', 0 => '草稿', 1 => '发布',2 => '待审核')),
          'taxonomy'       => array('type' => 'taxonomy', 'label' => '分类','default'=>
                              array( 1=>'招生指南',2=>'研究生导师',3=>'在读研究生',4=>'毕业生')),
          'create_time'    => array('type' => 'text1', 'label' => '发布时间','id'=>'datetimepicker1','extra'=>array('format'=>'YYYY-MM-DD hh:mm:ss')),
					'feature_image'  => array('type' => 'file','label'     => '特色图片','exampleInputFile'		=> '点击图片上传'),
        );

        //默认值设置
        $item = YjsModel::get($id);
        $item['post_content'] = str_replace('&', '&amp;', $item['post_content']);

        $this->assign('item',$item);
        $this->assign('data',$this->data);

        return $this->fetch('',[],['__PUBLIC__'=>'/static']);
    }

  public function add()
  {
    $posts = new YjsModel;
    $data = input('post.');
    $rule = [
    'post_title|文章标题' => 'require',
  ];
    // $data['feature_image'] = $this->upload();
    // 	if(!$data['feature_image']){
    // 		unset($data['feature_image']);
    // 	}

    $data['create_time'] = $data['create_time'] ? strtotime($data['create_time']) : time();
    $data['update_time'] = time();
    if ($posts->insertGetId($data)) {
      $this->redirect('admin/Yjs/index');
    } else {
      return $posts->getError();
    }
    // return $this->fetch('',[],['__PUBLIC__'=>'/static']);
  }
  public function update($id='')
  {
      $posts = new YjsModel;
      $data = input('post.');
      $data['id'] = $id;
      if ($posts->update($data)) {
          return $this->success('信息更新成功','/admin/Yjs/index');
      } else {
          return $posts->getError();
      }
  }
  public function delete($id='')
  {
    $result = YjsModel::destroy($id);
    if($result){
      $this->redirect('admin/Yjs/index');
    }else{
      return $result->getError();
    }
  }


  public function index()
  {
    $request = request();
    $param = $request->param();
    $map['status'] = ['>=','0'];

    if(!empty($param)){
      $this->data['search'] = $param;
      if(isset($param['title'])){
        $map['post_title'] = ['like','%'.$param['title'].'%'];
      }
      if(isset($param['start_time'])){
            $map['create_time'] = ['>= time',$param['start_time']];
      }
      // 结束日期还未书写
    }
    // $map['create_time'] = ['between time',['2016-11-18','	2016-11-20']];
    $list =  YjsModel::where($map)
            ->order('create_time', 'DESC')
            ->paginate();

    $this->assign('data',$this->data);
    $this->assign('list',$list);

		return $this->fetch('',[],['__PUBLIC__'=>'/static']);
  }
  public function zhaosheng()
  {
    $request = request();
    $param = $request->param();
    $map['status'] = ['>=','0'];
    $map['taxonomy'] = ['=','1'];

    if(!empty($param)){
      $this->data['search'] = $param;
      if(isset($param['title'])){
        $map['post_title'] = ['like','%'.$param['title'].'%'];
      }
      if(isset($param['start_time'])){
            $map['create_time'] = ['>= time',$param['start_time']];
      }
      // 结束日期还未书写
    }
    // $map['create_time'] = ['between time',['2016-11-18','	2016-11-20']];
    $list =  YjsModel::where($map)
            ->order('create_time', 'DESC')
            ->paginate();

    $this->assign('data',$this->data);
    $this->assign('list',$list);

    return $this->fetch('',[],['__PUBLIC__'=>'/static']);
  }
  public function daoshi()
  {
    $request = request();
    $param = $request->param();
    $map['status'] = ['>=','0'];
    $map['taxonomy'] = ['=','2'];

    if(!empty($param)){
      $this->data['search'] = $param;
      if(isset($param['title'])){
        $map['post_title'] = ['like','%'.$param['title'].'%'];
      }
      if(isset($param['start_time'])){
            $map['create_time'] = ['>= time',$param['start_time']];
      }
      // 结束日期还未书写
    }
    // $map['create_time'] = ['between time',['2016-11-18','	2016-11-20']];
    $list =  YjsModel::where($map)
            ->order('create_time', 'DESC')
            ->paginate();

    $this->assign('data',$this->data);
    $this->assign('list',$list);

    return $this->fetch('',[],['__PUBLIC__'=>'/static']);
  }
  public function zaidu()
  {
    $request = request();
    $param = $request->param();
    $map['status'] = ['>=','0'];
    $map['taxonomy'] = ['=','3'];

    if(!empty($param)){
      $this->data['search'] = $param;
      if(isset($param['title'])){
        $map['post_title'] = ['like','%'.$param['title'].'%'];
      }
      if(isset($param['start_time'])){
            $map['create_time'] = ['>= time',$param['start_time']];
      }
      // 结束日期还未书写
    }
    // $map['create_time'] = ['between time',['2016-11-18','	2016-11-20']];
    $list =  YjsModel::where($map)
            ->order('create_time', 'DESC')
            ->paginate();

    $this->assign('data',$this->data);
    $this->assign('list',$list);

    return $this->fetch('',[],['__PUBLIC__'=>'/static']);
  }
  public function biyesheng()
  {
    $request = request();
    $param = $request->param();
    $map['status'] = ['>=','0'];
    $map['taxonomy'] = ['=','4'];

    if(!empty($param)){
      $this->data['search'] = $param;
      if(isset($param['title'])){
        $map['post_title'] = ['like','%'.$param['title'].'%'];
      }
      if(isset($param['start_time'])){
            $map['create_time'] = ['>= time',$param['start_time']];
      }
      // 结束日期还未书写
    }
    // $map['create_time'] = ['between time',['2016-11-18','	2016-11-20']];
    $list =  YjsModel::where($map)
            ->order('create_time', 'DESC')
            ->paginate();

    $this->assign('data',$this->data);
    $this->assign('list',$list);

    return $this->fetch('',[],['__PUBLIC__'=>'/static']);
  }


}
