<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

use app\admin\model\Lx as LxModel;

class LxController extends Controller
{

  public function index()
  {
    $map['status'] = ['>=','0'];
    // $map5['taxonomy'] = ['=','5'];
    $all =  LxModel::where($map)
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
