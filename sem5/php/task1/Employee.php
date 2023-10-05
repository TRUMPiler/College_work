<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="POST"> 
            <label>emp name</label>
            <input type="text" name="name">
            <br>
            <label>city</label>
            <input type="text" name="city">
            <br>
            <label>doj</label>
            <input type="date" name="date">
            <br>
            <label>Gender</label>
            <input type="radio" name="age" value="Male">Male
            <input type="radio" name="age" value="feMale">feMale
            <br>
            <input type="submit" name="submit" value="submit">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $databasename = "task";
            mysqli_connect($servername,$username,$password,$databasename);
            class patientGG
                {
                
                    public function HH(){
                             echo "echo";
                         }
                }
            if(!mysqli_connect_errno())
            {
                echo "done";
            }
            if(isset($_POST["submit"]))
            {
                
                $a= patientGG();
                
                
            }
            ?>
    </body>
</html>
