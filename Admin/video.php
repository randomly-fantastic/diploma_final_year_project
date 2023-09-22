<html>
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

	<body>
	
		
		<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/puja/Phinix_Dealers_final_Project/web/">Phinix Dealers</a>
            </div>
            <!-- /.navbar-header -->
            
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Login</a>
                        </li>
                        <li>
                            <a href="image.php"><i class="fa fa-picture-o"></i> Images</a>
                        </li>
                        <li>
                            <a href="video.php"><i class="fa fa-video-camera"></i> Video</a>
                        </li>
                        <li>
                            <a href="comment.php"><i class="fa fa-comment"></i> Comments</a>
                        </li>
                       </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
		<div class="container">
		        <center> <h1><i class="fa fa-video-camera"></i> Video Uploaded</h1></center>
			<div class="panel panel-primary admin-login">
			
				<div class="panel-heading">
					<h3>Video Upload</h3>
				</div>
				<div class="panel-body">
				
					<?php if(isset($_GET['error'])) {?>
				    <p><?=$_GET['error']?></p>
					<?php } ?>
                     <form action="video_upload.php" method="post" enctype="multipart/form-data">
	               <input type="file" name="my_video">
	             <input type="submit" name="submit" value="Upload">
               </form>
				</div>
			</div>
		</div>
		
	</body>
</html>