<?php

	namespace admin\controller;
	use admin\controller\BaseController;
	use admin\model\Blog;
	use yar\framework\Parser;
	use yar\framework\Page;

	class BlogController extends BaseController
	{	
		protected $blog;
		protected $con;
		protected $page;

		public function _init()
		{
			$this->blog = new Blog();
			$this->con = new Parser(); 
		}
		public function blog()
		{
			$type = 'NULL';
			$data = $this->blog->showBlog($type);

			//获得总数据数
			//$result = $this->blog->getBlogs($type);
			$total = count($data);
		
			$this->page = new Page($total,5);
			//获取limit条件
			$limit = $this->page->limit();
			$data = $this->blog->blogs($limit);

			//首页
			$headPage = $this->page->first();
			//尾页
			$tailPage = $this->page->last();
			//上一页
			$prevPage = $this->page->pre();
			//下一页
			$nextPage = $this->page->next();
			//得到总页数
			$allpage = $this->page->allPage();
		
			$this->assign('prevPage',$prevPage);
			$this->assign('nextPage',$nextPage);
			$this->assign('headPage',$headPage);
			$this->assign('tailPage',$tailPage);

			$this->assign('data',$data);
			$this->display();
		}

		public function select()
		{
			$type = 'NULL';
			$title = $_POST['title'];

			$data = $this->blog->selectBlog($type,$title);
		
			//获得总数据数
			//$result = $this->blog->getBlogs($type);
			$total = count($data);
			$this->page = new Page($total,5);
			//获取limit条件
			$limit = $this->page->limit();
			$data = $this->blog->showblogs($limit,$title);
			
			//首页
			$headPage = $this->page->first();
			//尾页
			$tailPage = $this->page->last();
			//上一页
			$prevPage = $this->page->pre();
			//下一页
			$nextPage = $this->page->next();
			//得到总页数
			$allpage = $this->page->allPage();
		
			$this->assign('prevPage',$prevPage);
			$this->assign('nextPage',$nextPage);
			$this->assign('headPage',$headPage);
			$this->assign('tailPage',$tailPage);

			$this->assign('data',$data);
			$this->display();
		}

		public function addBlog()
		{
			$this->display();
		}
		public function articleInsert()
		{
			date_default_timezone_set('PRC');

			$title = $_POST['title'];
			$content = $_POST['con'];
			$type = $_POST['type'];
			$time = time();
			$username = $_SESSION['username'];
			$content = $this->con->makeHtml($content);
			
			$data = [
				'username' 		=> "$username",
				'title'    		=> "$title",
				'content'  		=> "$content",
				'type'    		=> "$type",
				'create_time' 	=> "$time",
			];
			$result = $this->blog->blogInsert($data);
			if ($result)
			{
				$this->success('发表成功','index.php?c=index&m=admin&a=index');
			}
		}

		public function details()
		{
			$bid = $_GET['bid'];
			$data = $this->blog->blogList($bid);
			$this->assign('data',$data);
			$this->display();
		}
		public function changeBlog()
		{
			date_default_timezone_set('PRC');
			$bid = $_GET['bid'];
			$content = $_POST['con'];
			$title = $_POST['title'];
			$time = time();
			$data = [
				'content' => "$content",
				'title'	  => "$title",
				'time'    => "$4time",
			];
			$result = $this->blog->updateBlog($data,$bid);
			if ($result)
			{
				$this->success('修改成功','index.php?c=index&m=admin&a=index');
			}
			else
			{
				$this->error('修改失败','index.php?c=index&m=admin&a=index');
			}
		}
		public function article()
		{
			$this->display();
		}
	}