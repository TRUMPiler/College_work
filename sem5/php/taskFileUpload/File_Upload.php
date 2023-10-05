<html>
<body>
<form action="#" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" size="20" /><br />
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
if (file_exists("images/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]);
echo "Stored in: " . "images/" . $_FILES["file"]["name"];
}
}
?>