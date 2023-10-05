
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
    if($_COOKIE["name"]=="")
    {
        echo "cookie is not found";
    }
    else
    {
        header("location:session.php");
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="post">
            <label> name</label>
                <input type="text" name="name">
                <br>
                <label>age</label>
                <input type="text" name="age">
                <br>
                <input type="submit" name="submit">
            <?php
                if(isset($_POST["submit"]))
                {
                    setcookie("name", $_POST["name"], time()*60);
                }
        ?>    
        </form>
        
    </body>
</html>
