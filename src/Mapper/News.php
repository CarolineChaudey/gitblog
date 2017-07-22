<?php


class News {
	private $database;
	
	
	public function __construct () {
		$this->database = (new DataBase())->getDataBase();
	}
	
	public function getAllNews() {
		$prepare = $this->database->prepare("SELECT * FROM Post ORDER BY created_date;");
		$prepare->execute();
		return $prepare->fetchAll();
	}
}