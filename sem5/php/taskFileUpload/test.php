<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        print_r($_FILES['myfile']);
//        echo $_FILES['myfile']['name']."<br>";
//         echo $_FILES['myfile']['type']."<br>";
//          echo $_FILES['myfile']['tmp_name']."<br>";
//           echo $_FILES['myfile']['error']."<br>";
//            echo $_FILES['myfile']['size']."<br>";
        move_uploaded_file($_FILES['myfile']['tmp_name'], "images/".$_FILES['myfile']['name']);
        ?>
    </body>
</html>
