<?php

$use_test_account = true;

define( 'WECHAT_APPID', $use_test_account? 'wx97eaa4a1320ff795': 'wxa4ddad61df39d191');
define( 'WECHAT_APPSECRET', $use_test_account? '4f57a649e1e08de0a8fa1075f94f9cb0': '298befb9e2bd11279f8af392390803dd');
define( 'WECHAT_TOKEN', $use_test_account? '': '');

define( 'WECHAT_DOMAIN', $use_test_account? 'http://tk3wgw.natappfree.cc': 'https://app.trifocus.com');
define( 'WECHAT_TEMPL_ID_APPROVAL', $use_test_account? 'cLsTPx-bp2QxOI8RZGorZjAhHSf-INaoYkeekufh75w': 'XbX2NvV-D5j6AhED5Pu0lYVFBJXXTnJGZwaTdbTv-S4');

// 路由路径表
$GLOBALS['wccfg_state_path'] = array(
	'home' => '/',
	'test' => '/test',
	'addentry' => '/node/add/data-entry',
);

