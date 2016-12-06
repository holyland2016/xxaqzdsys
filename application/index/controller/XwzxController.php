<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

use app\admin\model\Xwzx as XwzxModel;

class XwzxController extends Controller
{
    public function index()
    {

      $map['status'] = ['>=','0'];
              // $map1['taxonomy'] = ['=','1'];
      $all =  XwzxModel::where($map)
              ->order('create_time', 'DESC')
              ->paginate();

      $this->assign('all',$all);

      return $this->fetch();
      // echo $id;
    }

    public function tpxw()
    {
      $map1['status'] = ['>=','0'];
      $map1['taxonomy'] = ['=','1'];
      $tpxw =  XwzxModel::where($map1)
              ->order('create_time', 'DESC')
              ->paginate();


      // $this->assign('data',$this->data);
      $this->assign('tpxw',$tpxw);

      return $this->fetch();
      // echo $id;
    }
    public function zhxw()
    {
      $map2['status'] = ['>=','0'];
      $map2['taxonomy'] = ['=','2'];
      $zhxw =  XwzxModel::where($map2)
              ->order('create_time', 'DESC')
              ->paginate();
     $this->assign('zhxw',$zhxw);
     return $this->fetch();

    }
    public function kydt()
    {
      $map3['status'] = ['>=','0'];
      $map3['taxonomy'] = ['=','3'];
      $kydt =  XwzxModel::where($map3)
              ->order('create_time', 'DESC')
              ->paginate();
      $this->assign('kydt',$kydt);
      return $this->fetch();
    }
    public function xshd()
    {
      $map4['status'] = ['>=','0'];
      $map4['taxonomy'] = ['=','4'];
      $xshd =  XwzxModel::where($map4)
              ->order('create_time', 'DESC')
              ->paginate();
      $this->assign('xshd',$xshd);
      return $this->fetch();
    }
    public function tzgg()
    {

      $map5['status'] = ['>=','0'];
      $map5['taxonomy'] = ['=','3'];
      $tzgg =  XwzxModel::where($map5)
            ->order('create_time', 'DESC')
            ->paginate();
      $this->assign('tzgg',$tzgg);
      return $this->fetch();
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
