<?php include('header.php');?>
<style>


video{
			width: 500px;
			height: 360px;
			padding-top:10px;
		}
		a{
			text-decoration: none;
			color:#006cff;
		}
</style>
<hr>
<section class="services  py-5">
		<div class="container  py-md-3">
		<div class="w3-head-all  mb-5">
		
				<h3>Video</h3>
			</div>
			 
	  <div class="row inner-sec-w3layouts-agileinfo">
	  
				<div class="alb">
		<?php
		include "Admin/db_conn.php";
		$sql ="SELECT * FROM video";
		  $res = mysqli_query($conn,$sql);
		  if(mysqli_num_rows($res)> 0){

		  while($video = mysqli_fetch_assoc($res)){ ?>
           
          <video src="Admin/videos/<?=$video['video_url']?>"
          	controls>
          	
          </video>

		  <?php
           }
		  }else{
		  	echo "<h1>Empty</h1>";
		  }
		  ?>
</div>
			</div>
		</div>
		</div>
	</section>
	<!--//Projects-->
	<?php include("footer.php");?>