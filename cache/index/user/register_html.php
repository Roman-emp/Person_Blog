<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="public/index/css/login_style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<!--//webfonts-->
</head>
<body>
	<div class="main">
		<div class="header" >
			<h1>登录或创建一个免费帐户！<a href="index.php">返回首页</a></h1>
		</div>
		<p></p>
			<form action="index.php?c=user&m=index&a=Doregister" method="post">
				<ul class="left-form">
					<h2>新账户:</h2>
					<li>
						<input type="text" name="username"   placeholder="用户名" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text" name="email"   placeholder="Email" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password" name="password"   placeholder="密码" required/>
						<a href="#" class="icon into"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password" name="repassword"   placeholder="重复密码" required/>
						<a href="#" class="icon into"> </a>
						<div class="clear"> </div>
					</li> 
					<li style="max-width:100px;">
						<input type="text" name="code"   placeholder="验证码" required/>
						
						<div class="clear"> </div>
					</li>
					<img src="index.php?c=user&a=yzm" alt="验证码" name="code" style="position:relative;left:30%;top:-60px;" id="yzm" onclick="show();">
						
					<input type="submit" onClick="myFunction()" value="创建账户">
						<div class="clear"> </div>
				</ul>
				
				<div class="clear"> </div>
					
			</form>
			
		</div>
			
		<script>
			function show()
			{
				var obj = document.getElementById('yzm');
				obj.src = "index.php?c=user&a=yzm&"+Math.random();
			}
		</script>
	
</body>
</html>