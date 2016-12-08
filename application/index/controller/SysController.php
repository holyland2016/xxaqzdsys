<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

use app\admin\model\Sys as SysModel;

class SysController extends Controller
{
    public function index()
    {

      $map['status'] = ['>=','0'];
              // $map1['taxonomy'] = ['=','1'];
      $all =  SysModel::where($map)
              ->order('create_time', 'DESC')
              ->paginate();

      $this->assign('all',$all);

      return $this->fetch();
      // echo $id;
    }

    public function jianjie()
    {
      $map1['status'] = ['>=','0'];
      $map1['taxonomy'] = ['=','1'];
      $jianjie =  SysModel::where($map1)
              ->order('create_time', 'DESC')
              ->paginate();


      // $this->assign('data',$this->data);
      $this->assign('jianjie',$jianjie);

      return $this->fetch();
      // echo $id;
    }
    public function zhuzhi()
    {
      $map2['status'] = ['>=','0'];
      $map2['taxonomy'] = ['=','2'];
      $zhuzhi =  SysModel::where($map2)
              ->order('create_time', 'DESC')
              ->paginate();
     $this->assign('zhuzhi',$zhuzhi);
     return $this->fetch();

    }
    public function lingdao()
    {
      $map3['status'] = ['>=','0'];
      $map3['taxonomy'] = ['=','3'];
      $lingdao =  SysModel::where($map3)
              ->order('create_time', 'DESC')
              ->paginate();
      $this->assign('lingdao',$lingdao);
      return $this->fetch();
    }
    public function xueshu()
    {
      $map4['status'] = ['>=','0'];
      $map4['taxonomy'] = ['=','4'];
      $xueshu =  SysModel::where($map4)
              ->order('create_time', 'DESC')
              ->paginate();
      $this->assign('xueshu',$xueshu);
      return $this->fetch();
    }
    public function fangxiang()
    {

      $map5['status'] = ['>=','0'];
      $map5['taxonomy'] = ['=','5'];
      $fangxiang =  SysModel::where($map5)
            ->order('create_time', 'DESC')
            ->paginate();
      $this->assign('fangxiang',$fangxiang);
      return $this->fetch();
    }
    public function mianmao()
    {

      $map5['status'] = ['>=','0'];
      $map5['taxonomy'] = ['=','6'];
      $mianmao =  SysModel::where($map5)
            ->order('create_time', 'DESC')
            ->paginate();
      $this->assign('mianmao',$mianmao);
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
