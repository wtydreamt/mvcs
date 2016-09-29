<?php
/*
*入口文件
*1.定义常量
*2.加载函数库
*3.启动框架
*/
define('WTY',realpath('./')); //当前框架所在的目录
define('CORE',WTY.'/core');  //框架的核心文件
define('APP',WTY.'/app');
define('MODULE','app');
define('DEBUG',true);

include "vendor/autoload.php";
	if(DEBUG)
	{
		$whoops = new \Whoops\Run;
		$errorTile= '框架出错了';
		$option= new \Whoops\Handler\PrettyPageHandler();
		$option->setPageTitle($errorTile);
		$whoops->pushHandler($option);
		$whoops->register();
		ini_set('display_error','On');
	}
	else
	{
		ini_set('display_error','Off');
	}
include CORE.'/common/function.php'; //加载函数库
include CORE.'/imooc.php';
spl_autoload_register('\core\imooc::load'); //实现类自动加载功能
\core\imooc::run();