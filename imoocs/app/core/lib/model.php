<?php
namespace core\lib;
use core\lib\conf;
class model extends \medoo
{
	public function __construct()
	{
		$data=conf::all('database');

		parent::__construct($data);

	}
}