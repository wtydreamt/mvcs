<?php
 namespace core;

 class imooc
 {
 	public static $classMap=array();
 	public $assign;
 	static public function run()
 	{
 		\core\lib\log::init();              //启动日志功能
 		\core\lib\log::log('SSS');         //启动日志功能
 		$route = new \core\lib\route();
 		$ctrlClass=$route->ctrl;
 		$action=$route->action;
 		$ctrlfile= APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
 		$ctrlClass= '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
 		if(is_file($ctrlfile))
 		{
 			include $ctrlfile;
 			$ctrl= new $ctrlClass();
 			$ctrl->$action();
 			\core\lib\log::log('ctrl:'.$route->ctrl.PHP_EOL.'action:'.$route->action);
 		}
 		else
 		{
 			throw new \Exception('找不到服务器'.$ctrlClass);
 		}
 	}
 	static public function load($class)
 	{
 		//自动加载类库
 		//new \core\route;
 		//$class ='\core\route'
 		// p($class);
 		//p(WTY.'/'.$class.'.php');
 		
 		if(isset($classMap[$class]))
 		{
 			return true;
 		}
 		else
 		{
 			$class=str_replace('\\','/',$class);
 			$file= WTY.'/'.$class.'.php';
			if(is_file($file))
	 		{
	 			include $file;
	 			self::$classMap[$class]=$class;
	 		}
	 		else
	 		{
	 			return flase;
	 		} 			
 		}
 
 	}

 	public function assign($name,$value)
 	{
 		$this->assign[$name] = $value;
 	}

 	public function display($file)
 	{
 		$files = APP.'/views/'.$file;
 		if(is_file($files))
 		{
			\Twig_Autoloader::register();

			$loader = new \Twig_Loader_Filesystem(APP.'/views');
			$twig = new \Twig_Environment($loader, array(
			    'cache' => WTY.'/log/twig',
			    'debug' => DEBUG
			));
			$template = $twig->loadTemplate($file);
			$template->display($this->assign?$this->assign:array());
 		}
 	}
 }