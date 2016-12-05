<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

use app\admin\model\Posts as PostsModel;

class IndexController extends Controller
{
    public function index()
    {
      $map['status'] = ['>=','0'];
      $list =  PostsModel::where($map)
              ->order('create_time', 'DESC')
              ->paginate();

      // $this->assign('data',$this->data);
      $this->assign('list',$list);
      return $this->fetch();
      // echo $id;
    }

    public function read($id='')
    {
      $item = PostsModel::get($id);
      // $item['post_content'] = str_replace('&', '&amp;', $item['post_content']);

      $this->assign('item',$item);
      // $this->assign('data',$this->data);
      return $this->fetch();
      // echo $id;
    }
}
