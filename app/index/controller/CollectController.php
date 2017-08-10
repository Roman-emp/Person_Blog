<?php

	namespace index\controller;
	use index\controller\BaseController;
	use index\model\Collect;

	class CollectController extends BaseController
	{
		protected $collect;

		public function _init()
		{
			$this->collect = new Collect();
		}
		//收藏博客
		public function collect()
		{

			date_default_timezone_set('PRC');
			$bid = $_GET['bid'];
			$uid = $_SESSION['uid'];
			$username = $_SESSION['uid'];
			$collect_time = time();
			
			$data = [
				'bid' 			=> "$bid",
				'uid' 			=> "$uid",
				'username' 		=> "$username",
				'collect_time' 	=> "$collect_time",
			];
		
			$result = $this->collect->collectInsert($data);
			
			if ($result)
			{
				$this->success('收藏成功',"index.php?c=blog&m=index&a=detail&bid=$bid");
			}
		}
	}