<?php
include "C:/xampp9/htdocs/projetWeb/config.php";
session_start();
$db = config::getConnexion();

if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['role']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    if (isset($_POST['email']) && isset($_POST['password'])){
        $sql="SELECT * from compte where email='$email' and password='$password'";
        try{
            $query=$db->prepare($sql);
            $query->execute(); 
            $result=$query->fetch();
            $_SESSION['email']=$result['email'];
            $_SESSION['password']=$result['password'];
            $_SESSION['full_name']=$result['full_name'];
            $_SESSION['IDuser']=$result['IDuser'];
            $_SESSION['role']=$result['role'];
            header('Location:blog.php');
            
        }
        catch(Exception $e){

        }
    }

 }

?>