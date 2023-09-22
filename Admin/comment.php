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
	<style>
.content {
	text-align: center;
	background: royalblue;
	color: black;
	padding: 10px;
	width: 500px;
	border-radius: 10px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	margin-top:100px;
	font-family: "Josefin Sans",sans-serif;
}

.content p {
	margin-bottom: 15px;
	width: 450px;
	text-align: center;
	color:#fff;
	font-family: "Josefin Sans",sans-serif;
}
.container {
    padding-right: 20%;
    padding-left: 20%;
    margin-right: auto;
    margin-left: auto;
	text-align:center;
}
.container h1 {
    margin-top:20px;
	text-align:center;
	
}
</style>
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
                            <a href="image.php"><i class="fa fa-picture-o" aria-hidden="true"></i> Images</a>
                        </li>
                        <li>
                            <a href="video.php"><i class="fa fa-video-camera"></i> Video</a>
                        </li>
                         <li>
                            <a href="comment.php"><i class="fa fa-comment"></i> Comments</a>
                        </li>
                       </ul>
                </div>
                
            </div>
            
        </nav>
		
		<div class="container">
		<h1><i class="fa fa-comment"></i> Comments</h1>
		<div class="content">
		<?php
           include 'db_conn.php';
			$sql = "SELECT * FROM comments";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
	</div>