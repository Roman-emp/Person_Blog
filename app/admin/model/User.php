<?php

	namespace admin\model;
	use yar\framework\Model;

	class User extends Model
	{
		public function doLogin($username,$password)
		{
			return $this->field('*')->where("username='$username' and pwd='$password'")->select();
		}
		public function userList($type)
		{
			return $this->field('*')->where("type='$type'")->select();
		}
	}