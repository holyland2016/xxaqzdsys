<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\User as UserModel;
class UserController extends controller{

  // 模块基本信息
  private $data = array(
		'module_name' => '管理员',
		'module_url'  => '/admin/read/',
		);

    // 获取用户的数据
  public function index()
  {
    $list =UserModel::all();
    $this->assign('data',$this->data);
    $this->assign('list',$list);
    $this->assign('count',count($list));
    // return view('', '', ['__PUBLIC__' => '/static']);
    // 实例化视图类
    return $this->fetch('index',[],['__PUBLIC__'=>'/static']);
  }

  // 新增用户数据
  public function add()
  {
    $user = new UserModel;
    if ($user->allowField(true)->save(input('post.'))) {
    $this->redirect('index/index');
    } else {
    return $user->getError();
    }
  }

  // 禁用账户
  public function forbidden($id)
  {
    $user = new UserModel;
    $data['id'] = $id;
    $data['status'] = 2;
    $data['last_login_time'] = time();
    $request = request();
    $data['last_login_ip'] = $request->ip();

    // $user->where($id)->update($data);
    if ($user->update($data)) {
        $this->redirect('index/index');
      } else {
        return $user->getError();
      }
  }

  public function open($id)
  {
    $user = new UserModel;
    $data['id'] = $id;
    $data['status'] = 1;
    $data['last_login_time'] = time();
    $request = request();
    $data['last_login_ip'] = $request->ip();
    if ($user->update($data)) {
        $this->redirect('index/index');
      } else {
        return $user->getError();
      }
  }

  // 删除用户数据
  public function delete($id)
  {
    $result = UserModel::destroy($id);
    if($result){
      $this->redirect('index/index');
    }else{
      return $result->getError();
    }
  }


}
