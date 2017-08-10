<?php

	namespace index\controller;
	use index\controller\BaseController;
	use yar\framework\VerifyCode;
	use index\model\User;

	class UserController extends BaseController
	{
		protected $user;

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
		//检查登录
		public function checkLogin()
		{
			
			$username = trim($_POST['username']);
			$password = md5(trim($_POST['password']));
			$code = $_POST['code'];
			$yzm = $_SESSION['yzm'];

			//判断验证码是否正确
			if (strcmp($code, $yzm))
			{
				$this->error('验证码错误');
			}
			$result = $this->user->DealLogin($username,$password);
			if ($result)
			{
				$_SESSION['username'] = $result[0]['username'];
				$_SESSION['uid'] = $result[0]['uid'];
				$_SESSION['type'] = $result[0]['type'];
				$this->success('登录成功',"index.php");
			}
			else
			{
				$this->error("用户名或密码不正确");
			}
		}
		public function login()
		{
			
			// $data = $this->user->checkLogin();
			// $this->assign('data',$data);
			$this->display();
		}
		//检查注册
		public function DoRegister()
		{
			
			date_default_timezone_set('PRC');
			$yzm = $_SESSION['yzm'];

			//接收数据
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$repwd = trim($_POST['repassword']);
			$email = trim($_POST['email']);
			$code = trim($_POST['code']);
			$create_time = time();
			
			//验证用户名、邮箱等
			if ($this->user->usernameRepeat($username))
			{
				$this->error('用户名重复');
			}
		
			if (strcmp($password, $repwd))
			{
				$this->error('密码两次输入不一致');
			}
			if (strcmp($code, $yzm))
			{
				$this->error('验证码不正确');
			}
			if (strlen($password)<6)
			{
				$this->error('密码长度不能少于6位');
			}
			//邮箱匹配
			$nam = '/\w+@\w+\.(com|cn|net)$/';
			
			if (!preg_match($nam, $email, $result))
			{
				$this->error('邮箱格式不正确');
			}

			//数据存入数组
			$password = md5(trim($_POST['password']));
			$data = [
					'username' 		=> "$username",
					'pwd'	   		=> "$password",
					'create_time'	=> $create_time,
					'email'			=> $email,
				];
				
			$result = $this->user->DealRegister($data);
		
			if ($result && count($result)>0)
			{
				$this->success('注册成功','index.php');
			}

		}
		public function register()
		{
			$this->display();
		}

		//退出登录
		public function logOut()
		{
			
			unset($_SESSION['username']);
			unset($_SESSION['uid']);
			$this->success('退出成功','index.php');
		}

		//登录后台
		public function logAdmin()
		{
			$this->display();
		}
	}

