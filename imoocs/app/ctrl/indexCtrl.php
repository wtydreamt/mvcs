<?php
namespace app\ctrl;
header('content-type:text/html;charset=utf8');
class indexCtrl extends \core\imooc
{
	public function index()
	{

		$model = new \app\model\mvcModel();
		$data=$model->lists();
		$this->assign('data',$data);
		$this->display('index.html');
	}



	public function add()
	{

		$this->display('add.html');		
	}

	public function save()
	{
		$arr=$_POST;
		$model = new \app\model\mvcModel();
		$data=$model->add($arr);
		jump("/");
	}
}