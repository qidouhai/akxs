<?php
// +----------------------------------------------------------------------
// | KyxsCMS [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018~2019 http://www.kyxscms.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: kyxscms
// +----------------------------------------------------------------------

// 应用行为扩展定义文件
return [
    // 应用初始化
    'app_begin'     => [
    	'app\\admin\\behavior\\LoginStatus'
    ],
];