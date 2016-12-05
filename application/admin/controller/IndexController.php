<?php
namespace app\admin\controller;
use app\admin\model\User;
use app\admin\model\Posts;
use app\admin\controller\AdminAuthController;
use think\Validate;
/**
 *
 */
class IndexController extends AdminAuthController
{

  public function index()
  {
      $this->data['admin_count'] = UserModel::where('status','=',1)->count();
      $this->data['post_count_all'] = PostsModel::where('status','>=',0)->count();
      $this->data['post_count_latest_month'] = Posts::whereTime('create_time','>=',date('Y-m-01'))->where('status','>=',0)->count();
      $this->assign('data',$this->data);
      return $this->fetch();
  }

  public function login()
  {
      // $this->view->engine->layout(false);
      return view();
  }
  public function login_action(){

        $user = new User;
        $data = input('post.');
        $preview = $user->where(array('username'=>$data['admin_username'],'status'=>1))->find();
        if(!$preview){
            $this->error('用户不存在');
        }

        $where_query = array(
                'username' => $data['admin_username'],
                'password' => $data['admin_password'],
                'status'   => 1
            );
        if ($user = $user->where($where_query)->find()) {
            //注册session
            session('uid',$user->id,'think');
            session('admin_username',$user->username,'think');
            session('admin_password',$user->password,'think');
            session('admin_nickname',$user->nickname,'think');

            //更新最后请求IP及时间
            $request = request();
            $ip = $request->ip();
            $time = time();
            //$expire_time = time()+config('auth_expired_time');
            $user->where($where_query)->update(['last_login_ip' => $ip, 'last_login_time' => $time]);

            return $this->success('登录成功', '/admin/index');
        } else {
            $this->error('登录失败:账号或密码错误');
        }
    }

}
