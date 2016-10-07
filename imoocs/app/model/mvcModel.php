<?php
namespace app\model;
use core\lib\model;
class mvcModel extends model
{
	public $tableName = "log";
	public function lists()
	{
		$res=$this->select($this->tableName,"*");
		return $res;
	}
	public function add($data)
	{
		$res=$this->insert($this->tableName,$data);
		return $res;		
	}
}