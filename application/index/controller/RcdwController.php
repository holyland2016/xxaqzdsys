<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

use app\admin\model\Rcdw as RcdwModel;

class RcdwController extends Controller
{
  public function duiwu()
  {
    $map1['status'] = ['>=','0'];
    $map1['taxonomy'] = ['=','1'];
    $duiwu =  RcdwModel::where($map1)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('duiwu',$duiwu);

    return $this->fetch();
    // echo $id;
  }
  public function renyuan()
  {
    $map2['status'] = ['>=','0'];
    $map2['taxonomy'] = ['=','2'];
    $renyuan =  RcdwModel::where($map2)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('renyuan',$renyuan);

    return $this->fetch();
    // echo $id;
  }
  
  public function index()
  {
    $map['status'] = ['>=','0'];
    // $map5['taxonomy'] = ['=','5'];
    $all =  RcdwModel::where($map)
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
