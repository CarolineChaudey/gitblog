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
	
	public function getNew(int $id) {
		$prepare = $this->database->prepare("SELECT * FROM Post WHERE id = $id");
		$prepare->execute();
		return $prepare->fetch();
	}
	
	public function updateNew(int $id, String $title, String $content) {
		$prepare = $this->database->prepare("UPDATE Post SET title=:title, contenu=:content WHERE id = $id");
		$prepare->execute([
				'title' => $title,
				'content' => $content
		]);
	}
	public function createNew(String $title, String $content) {
		$prepare = $this->database->prepare("INSERT INTO gitblog.Post (title, contenu) VALUES (:title, :content);");
		return $prepare->execute([
				'title' => $title,
				'content' => $content
		]);
	}
	
	
	public function removeNew(int $id) {
		$prepare = $this->database->prepare("DELETE FROM Post WHERE id = $id");
		$prepare->execute();
	}
}