<?php
session_start();
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
        <link type="stylesheet" href="style.css">
        
    </head>
    <body>
        <?php
        if(isset($_POST["submit"]))
        {
        $_SESSION["name1"]=$_POST["name1"];
        $_SESSION["enroll"]=$_POST["enroll"];
        $_SESSION["email"]=$_POST["email"];
        $_SESSION["password"]=$_POST["password"];
        $_SESSION["date"]=$_POST["date"];
        $_SESSION["semester"]=$_POST["semester"];
        $_SESSION["contactno"]=$_POST["contactno"];
        $_SESSION["GENDER"]=$_POST["GENDER"];
        $_SESSION["address"]=$_POST["address"];
//       echo $enroll."<br>".$name1."<br>".$email."<br>".$sem."<br>".$contact."<br>".$password."<br>".$address."<br>".$gender."<br>";
       if(!empty($_SESSION["enroll"]))
       {
           echo "enrollmentno:".$_SESSION["enroll"]."<br>";
       }
       if(!empty($_SESSION["name1"]))
       {
           echo "name:".$_SESSION["name1"]."<br>";
       }
       if(!empty($_SESSION["email"]))
       {
           echo "email:".$_SESSION["email"]."<br>";
       }
       if(!empty($_SESSION["password"]))
       {
           echo "password:". $_SESSION["password"]."<br>";
       }
       if(!empty($_SESSION["contact"]))
       {
           echo "contact:".$_SESSION["contact"]."<br>";
       }
       if(!empty($_SESSION["sem"]))
       {
           echo "semster:".$_SESSION["sem"]."<br>";
       }
//       if(!empty($address))
//       {
//           echo "address:".$address."<br>";
//       }
//       if(!empty($gender))
//       {
//           echo "gender:".$gender."<br>";
//       }
//       if(!empty($date))
//       {
//           echo "date".$date."<br>";
//       }
      }
      echo $enroll."<br>".$name1."<br>".$email."<br>".$sem."<br>".$contact."<br>".$password."<br>".$address."<br>".$gender."<br>";
             
        ?>
    </body>
</html>
