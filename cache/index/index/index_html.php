<!DOCTYPE HTML>
<html>
<head>
<title>个人博客</title>

<link href="public/index/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="public/index/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="public/index/css/lightbox.css">

<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="public/index/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
</head>
<body>
<!-- header -->
<div class="banner">
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
					 <h1><a href="index.html">技术<span class="glyphicon glyphicon-knight" aria-hidden="true"></span><span>博客</span></a></h1>
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
		  <div class="banner-info">
		  	<?php if(!empty($_SESSION['username'])):?>
			 <h3>用户: <?=$_SESSION['username']?></h3>
			 <?php endif;?>
			 <?php if(empty($_SESSION['username'])):?>
			 <h3>游客您好</h3>
			 <?php endif;?>
			 <h2>欢迎访问杨傲然博客</h2>
		  </div>
		  <div class="social">
				<ul>
					<li><a href="#"><span class="fa"> </span></a></li>
					<li><a href="#"><span class="tw"> </span></a></li>
					<li><a href="#"><span class="g"> </span></a></li>
					<li><a href="#"><span class="in"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
				</ul>
				<div class="clearfix"></div>
		 </div>
	 </div>	 
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <div class="welcome-info">
				<h3>欢迎</h3>
				<h4>本技术博客欢迎各位前来学习.</h4>
				<p>Morbi condimentum imperdiet placerat. Nullam in nisl eget turpis convallis venenatis. Cras cursus elementum justo nec bibendum. Donec quis nisi cursus, vestibulum elit eget, sagittis ligula.</p>
	     </div>
	 </div>
</div>
<!---->  
<div class="content">
	 <div class="container">
		  <div class="col-md-8 content-left">
			 <div class="information">
				 <h4>Information</h4>
				 <div class="information_grids">
					 <div class="info">					 
						 <p>" Etiam ante arcu, vestibulum diam. Curabitur quis lectus. Pellentesque dictum odio velit.</p>
						 <a href="about.html">Read more</a>
					 </div>
					 <div class="info-pic">	
						 <img src="public/index/images/ps.png" class="img-responsive" alt=""/>
					 </div>
					 <div class="clearfix"></div>
				 </div>				 
			 </div>
			 <div class="games-grids">
					 <div class="game-grid-left">
						 <div class="grid1">
							 <h5 class="act"><a href="single.html">Action</a></h5>
							 <a href="single.html"><img src="public/index/images/c1.jpg" class="img-responsive" alt=""/></a>
							 <div class="grid1-info">
								 <h4><a href="single.html">Watch Dogs</a></h4>
								 <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>								 
							 </div>
							 <div class="more">
							 <a href="single.html">Read more</a>
							 </div>
						 </div>
						 <div class="grid2">
							 <h5 class="race"><a href="single.html">Racing</a></h5>
							 <a href="single.html"><img src="public/index/images/c2.jpg" class="img-responsive" alt=""/></a>
							 <div class="grid1-info">
								 <h4><a href="single.html">Monster Racing</a></h4>
								 <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>								 
							 </div>
							 <div class="more">
							 <a href="single.html">Read more</a>
							 </div>
						 </div>
					 </div>
					 
					 <div class="game-grid-right">
						 <div class="grid3">
							 <h5 class="sport"><a href="single.html">Sports</a></h5>
							 <a href="single.html"><img src="public/index/images/c3.jpg" class="img-responsive" alt=""/></a>
							 <div class="grid1-info">
								 <h4><a href="single.html">FIFA 2015</a></h4>
								 <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>								 
							 </div>
							 <div class="more">
							 <a href="single.html">Read more</a>
							 </div>
						 </div>
						 <div class="grid4">
							 <h5 class="arc"><a href="single.html">Arcade</a></h5>
							 <a href="single.html"><img src="public/index/images/c4.jpg" class="img-responsive" alt=""/></a>
							 <div class="grid1-info">
								 <h4><a href="single.html">Skylanders</a></h4>
								 <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>								 
							 </div>
							 <div class="more">
							 <a href="single.html">Read more</a>
							 </div>
						 </div>
					 </div>
					 <div class="clearfix"></div>
				 </div>
		  </div>
          <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
		  <div class="col-md-4 content-right">
			  <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav2" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?=$result_php[0]['type']?></a></li>
                    <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?=$result_java[0]['type']?></a></li>
                    </ul>
               <!-- Tab panes -->
              <div class="tab-content">
						<div role="tabpanel" class="tab-pane active re-pad2" id="home">
						<?php foreach($result_php as $value):?>
						   <div class="game1">
								<div class="col-md-3 tab-pic">
									<a href="index.php?c=blog&m=index&a=detail&bid=<?=$value['bid']?>"><img src="public/index/images/tr1.jpg" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-pic-info">
								<h4><a href="index.php?c=blog&m=index&a=detail&bid=<?=$value['bid']?>"><?=$value['title']?></a></h4>
								<p>Lorem Ipsum is simply dummy text of the printing industry.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						<?php endforeach;?>
						</div>
						<div role="tabpanel" class="tab-pane re-pad2" id="profile">
							<?php foreach($result_java as $v):?>
							<div class="game-post">
								<div class="col-md-3 tab-pic">
									<a href="index.php?c=blog&m=index&a=detail&bid=<?=$v['bid']?>"><img src="public/index/images/tr6.jpg" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-post-info">
								<h4><a href="index.php?c=blog&m=index&a=detail&bid=<?=$v['bid']?>"><?=$v['title']?></a></h4>
								<p>作者:<a href="#"><?=$value['username']?></a>
									<a href="#">日期:<?php echo date('Y/m/d',$v['create_time']);?></a></p>
								
								</div>
								<div class="clearfix"></div>
							</div>
							<?php endforeach;?>
						</div> 
						                   
			 </div>
			 <!---->
			 <div class="category blog-ctgry">
					<h4>Top Games</h4>
					<div class="list-group">
						<a href="#" class="list-group-item">Cras justo odio</a>
						<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
						<a href="#" class="list-group-item">Morbi leo risus</a>
						<a href="#" class="list-group-item">Porta ac consectetur ac</a>
						<a href="#" class="list-group-item">Vestibulum at eros</a>
						<a href="#" class="list-group-item">Quisque elementum </a>
						<a href="#" class="list-group-item">Vestibulum eleifend</a>
						<a href="#" class="list-group-item">Donec sit amet justo </a>
					</div>
			 </div>	
			 <div class="photo-gallery">
				 <h4>Photo Gallery</h4>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p2.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p2.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p1.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p1.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p3.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p3.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p4.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p4.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p5.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p5.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p6.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p6.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p1.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p1.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p3.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p3.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="public/index/images/p4.jpg" data-lightbox="example-set"><img class="example-image" src="public/index/images/p4.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>

			 </div>

		  </div>
		  <div class="clearfix"></div>
	 </div>
</div>
<script src="public/index/js/lightbox-plus-jquery.min.js"></script>

<!-- footer -->
<?php include 'cache/index/index/foot_html.php';?>


</body>
</html>