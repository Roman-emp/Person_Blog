<?php

	namespace admin\model;
	use yar\framework\Model;

	class Blog extends Model
	{
		public function doLogin($username,$password)
		{
			return $this->field('*')->where("username='$username' and pwd='$password'")->select();
		}
		public function showBlog($type)
		{
			return $this->field('*')->where("type!='$type'")->select();
			
		}
		public function blogs($limit)
		{
			
			 return $this->field('*')->limit("$limit")->where("type!='null'")->select();
		}
		public function showblogs($limit,$title)
		{
			return $this->where("content like '%$title%' and type!='null'")->field('*')->limit("$limit")->select();
		}
		public function blogList($bid)
		{
			return $this->field('*')->where("bid='$bid' and type!='null'")->select();
			
		}
		public function updateBlog($data,$bid)
		{
			return $this->where("bid='$bid'")->update($data);
		}
		public function blogInsert($data)
		{
			return $this->insert($data);
		}

		public function selectBlog($type,$name)
		{
			return $this->where("content like '%$name%' and type!='$type'")->field('*')->select();
		}
	}