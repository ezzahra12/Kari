<?php
require_once __DIR__ . '/../models/database.php';
class AuthController{

    public function login(){
        if(isset($_POST['login'])){
    $pdo=Database::getConnection();
            $email=$_POST['email'];
            $password=$_POST['password'];
            $stmt=$pdo->prepare("SELECT * from users where email=?  ");
            $stmt->execute([$email]);
            $user=$stmt->fetch();
            if(!$user){
              $_SESSION['loginError']="email incorrect ";
              header("location:  /views/auth/login.view.php");  
               exit;
            }
            if($user && password_verify($password,$user['password'])){
              $_SESSION['user']=[
                'id'=>$user['id'],
                'name'=>$user['name'],
                'role'=>$user['role']
              ];

              if($user['role']=="admin"){
                header("location:  /views/admin/aHome.view.php");
                exit;
        }
                 if($user['role']=="traveler"){
                header("location:  /views/index.view.php");
                exit;
        }
                 if($user['role']=="host"){
                header("location:  /views/host/hDashboard.view.php");   
                exit;
              }
              
            }
           else{
              $_SESSION['loginError']="email incorrect ";

                header("location:  /views/auth/login.view.php");  
                exit; 
              }

        }}
        
     public function register(){
         if(isset($_POST['register'])){

        $pdo=Database::getConnection();
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $fullName=trim( $firstName.' '.$lastName);
        $role=$_POST['role'];
        $email=$_POST['email'];
         $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
          $stmt=$pdo->prepare("SELECT *  FROM users where email=?");
    $stmt->execute([$email]);
    $sameEmail=$stmt->fetch(PDO :: FETCH_ASSOC);

    if($sameEmail){
        $_SESSION['error'] = "Cet email est déjà utilisé";
         header('location: /views/auth/signUp.view.php');
         exit;
    }
     $stmt=$pdo->prepare("INSERT INTO users (email,name,password,role) values (?,?,?,?)");
    $stmt->execute([$email,$fullName,$password,$role]);
        header('location: /views/auth/login.view.php');
        exit;
     }
     }
        public function logOut(){
         if(isset($_POST['logOut'])){
          session_start();
          session_unset();
          session_destroy();
        header('location: /views/auth/login.view.php');

        exit;
  }
     }
     }

 if ($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['login'])){
        $auth=new AuthController();
        $auth->login();
        exit;
    }
    elseif(isset($_POST['register'])){
        $auth=new AuthController();
        $auth->register();
        exit;
    }
    else{
        $auth=new AuthController();
        $auth->logOut();
        exit;
    }
        
   
 }
  
  
    


    











  
