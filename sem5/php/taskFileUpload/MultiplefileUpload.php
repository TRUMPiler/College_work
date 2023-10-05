<!DOCTYPE html>
<html>
<head>
	<title>Uploading Multiple Files using PHP</title>
</head>
<body>
	<div style="height:50px;"></div>
	<div style="margin:auto; padding:auto; width:80%;">
		<span style="font-size:25px; color:blue"><center><strong>Uploading Multiple Files into MySQL Database using PHP/MySQLi</strong></center></span>
		<hr>		
		<div style="height:20px;"></div>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
		<input type="file" name="upload[]" multiple>
		<input type="submit" value="Upload"> 
		</form>
	</div>
	<div style="margin:auto; padding:auto; width:80%;">
		<h2>Output:</h2>
		<?php
			$conn = mysqli_connect("localhost","root","","db1");
                        if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                        }
			$query=mysqli_query($conn,"select * from photo");
			while($row=mysqli_fetch_array($query)){
				?>
				<img src="<?php echo $row['location']; ?>" height="150px;" width="150px;">
				<?php
			}
 
		?>
	</div>
</body>
</html>