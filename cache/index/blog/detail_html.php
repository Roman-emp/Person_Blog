<!DOCTYPE HTML>
<html>
<head>
<title>Single</title>

<link href="public/index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/index/css/style.css" rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="md/examples/css/style.css" />
    <link rel="stylesheet" href="md/css/editormd.preview.css" />
    <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="public/index/js/jquery-1.11.1.min.js"></script>
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
</head>
<body>
<!-- header -->
	<?php include 'cache/index/Index/head_html.php';?>
<!---->
<div class="container">
		<div class="single">
			<div class="blog-to">		
					
			<img class="img-responsive sin-on" src="public/index/images/sin1.jpg" alt="" />
				<div class="blog-top">
				<div class="blog-left">
					<b><?php echo date('M',$data[0]['create_time']);?></b>
					<span><?php echo date('d',$data[0]['create_time']);?></span>
				</div>
				<div class="top-blog">
					<h3 class="fast" href="#"><?=$data[0]['title']?></h3>
					<p>作者 <a href="#">Admin</a> | <a href="index.php?c=collect&m=index&a=collect&bid=<?=$data[0]['bid']?>">收藏</a></p> 
					<p class="sed"><?=$data[0]['content']?></p>
					<div class="col-md-6 md-in">
			
			</div>
			
			<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
						
					
				
		<div class="single-middle">
		<?php if(!empty($result)):?>	
			<h3>评论:<?php echo count($result);?></h3>
			<?php foreach($result as $v):?>
				<div class="media">
				  <div class="media-left">
					<a href="#">
					  <img class="media-object" src="public/index/images/co.png" alt="">
					</a>
				  </div>
				
				  <div class="media-body">
					<h4 class="media-heading"><a href="#"><?=$v['reply_person']?></a>&nbsp;<span>留言时间:<?php echo date('Y/m/d',$v['reply_time']);?></span></h4>
						<p><?=$v['reply_content']?></p>
				  </div>
				 
				</div>
			<?php endforeach;?>
		<?php endif;?>
		<?php if(empty($result)):?>
			<h3>评论:无</h3>
		<?php endif;?>
				<!--楼中楼 <div class="media in-media">
				  <div class="media-left">
					<a href="#">
					  <img class="media-object" src="public/index/images/co.png" alt="">
					</a>
				  </div>
				   <div class="media-body">
					<h4 class="media-heading"><a href="#">Joseph Goh</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit .</p>
				  </div>
				</div> -->
		</div>
		<!---->
		<div class="single-bottom">
		
			<h3>留言</h3>
				<form action="index.php?c=blog&m=index&a=comment&bid=<?=$data[0]['bid']?>" method="post">
						
						<div class="clearfix"> </div>
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}" name="content">Message</textarea>
						
						<input type="submit" value="发送" >
						
				</form>
			</div>
		</div>
</div>

<!-- footer -->
	<?php include 'cache/index/index/foot_html.php';?>
</body>
</html>