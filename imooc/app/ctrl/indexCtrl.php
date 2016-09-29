<?php
namespace app\ctrl;
header('content-type:text/html;charset=utf8');
class indexCtrl extends \core\imooc
{
	public function index()
	{

		
		$model = new \app\model\biaoModel();
		$data=$model->lists();
		dump($data);
	}

	public function indextwo()
	{
		$data = 'Hello world';
		$this->assign('data',$data);
		$this->display('index.html');
	}
}