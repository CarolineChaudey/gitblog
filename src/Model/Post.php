<?php

/**
 * Created by PhpStorm.
 * User: herve
 * Date: 16/06/17
 * Time: 18:43
 */
class Post {
	private $id;
	private $title;
	private $contain;
	private $created_date;
	private $update_date;
	private $autor_id;
	
	/**
	 * @return mixed
	 */
	public function getId ()
	{
		return $this->id;
	}
	
	/**
	 * @param mixed $id
	 */
	public function setId ($id)
	{
		$this->id = $id;
	}
	
	/**
	 * @return mixed
	 */
	public function getTitle ()
	{
		return $this->title;
	}
	
	/**
	 * @param mixed $title
	 */
	public function setTitle ($title)
	{
		$this->title = $title;
	}
	
	/**
	 * @return mixed
	 */
	public function getContain ()
	{
		return $this->contain;
	}
	
	/**
	 * @param mixed $contain
	 */
	public function setContain ($contain)
	{
		$this->contain = $contain;
	}
	
	/**
	 * @return mixed
	 */
	public function getCreatedDate ()
	{
		return $this->created_date;
	}
	
	/**
	 * @param mixed $created_date
	 */
	public function setCreatedDate ($created_date)
	{
		$this->created_date = $created_date;
	}
	
	/**
	 * @return mixed
	 */
	public function getUpdateDate ()
	{
		return $this->update_date;
	}
	
	/**
	 * @param mixed $update_date
	 */
	public function setUpdateDate ($update_date)
	{
		$this->update_date = $update_date;
	}
	
	/**
	 * @return mixed
	 */
	public function getAutorId ()
	{
		return $this->autor_id;
	}
	
	/**
	 * @param mixed $autor_id
	 */
	public function setAutorId ($autor_id)
	{
		$this->autor_id = $autor_id;
	}
	
	
}