<?php

namespace app\admin\model;

use think\Model;

class User extends Model{
  // 设置完整的数据表（包含前缀）
  protected $table = 'think_user';

  // // 读取器
  // protected function getUserBirthdayAttr($birthday, $data)
  // {
  //   return date('Y-m-d', $data['birthday']);
  // }
  // // birthday修改器
  // protected function setBirthdayAttr($value)
  // {
  //   return strtotime($value);
  // }

  // 定义类型转换
  protected $type = [
  'birthday' => 'timestamp:Y/m/d',
  ];
  // 定义自动完成的属性
  protected $insert = ['status'];


  // 属性修改器
  protected function setLastLoginTimeAttr($value, $data)
  {
      return time();
  }

  protected function getLastLoginTimeAttr($datetime)
  {
      return date('Y-m-d H:i:s', $datetime);
  }

  // status属性修改器
  protected function setStatusAttr($value)
  {
    return $value;
  }
  // status属性读取器
  protected function getStatusAttr($value)
  {
    $status = [-1=>'删除',0=>'禁用',1=>'正常',2=>'待审核'];
    return $status[$value];
  }

}
