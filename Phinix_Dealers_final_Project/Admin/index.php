<?php session_start(); ?>
<?php include('db_conn.php'); ?>
<html>
<head>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="images/icon.png" rel="icon">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css1/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css1/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css1/lines.css" rel='stylesheet' type='text/css' />
<link href="css1/font-awesome.css" rel="stylesheet"> 
<!-- Nav CSS--> 
<link href="css1/custom.css" rel="stylesheet">
<!-- jQuery -->

	</head>
</head>
<body>
<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/Puja_Website-Final-Backup/Phinix_Dealers_final_Project/web/index.php">Phinix Dealers</a>
            </div>
            <!-- /.navbar-header -->
            
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Login</a>
                        </li>
                        
                        
                       </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<div class="login">
<div class="form-wrapper">
  
  <form action="" method="post">
    <h3>Login here</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($conn, $_POST['user']);
			$password = mysqli_real_escape_string($conn, $_POST['pass']);
			
			$query 		= mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:image.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
  
  
</div>
</div>
</body>
</html>