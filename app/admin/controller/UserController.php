<?php

	namespace admin\controller;
	use admin\controller\BaseController;
	use yar\framework\VerifyCode;
	use admin\model\User;

	class UserController extends BaseController
	{
		protected $user;

		public function _init()
		{
			$this->user = new User();
		}
		public function logOut()
		{
			unset($_SESSION['username']);
			unset($_SESSION['uid']);
			$this->success('退出成功','index.php');
		}
		public function userShow()
		{
			$type = $_SESSION['type'];
			$data = $this->user->userList($type);
			$this->assign('data',$data);
			$this->display();
		}
		public function changeInfo()
		{
			var_dump($_POST);
			
		}

	}