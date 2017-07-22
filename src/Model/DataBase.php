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
	private $password 	= "";
	private $dbname		= "gitblog";


	function __construct () {
		try {
			$this->dataBase = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
			$this->dataBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			// TODO return error page
			return "error initializing connection.";
		}
	}

	public function getDataBase() {
		return $this->dataBase;
	}

}
