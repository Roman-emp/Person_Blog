<?php

	namespace index\controller;
	use index\controller\BaseController;
	use index\model\Blog;
	use yar\framework\Parser;
	use yar\framework\Page;

	class BlogController extends BaseController
	{
		protected $blog;
		protected $page;

		public function _init()
		{
			$this->blog = new Blog();
		}
		
		public function blog()
		{
			$type = $_GET['type'];
			
			//获得总数据数
			$result = $this->blog->getBlogs($type);
			$total = count($result);
			$this->page = new Page($total,2);
			//获取limit条件
			$limit = $this->page->limit();
			$data = $this->blog->blogDivide($type,$limit);

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
		public function detail()
		{
			$bid = $_GET['bid'];
			//博客标题、内容
			$data = $this->blog->blogShow($bid);
			$this->assign('data',$data);
			//留言内容
			$result = $this->blog->commentShow($bid);
			$this->assign('result',$result);
			//统计评论
			$count = count($result);

			$this->assign('count',$count);
			$this->display();
		}
		public function comment()
		{
			date_default_timezone_set('PRC');
			if (!empty($_SESSION['username'])) 
			{
				
				$reply_content = trim($_POST['content']);
				if (empty($reply_content))
				{
					$this->error('留言内容不能为空');
				}
				$reply_time = time();
				$reply_person = $_SESSION['username'];
				//记录留言的是哪个博客
				$sid = $_GET['bid'];
				$data = [
					'sid'			=> "$sid",
					'reply_content' => "$reply_content",
					'reply_person'	=> "$reply_person",
					'reply_time'	=> "$reply_time",
				];
				
				$result = $this->blog->doComments($data);

				if ($result)
				{
					$this->success('留言成功');
				}
				else
				{
					$this->error('留言失败');
				}
			}
			else
			{
				$this->error('未登录禁止留言');
			}
		}

		
	}