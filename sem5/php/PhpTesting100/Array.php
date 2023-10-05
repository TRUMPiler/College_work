<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <?php
            $friends=array("Naishal","pranav","Manan");
            
            $a=array("hockey","Cricket","Volleyball");
           /* foreach($a as $val)
            {
                echo "hi i am $val <br>";
            }*/
            /*for($i=0;$i<count($friends);$i++)
            {
                echo "$friends[$i] has a hobby of playing $a[$i]<br>";
            }
             
             */
            /*$students=array("Nupur"=>"Kadodra","Manan"=>"parvat patiya","Pranav"=>"hostel");
            foreach($students as $stud=>$place)
            {
                echo "$stud comes from $place<br>";
            }
             * 
             */
            
            
            
//  $cars=array(
//    array("volvo",43,56),
//    array("bmw",54,678)
//  );
//  $mySubSize=sizeof($cars);
//  for ($i=0;$i<$mySubSize;$i++) {
//    foreach ($cars[$i] as $value) {
//      echo "$value <br>";
//    }
//  }
//  
            
    $fname=array("Naishal","Manan","Nupur");
    $lname=array("Doshi","Narang","Sachan");
    $c= array_combine($fname, $lname);
    foreach($c as $first=>$last)
    {
        echo "$first $last<br>";
    }
//    print_r(array_keys($c));
        print_r(array_merge($lname, $fname));
        echo "<br>";
        print_r(array_change_key_case($c,CASE_LOWER));
        echo "<br>";
        print_r(current($c));
        ?>
    </body>
</html>
