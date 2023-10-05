<!--
considr table: PatientMaster (pid,pname,DISEASE,age,bloodgrp)
Using object oriented concept, insert records of patient information.



SUppose your application is maitain information of employee which have data members like emp name,city,doj,Gender, and method is display().
Department class inherit the properties of employee and it has data member like date of joining and method is display().
Display the information of all employee whose experience is more than 2 years with the help of reference variable of base class.
-->
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="POST"> 
            <label>pid</label>
            <input type="number" name="pid">
            <br>
            <label>name</label>
            <input type="text" name="name">
            <br>
            <label>Disease</label>
            <input type="text" name="Disease">
            <br>
            <label>age</label>
            <input type="number" name="age">
            <br>
            <label>bloodgrp</label>
            <input type="text" name="bloodgrp">
            <br>
            <input type="submit" name="submit" value="submit">
            <?php
            class patientGG12
                {
                
                    public function GHG(){
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $databasename = "task";
                        $conn = new mysqli($servername,$username, $password, $databasename);
                        $query="insert into PatientMaster values(".$_POST["pid"].",'".$_POST["name"]."','".$_POST["Disease"]."',".$_POST["age"].",'".$_POST["bloodgrp"]."')";
                        mysqli_query($conn, $query);
                         
                    }
                }
                
        ?>
            </form>
    </body>
</html>
  
<!--//  $servername = "localhost";
//  $username = "root";
//  $password = "";
//  $databasename = "geeksforgeeks";
//  
//  // CREATE CONNECTION
//  $conn = new mysqli($servername,
//    $username, $password, $databasename);
//  
//  // GET CONNECTION ERRORS
//  if ($conn->connect_error) {
//      die("Connection failed: " . $conn->connect_error);
//  }
//  
//  // SQL QUERY
//  $query = "SELECT * FROM `Student Details`;";
//  
//  // FETCHING DATA FROM DATABASE
//  $result = $conn->query($query);
//  
//    if ($result->num_rows > 0) 
//    {
//        // OUTPUT DATA OF EACH ROW
//        while($row = $result->fetch_assoc())
//        {
//            echo "Roll No: " .
//                $row["Roll_No"]. " - Name: " .
//                $row["Name"]. " | City: " . 
//                $row["City"]. " | Age: " . 
//                $row["Age"]. "<br>";
//        }
//    } 
//    else {
//        echo "0 results";
    -->
    