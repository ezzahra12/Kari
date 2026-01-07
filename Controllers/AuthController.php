<?php
session_start();
require_once __DIR__ . '/../models/database.php';
require_once __DIR__ . '/../models/Host.php';
require_once __DIR__ . '/../models/Admin.php';
require_once __DIR__ . '/../models/Traveler.php';
class AuthController
{

  public function login()
  {
    if (isset($_POST['login'])) {
      $pdo = Database::getConnection();
      $email = $_POST['email'];
      $password = $_POST['password'];
      $stmt = $pdo->prepare("SELECT * from users where email=?  ");
      $stmt->execute([$email]);
      $user = $stmt->fetch();
      if (!$user) {
        $_SESSION['loginError'] = "email incorrect ";
        header("location:  /views/auth/login.view.php");
        exit;
      }
      if ($user && password_verify($password, $user['password'])) {


        if ($user['role'] == "admin") {

          $_SESSION['user'] = new Admin($user['id'],$user['name'], $user['email'], $user['password'], $user['role'], $user['isActive']);
          header("location:  /views/admin/aHome.view.php");
          exit;
        }
        if ($user['role'] == "traveler") {
          $_SESSION['user'] = new Traveler($user['id'],$user['name'], $user['email'], $user['password'], $user['role'], $user['isActive']);

          header("location:  /views/index.view.php");
          exit;
        }
        if ($user['role'] == "host") {
          if(empty($user['id'])) {
    die("User ID not set!");
}else{
$_SESSION['user'] = new Host(
    (int)$user['id'],
    $user['name'],
    $user['email'],
    $user['password'],
    (bool)$user['isActive']
);

}
         


          header("location:  /views/host/hDashboard.view.php");
          exit;
        }
      } else {
        $_SESSION['loginError'] = "email incorrect ";

        header("location:  /views/auth/login.view.php");
        exit;
      }
    }
  }

  public function register()
  {
    if (isset($_POST['register'])) {

      $pdo = Database::getConnection();
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $fullName = trim($firstName . ' ' . $lastName);
      $role = $_POST['role'];
      $email = $_POST['email'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $stmt = $pdo->prepare("SELECT *  FROM users where email=?");
      $stmt->execute([$email]);
      $sameEmail = $stmt->fetch(PDO::FETCH_ASSOC);
      if (empty($email) || empty($_POST['password']) || empty($role)) {
        $_SESSION['error'] = "Tous les champs sont obligatoires";
        header('location: /views/auth/signUp.view.php');
        exit;
      }
      if ($sameEmail) {
        $_SESSION['error'] = "Cet email est déjà utilisé";
        header('location: /views/auth/signUp.view.php');
        exit;
      }
      $stmt = $pdo->prepare("INSERT INTO users (email,name,password,role) values (?,?,?,?)");
      $stmt->execute([$email, $fullName, $password, $role]);
      header('location: /views/auth/login.view.php');
      exit;
    }
  }
  public function logOut()
  {
    if (isset($_POST['logOut'])) {
      session_start();
      session_unset();
      session_destroy();
      header('location: /views/auth/login.view.php');

      exit;
    }
  }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

  $auth = new AuthController();

  if (isset($_POST['login'])) {
    $auth->login();
  }

  if (isset($_POST['register'])) {
    $auth->register();
  }

  if (isset($_POST['logOut'])) {
    $auth->logOut();
  }
}
