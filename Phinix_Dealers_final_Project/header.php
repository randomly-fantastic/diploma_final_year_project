<?php
session_start();

// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

// Include Language file
if(isset($_SESSION['lang'])){
 include "lang_".$_SESSION['lang'].".php";
}else{
 include "lang_en.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Phinix Dealers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script>
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 </script>
 
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
<header>
	<div class="header">
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default navbar-fixed-top">
             
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="w3_navigation_pos">
	<a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt=""></a>
	</div>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <a class="nav-link" href="index.php"><?=_HOME?>  <span class="sr-only">(current)</span></a>
      
	  </li>
       <li class="nav-item">
       <a class="nav-link" href="about.php"><?=_ABOUT?> </a>
      
	  </li>
	  <li class="nav-item">
       <a class="nav-link" href="gallery.php"><?=_GALLERY?> </a>
      
	  </li>
	  <li class="nav-item">
       <a class="nav-link" href="video.php"><?=_VIDEO?> </a>
      
	  </li>
      <li class="nav-item">
	  <a class="nav-link" href="product.php"><?=_PRODUCT ?> </a>
	   </li>
	   
	  <li class="nav-item">
       <a class="nav-link" href="contactus.php"><?=_CONTACT ?> </a>
      
	  </li>
	   <li class="nav-item">
       <a class="nav-link" href="http://localhost/puja/Phinix_Dealers_final_Project/web/Admin/"><?=_Login?> </a>
      
	  </li>
    </ul>
    <div class="navbar-text">
     <form method='get' action='' id='form_lang' >
    <select name='lang' onchange='changeLang();' >
   <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
   <option value='mr' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'mr'){ echo "selected"; } ?> >मराठी</option>
  </select>
 </form>		
            
			        
    </div>
  </div>
</nav>
		</div>
</header>
<div class="name">
<center><strong><h1><?= _Service?></h1><strong></center>
</div>
<div class="mail">
<strong>phinixsalesservice@gmail.com</strong>
</div>

</body>
</html>

