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
        <?php
//            class CG{
//                public $a;
//                public function display($B) {
//                $this->a=$B;
//               echo $this->a;
//                }        
//               
//            }
//            $test=new CG();
//            $test->display("GGS");
        
//        class Student
//        {
//            public $eno,$name,$div,$sem;
//            public function __construct($eno,$name,$div,$sem) 
//            {
//               echo $this->eno=$eno."<br>";
//               echo $this->name=$name."<br>";
//               echo $this->sem=$sem."<br>";
//               echo $this->div=$div."<br>";
//            }
//            public function __destruct()
//            {
//                echo "destructor was called";
//            }
//        }
//        
//        $a=new Student(1,"naishal","A",5);
//
            //nheritance
        class Person
        { 
            public $name,$age,$gender;
         
        }
        class Employees extends Person
        {   
            
            public $designation,$salary;
            public function __construct($name,$age,$gender,$designation,$salary)
            {
                 $this->name=$name;
                $this->age=$age;
               $this->gender=$gender;
                 
                   $this->designation=$designation;
                  $this->salary=$salary;
                 
            }
            public function display()
            {
                echo "{$this->name}<br>";
                
                echo "{$this->age}<br>";
                echo "{$this->gender}<br>";
                echo "{$this->designation}<br>";
                echo "{$this->salary}<br>";
            }
            
        }
        $a=new Employees("naishal",20,"male","Manager",20000);
        $a->display();
  ?>
    </body>
</html>
