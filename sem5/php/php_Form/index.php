<?php
session_start();
if(isset($_SESSION["name1"]))
{
    header("location:sent%20names.php");
}
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
        <title>Home</title>
        
    </head>
    
    <body>
        <form method="POST" action="sent%20names.php">
        <table>
            <tr>
                <td>
                    <label>enrollment no</label>
                </td>
                <td>
                    <input type="number" name="enroll" placeholder="Enter enroll">
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>name</label>
                </td>
                <td>
                    <input type="text" name="name1" placeholder="Enter Name">
                </td>
            </tr>
            <tr>
                <td>
                    <label>password:</label>
                </td>
                <td>
                    <input type="password" name="password" placeholder="enter password">
                </td>
            </tr>
            <tr>
                <td>
                    <label>date</label>
                </td>
                <td>
                    <input type="date" name="date" placeholder="Enter date">
                </td>
            </tr>
            <tr>
                <td>
                    <label>email</label>
                </td>
                <td>
                    <input type="email" name="email" placeholder="Enter email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>semester</label>
                </td>
                <td>
                    <input type="number" name="semester" placeholder="Enter semester">
                </td>
            </tr>
            <tr>
                <td>
                    <label>contactno</label>
                </td>
                <td>
                    <input type="number" name="contactno" placeholder="Enter contactno">
                </td>
            </tr>
            <tr>
                <td>
                    <label>gender</label>
                </td>
                <td>
                    <input type="radio" name="GENDER" value="MALE" checked>MALE
                    <input type="radio" name="GENDER" value="female">female
                </td>
            </tr>
            <tr>
                <td>
                    <label>address</label>
                </td>
                <td>
                    <textarea rows="10" cols="15" name="address"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="submit" value="submit" name="submit">
                </td>
            </tr>
            
        </table>
        </form>
        
    </body>
</html>
