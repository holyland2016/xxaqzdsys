<?php

namespace app\admin\model;

use think\Model;

class Yjs extends Model{
  // 设置完整的数据表（包含前缀）
  protected $table = 'think_yjs';

  // 关闭自动写入时间戳
  //protected $autoWriteTimestamp = false;

  //默认时间格式
  protected $dateFormat = 'Y-m-d H:i:s';

  protected $type       = [
      // 设置时间戳类型（整型）
      'create_time'     => 'timestamp',
      'update_time'     => 'timestamp',
  ];

  //自动完成
  protected $insert = [
    'create_time',
    'update_time',
  ];

  protected $update = ['update_time'];

  // status属性读取器
  protected function getStatusAttr($value)
  {
      $status = [-1 => '删除', 0 => '草稿', 1 => '发布',2 => '待审核'];
      return $status[$value];
  }

  protected function getTaxonomyAttr($value)
  {
      $taxonomy = [ 1=>'招生指南',2=>'研究生导师',3=>'在读研究生',4=>'毕业生'];
      return $taxonomy[$value];
  }

}
