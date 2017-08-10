<?php

	namespace index\model;
	use yar\framework\Model;

	class User extends Model
	{
		public function DealLogin($username,$password)
		{
			
			return $this->field('*')->where("username='$username' and pwd='$password'")->select();
		}
		
		public function usernameRepeat($username)
		{
			$data =  $this->field('*')->where("username='$username'")->select();
			//1如果用户存在返回true，否则返回fale
			return !empty($data[0]);
		}
		public function DealRegister($data)
		{
			//var_dump($data);
			return $this->insert($data);
			//var_dump($this->sql);
		}
	}