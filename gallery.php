<?php include('Admin/db_conn.php');?>
<?php include('header.php');?>
<style>


.alb{
	width:200px;
	height:200px;
	padding:10px 15px;
	display:flex;
	justify-content:center;
	align-items:center;
	
}
.alb img{
	width:100%;
	height:100%;
	
}
a{
	text-decoration:none;
	color:black;
}
</style>
<hr>
<section class="services  py-5">
		<div class="container  py-md-3">
		<div class="w3-head-all  mb-5">
		
				<h3>Gallery</h3>
			</div>
			 
	  <div class="row inner-sec-w3layouts-agileinfo">
	  
				<?php 
                 $sql = "SELECT * FROM image";
                  $res = mysqli_query($conn,$sql);
                 
                  if(mysqli_num_rows($res)> 0){
	             while($images = mysqli_fetch_assoc($res)){  ?>
			     <div class="alb">
                 <img src="Admin/uploads/<?=$images['image_url']?>">
	            </div>
	        
	          <?php  } }?>
			</div>
		</div>
		</div>
	</section>
	<!--//Projects-->
	<?php include("footer.php");?>