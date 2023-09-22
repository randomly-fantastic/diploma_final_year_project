<?php include("header.php");?>
<?php
	
	include 'Admin/db_conn.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comments (name, message)
		VALUES('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head></head>
<style>
.temp {
	background: #fff;
	min-height: 50vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Roboto', sans-serif;
}
.wrapper {
	background: white;
    border-radius: 10px;
    width: 500px;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.wrapper .form input {
	background: #222222;
	color: white;
	font-size: 15px;
	width: 450px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	margin-bottom: 10px;
	margin-top: 20px;
}

.wrapper .form textarea {
	background: #222222;
	color: white;
	font-size: 15px;
	width: 450px;
	border-radius: 20px;
	padding: 10px;
	border: none;
	outline: none;
	resize: none;
}

.wrapper .form .btn {
	background: #222222;
	color: white;
	font-size: 15px;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 10px;
	width: 200px;
	border-radius: 20px;
	margin: 0 auto;
	display: block;
	margin-top: 5px;
	margin-bottom: 20px;
	opacity: 0.8;
	transition: 0.3s all ease;
}

.wrapper .form .btn:hover {
	opacity: 1;
}


</style>
<body>
<hr>
<div class="temp">
	<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="<?=_name?>">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="<?=_Message?>"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment"><?=_PostComment?></button>
		</form>
	</div>

	
	</div>
<?php include("footer.php");?>
</body>
</html>