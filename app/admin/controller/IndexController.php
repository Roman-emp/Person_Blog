<?php

	namespace admin\controller;
	use admin\controller\BaseController;
	use admin\model\User;

	class IndexController extends BaseController
	{
		public function _init()
		{
			$this->user = new User();
		}

		public function yzm()
		{
			$code = new VerifyCode();
			$code->outputImage();
			$_SESSION['yzm'] = $code->getCode();
		}
		public function checkLogin()
		{
			
			$username = trim($_POST['username']);
			$password = md5(trim($_POST['password']));
			$code = $_POST['code'];
			$yzm = $_SESSION['yzm'];

			if (strcmp($code, $yzm))
			{
				$this->error('验证码错误');
			}
			$result = $this->user->doLogin($username,$password);
			
			if ($result)
			{
				$this->success('登录成功','index.php?c=index&m=admin&a=index');
			}
		}
		public function index()
		{
			$this->display();
		}
	}
