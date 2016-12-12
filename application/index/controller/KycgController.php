<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

use app\admin\model\Kycg as KycgModel;

class KycgController extends Controller
{
  public function keyan()
  {
    $map1['status'] = ['>=','0'];
    $map1['taxonomy'] = ['=','1'];
    $kenyan =  KycgModel::where($map1)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('keyan',$kenyan);

    return $this->fetch();
    // echo $id;
  }
  public function lunwen()
  {
    $map2['status'] = ['>=','0'];
    $map2['taxonomy'] = ['=','2'];
    $lunwen =  KycgModel::where($map2)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('lunwen',$lunwen);

    return $this->fetch();
    // echo $id;
  }
  public function zhuanli()
  {
    $map4['status'] = ['>=','0'];
    $map4['taxonomy'] = ['=','3'];
    $zhuanli =  KycgModel::where($map4)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('zhuanli',$zhuanli);

    return $this->fetch();
    // echo $id;
  }
  public function daibiao()
  {
    $map4['status'] = ['>=','0'];
    $map4['taxonomy'] = ['=','4'];
    $daibiao =  KycgModel::where($map4)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('daibiao',$daibiao);

    return $this->fetch();
    // echo $id;
  }
  public function pingjiang()
  {
    $map5['status'] = ['>=','0'];
    $map5['taxonomy'] = ['=','5'];
    $pingjiang =  KycgModel::where($map5)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('pingjiang',$pingjiang);

    return $this->fetch();
    // echo $id;
  }
  public function index()
  {
    $map['status'] = ['>=','0'];
    // $map5['taxonomy'] = ['=','5'];
    $all =  KycgModel::where($map)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('all',$all);

    return $this->fetch();
    // echo $id;
  }


    public function read($id='')
    {
      $item = XwzxModel::get($id);
      // $item['post_content'] = str_replace('&', '&amp;', $item['post_content']);

      $this->assign('item',$item);
      // $this->assign('data',$this->data);
      return $this->fetch();
      // echo $id;
    }
}
