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

    'admin/login/'    => 'admin/index/login',
    'admin/login_action/'=> 'admin/index/login_action',
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

    'admin/posts/create'        => 'admin/posts/create',
    'admin/posts/list'          => 'admin/posts/list',
    'admin/posts/read/:id'      => 'admin/posts/read/',
    'admin/posts/update/:id'    => 'admin/posts/update/',
    'admin/posts/delete/:id'    => 'admin/posts/delete',

    'admin/sys/index'           => 'admin/sys/index',
    'admin/sys/jianjie'           => 'admin/sys/jianjie',
    'admin/sys/zhuzhi'           => 'admin/sys/zhuzhi',
    'admin/sys/lingdao'           => 'admin/sys/lingdao',
    'admin/sys/xueshu'           => 'admin/sys/xueshu',
    'admin/sys/fangxiang'           => 'admin/sys/fangxiang',
    'admin/sys/mianmao'           => 'admin/sys/mianmao',
    'admin/sys/read/:id'        => 'admin/sys/read/',
    'admin/sys/delete/:id'      => 'admin/sys/delete/',
    'admin/sys/update/:id'      => 'admin/sys/update/',

    'admin/xwzx/create'         => 'admin/xwzx/create',
    'admin/xwzx/read/:id'       => 'admin/xwzx/read/',
    'admin/xwzx/delete/:id'     => 'admin/xwzx/delete/',
    'admin/xwzx/update/:id'     => 'admin/xwzx/update/',
    'admin/xwzx/list'           => 'admin/xwzx/list',
    'admin/xwzx/tpxw'           => 'admin/xwzx/tpxw',
    'admin/xwzx/zhxw'           => 'admin/xwzx/zhxw',
    'admin/xwzx/kytd'           => 'admin/xwzx/kytd',
    'admin/xwzx/xshd'           => 'admin/xwzx/xshd',
    'admin/xwzx/tzgg'           => 'admin/xwzx/tzgg',

    'sys/index'                 =>'sys/index',
    'sys/jianjie'           => 'sys/jianjie',
    'sys/zhuzhi'           => 'sys/zhuzhi',
    'sys/lingdao'           => 'sys/lingdao',
    'sys/xueshu'           => 'sys/xueshu',
    'sys/fangxiang'           => 'sys/fangxiang',
    'sys/mianmao'           => 'sys/mianmao',

    'xwzx/index'                =>'xwzx/index',
    'xwzx/tpxw'                 =>'xwzx/tpxw',
    'xwzx/zhxw'                 =>'xwzx/zhxw',
    'xwzx/xshd'                 =>'xwzx/xshd',
    'xwzx/kydt'                 =>'xwzx/kydt',
    'xwzx/tzgg'                 =>'xwzx/tzgg',
    'read/:id'                  => 'index/read/',

];
