<!DOCTYPE HTML>
<html>
<head>
<title>博客</title>

<link href="public/index/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="public/index/css/style.css" rel='stylesheet' type='text/css' />

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

	<?php include 'cache/index/Index/head_html.php';?>
<!---->
<div class="review">
	 <div class="container">
		 <h2><?=$data[0]['type']?>博客</h2>
		 <div class="review-sec">
		 	<?php foreach($data as $value):?>
			 <div class="review-grids">
				 <div class="col-md-6 revw">
					 <div class="rft-grid">
						 <div class="col-md-5 rft-pic">
							 <a href="index.php?c=blog&m=index&a=detail&bid=<?=$value['bid']?>"><img src="public/index/images/g7.jpg" class="img-responsive" alt=""/></a>
						 </div>
						 <div class="col-md-7 rft-pic-info">
							  <h4><a href="index.php?c=blog&m=index&a=detail&bid=<?=$value['bid']?>"><?=$value['title']?></a></h4>
							 <p class="blog_content">
							 	<?php echo strip_tags($value['content']);?>
							 </p>
						 </div>
						 <div class="clearfix"></div>
					 </div>
				 </div>
			 </div>
			<?php endforeach;?>
			
		 </div>

	 </div> 
	 	<nav>
		  <ul class="pagination pagination-lg" style="position:relative;left:40%;">
			<li><a href="<?=$headPage?>" aria-label="Previous"><span aria-hidden="true">首页</span></a></li>
			<li><a href="<?=$prevPage?>">上一页</a></li>
			<li><a href="<?=$nextPage?>">下一页</a></li>
			<li><a href="<?=$tailPage?>" aria-label="Next"><span aria-hidden="true">尾页</span></a></li>
		  </ul>
		</nav>
</div>
<!-- footer -->

<?php include 'cache/index/index/foot_html.php';?>
<!-- footer -->
</body>
</html>