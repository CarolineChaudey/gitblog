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

	private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "xxx";
	private $dbname		= "gitblog";


	function __construct () {
		try {
			$this->dataBase = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
			$this->dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->dataBase->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch(PDOException $e) {
			// TODO return error page
		}
	}
	
}