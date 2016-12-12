<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

use app\admin\model\Kfjl as KfjlModel;

class KfjlController extends Controller
{
  public function keti()
  {
    $map1['status'] = ['>=','0'];
    $map1['taxonomy'] = ['=','1'];
    $keti =  KfjlModel::where($map1)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('keti',$keti);

    return $this->fetch();
    // echo $id;
  }
  public function shengqing()
  {
    $map2['status'] = ['>=','0'];
    $map2['taxonomy'] = ['=','2'];
    $shengqing =  KfjlModel::where($map2)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('shengqing',$shengqing);

    return $this->fetch();
    // echo $id;
  }
  public function guanli()
  {
    $map3['status'] = ['>=','0'];
    $map3['taxonomy'] = ['=','3'];
    $guanli =  KfjlModel::where($map2)
            ->order('create_time', 'DESC')
            ->paginate();


    // $this->assign('data',$this->data);
    $this->assign('guanli',$guanli);

    return $this->fetch();
    // echo $id;
  }

  public function index()
  {
    $map['status'] = ['>=','0'];
    // $map5['taxonomy'] = ['=','5'];
    $all =  KfjlModel::where($map)
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
