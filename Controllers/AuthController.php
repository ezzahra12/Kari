<?php
require_once __DIR__ . '/../models/database.php';
class AuthController{
     
    public function login(){

        if($_SERVER['REQUEST_METHOD']=="POST"){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $stmt=$pdo->prepare("SELECT * from users where email=?  ");
            $stmt->execute([$email]);
            $user=$stmt->fetch();
            if($user && password_verify($password,$user['password'])){
              if($user['role']=="admin"){
                header("location:  /views/admin/aHome.view.php");
        }
                 if($user['role']=="traveler"){
                header("location:  /views/index.view.php");
        }
                 if($user['role']=="host"){
                header("location:  /views/host/hDashboard.view.php");   
              }
              else{
                header("location:  /views/auth/login.view.php");   
              }
            }
           
        }
        }

         

        


    











    }
}