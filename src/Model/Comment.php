<?php

/**
 * Created by PhpStorm.
 * User: herve
 * Date: 16/06/17
 * Time: 18:44
 */
class Comment {
	private $id;
	private $content;
	private $created_date;
	private $update_date;
	private $post_id;
	private $author_id;
	
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
	public function getContent ()
	{
		return $this->content;
	}
	
	/**
	 * @param mixed $content
	 */
	public function setContent ($content)
	{
		$this->content = $content;
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
	public function getPostId ()
	{
		return $this->post_id;
	}
	
	/**
	 * @param mixed $post_id
	 */
	public function setPostId ($post_id)
	{
		$this->post_id = $post_id;
	}
	
	/**
	 * @return mixed
	 */
	public function getAuthorId ()
	{
		return $this->author_id;
	}
	
	/**
	 * @param mixed $author_id
	 */
	public function setAuthorId ($author_id)
	{
		$this->author_id = $author_id;
	}
}