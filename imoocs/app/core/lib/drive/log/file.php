<?php 
namespace core\lib\drive\log;
use core\lib\conf;
   //文件的形式储存
class file
{
	public $path; //日志储存的位置
	public function __construct()
	{
		$paths=conf::get('OPTION','log');
		$this->path=$paths['PATH'];
	}
	public function log($message,$file = 'log')
	{
		/*
		*
		*确定文件存储的位置是否正确否则重新建立
		*写入日志 
		*/
	    $data=date('YmdH');
        $files=$this->path.$data;
		is_dir($files)or mkdir($files,0777,true);
	    $message=json_encode($message);
		return file_put_contents($files.'/'.$file.'.php',date('Y-m-d H:i:s').$message.PHP_EOL,FILE_APPEND);
	}
}