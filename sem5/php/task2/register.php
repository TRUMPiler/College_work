<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="insertion.php" method="post">
        <label>Name:</label>
        <input type="text" name="name"><br>
        <label>Date Of Birth</label>
        <input type="date" name="dob"><br>
        <label>Blood GROUP:</label>
        <input type="text" name="bloodgrp"><br>
        
        <label>martial status:</label>
        <?php
        $connect=mysqli_connect("localhost","root","root","task");
        $query="SELECT status FROM maratial_status GROUP BY status";
        $result=mysqli_query($connect,$query); 
        if(mysqli_num_rows($result)>0){
            echo '<select name="status">';
            echo '<option value="">--Select Country--</option>';
            $num_results = mysqli_num_rows($result);
            for ($i = 0; $i < $num_results; $i++) {
                $row = mysqli_fetch_array($result);
                $name = $row["status"];
                echo '<option>' . $name . '</option>';
                //echo '<option value="' . $name . '">' . $name . '</option>';
            }
            echo '</select>';
        }
        ?>
    </form>
</body>
</html>