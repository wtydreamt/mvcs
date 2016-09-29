<?php
namespace app\model;
use core\lib\model;
class biaoModel extends model
{
	public $tableName = "biao";
	public function lists()
	{
		$res=$this->select($this->tableName,"*");
		return $res;
	}
}