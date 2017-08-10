<?php

	namespace index\controller;
	use index\controller\BaseController;
	use index\model\Blog;

	class IndexController extends BaseController
	{
		protected $blog;
		public function _init()
		{
			$this->blog = new Blog();
		}
		//首页展示
		public function index()
		{
			$data = $this->blog->blogList();
			
			$result_php = $this->blog->phpBlog();

			$result_java = $this->blog->javaBlog();

			$this->assign('data',$data);
			$this->assign('result_php',$result_php);
			$this->assign('result_java',$result_java);
			//模板名称和当前方法名称一致
			// $this->display('index/index.html',true);
			$this->display();
		}
		//画廊
		public function gallery()
		{
			$this->display();
		}
		//关于我们
		public function about()
		{
			$this->display();
		}
	
	
	}