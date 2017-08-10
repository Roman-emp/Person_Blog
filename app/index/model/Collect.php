<?php

	namespace index\model;
	use yar\framework\Model;
	use yar\framework\Page;

	class Collect extends Model
	{
		protected $collect;

		public function collectInsert($data)
		{
			  return $this->insert($data);
		}
	}