<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a href="mailto:@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info(at)example.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+1)000 123 456789</li>
					</ul>
			  </div>
		 </div>
		 <div class="banner_head_top">
			  <div class="logo">
					<h1><a href="index.html">Game<span class="glyphicon glyphicon-knight" aria-hidden="true"></span><span>Spot</span></a></h1>
			 </div>	
			 <div class="top-menu">	 
			     <div class="content white">
					 <nav class="navbar navbar-default">
						 <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				
						 </div>
						 <!--/navbar header-->		
						 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav">
								 <li class="active"><a href="index.php">首页</a></li>
								 <?php if(!empty($_SESSION['uid'])):?>
									
										<li><a href="index.php?c=user&m=index&a=logOut">退出</a></li>
										<?php if($_SESSION['type']==1):?>
										<li><a href="index.php?c=user&m=index&a=logAdmin">进入后台</a></li>
										<?php endif;?>
								<?php endif;?>
								<?php if(empty($_SESSION['uid'])):?>
										<li><a href="index.php?c=user&m=index&a=login">登录</a></li>
										<li><a href="index.php?c=user&m=index&a=register">注册</a></li>
								<?php endif;?>
								 <li class="dropdown">
									<a href="index.php?c=blog&m=index&a=blog" class="scroll dropdown-toggle" data-toggle="dropdown">博客<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="index.php?c=blog&m=index&a=blog&type=PHP">PHP</a></li>
										<li><a href="index.php?c=blog&m=index&a=blog&type=Java">Java</a></li>
									</ul>
								 </li>					
								<li><a href="index.php?c=index&m=index&a=gallery">Gallery</a></li>
								 <li><a href="index.php?c=index&m=index&a=about">关于我们</a></li>
							 </ul>
						</div>
						  <!--/navbar collapse-->
					 </nav>
					  <!--/navbar-->
				 </div>
					 <div class="clearfix"></div>
					<script type="text/javascript" src="public/index/js/bootstrap-3.1.1.min.js"></script>
			  </div>
				 <div class="clearfix"></div>
		  </div>
	 </div>	 
</div>