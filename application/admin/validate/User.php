<?php
namespace app\admin\validate;
use think\Validate;

/**
 *
 */
class User extends Validate
{
    // 验证规则
    protected $rule = [
      ['nickname', 'require|min:5','昵称必须|昵称不能短于5个字符'],
      ['email' ,'email','邮箱格式错误'],
      ['birthday','dateFormate:Y-m-d','生日格式错误'],
    ];

}
