<?php
	
	namespace index\model;
	use yar\framework\Model;

	
	class Blog extends Model
	{

		//展示所有博客
		public function blogList()
		{
			return $this->field('*')->where("type!='null'")->select();
		}
		//展示PHP内容
		public function phpBlog()
		{
			return $this->field('*')->where("type='PHP'")->select();
		}
		//展示Java内容
		public function javaBlog()
		{
			return $this->field('*')->where("type='Java'")->select();
		}
		public function getBlogs($type)
		{
			return $this->field('*')->where("type='$type'")->select();
		}
		//划分博客
		public function blogDivide($type,$limit)
		{
			
			 return $this->field('*')->limit("$limit")->where("type='$type'")->select();
		}
		public function blogShow($bid)
		{
			return $this->field('*')->where("bid=$bid")->select();
		}
		//展示评论
		public function commentShow($bid)
		{
			return $this->field('*')->where("sid=$bid")->select();
		}
		public function doComments($data)
		{
			 return $this->insert($data);
		}
	}
