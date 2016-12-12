<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

use app\admin\model\Yjs as YjsModel;

class YjsController extends Controller
{
  public function zhaosheng()
  {
    $map1['status'] = ['>=','0'];
    $map1['taxonomy'] = ['=','1'];
    $zhaosheng =  YjsModel::where($map1)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('zhaosheng',$zhaosheng);

    return $this->fetch();
    // echo $id;
  }
  public function daoshi()
  {
    $map2['status'] = ['>=','0'];
    $map2['taxonomy'] = ['=','2'];
    $daoshi =  YjsModel::where($map2)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('daoshi',$daoshi);

    return $this->fetch();
    // echo $id;
  }
  public function zaidu()
  {
    $map3['status'] = ['>=','0'];
    $map3['taxonomy'] = ['=','3'];
    $zaidu =  YjsModel::where($map3)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('zaidu',$zaidu);

    return $this->fetch();
    // echo $id;
  }
  public function biyesheng()
  {
    $map4['status'] = ['>=','0'];
    $map4['taxonomy'] = ['=','4'];
    $biyesheng =  YjsModel::where($map4)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('biyesheng',$biyesheng);

    return $this->fetch();
    // echo $id;
  }

  public function index()
  {
    $map['status'] = ['>=','0'];
    // $map5['taxonomy'] = ['=','5'];
    $all =  YjsModel::where($map)
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
