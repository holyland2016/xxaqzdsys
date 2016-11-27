<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'id' => '\d+',
    ],

    // 路由器规则定义
    'admin/index'     => 'admin/user/index',
    'admin/create'    => 'admin/user/create',
    'admin/add'       => 'admin/user/add',
    'admin/add_list'  => 'admin/user/addList',
    'admin/read/:id'  => 'admin/user/read',
    'admin/forbidden/:id'  => 'admin/user/forbidden',
    'admin/open/:id'  => 'admin/user/open',
    'admin/update/:id'=> 'admin/user/update',
    'admin/delete/:id'=> 'admin/user/delete',
    'admin/:id'       => 'admin/user/read',

    'admin/posts/create'     => 'admin/posts/create',
    'admin/posts/list'       => 'admin/posts/list',
    'admin/posts/delete/:id' => 'admin/posts/delete',

];
