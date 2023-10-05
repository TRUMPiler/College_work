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
        $fp = fopen('C:\\Users\\HP\\Desktop\\data1.txt', 'w');//open file in write mode  
        fwrite($fp, 'hello ');  
        fwrite($fp, 'php file');  
        fclose($fp);  

        echo "File written successfully"; 
        unlink('C:\\Users\\HP\\Desktop\\data3.txt');    
        echo "File deleted successfully";  
        ?>
    </body>
</html>
