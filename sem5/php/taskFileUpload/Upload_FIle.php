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
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="uploaded_file" />
            <input type="submit" name ='submit' value="Submit Form" />
        </form>
        <?php
        if(isset($_POST['submit'])){         
            //$connect = mysqli_connect("localhost","root","","db1") or die("Couldn't connect!");
            if (isset($_FILES['uploaded_file']))
            {
                move_uploaded_file(
                    $_FILES['uploaded_file']['tmp_name'],
                    "Uploads/".$_FILES['uploaded_file']['name']
                );
                echo "file uploades";
                //$insert = $connect->query("INSERT into images (file_name, uploaded_on) VALUES ('".$_FILES['uploaded_file']['name']."', NOW())");
//                $insert = $connect->query("INSERT into images (id,file_name) VALUES (1,'".$_FILES['uploaded_file']['name']."')");
//                if($insert){
//                            echo "The file has been uploaded successfully.";
//                }else{
//                    echo "File upload failed, please try again.";
//                } 
            } 
            else {
                echo "File not uploaded";
            }
          
        }
        
        ?>
    </body>
</html>
