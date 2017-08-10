<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/admin/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="public/admin/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="public/admin/css/style.css" />
    <script type="text/javascript" src="public/admin/js/jquery2.js"></script>
    <script type="text/javascript" src="public/admin/js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="public/admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="public/admin/js/ckform.js"></script>
    <script type="text/javascript" src="public/admin/js/common.js"></script>

    <style type="text/css">
        body {font-size: 20px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index.php?c=user&m=admin&a=changeInfo" method="post">
     

<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>管理员账号</th>
        <th>Email</th> 
        <th>创建时间</th>
		<th>修改账户</th>

     </tr>
    </thead>
    <?php foreach($data as $value):?>
        <tr>
                <td><?=$value['username']?></td>
                <td><?=$value['email']?></td>         
                <td><?php echo date('Y/m/d',$value['create_time']);?></td>
				<td><button type="submit">修改</button></td>      
        </tr> 
    <?php endforeach;?>    
       </table>
</form>
</body>
</html>