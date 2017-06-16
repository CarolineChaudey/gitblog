<?php

/**
 * Created by PhpStorm.
 * User: herve
 * Date: 16/06/17
 * Time: 18:28
 */
class DataBase {
	
	// Database object
	private $dataBase;
	
	function __construct () {
		$this->dataBase = new PDO('mysql:......;charset=utf8', 'username', 'password');
		$this->dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->dataBase->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	
}