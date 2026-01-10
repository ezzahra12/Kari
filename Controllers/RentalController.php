<?php
require __DIR__ . '/../models/database.php';
require __DIR__ . '/../models/User.php';
require __DIR__ . '/../models/Host.php';
require __DIR__ . '/../models/Rental.php';

session_start();

if (!isset($_SESSION['user']) || !($_SESSION['user'] instanceof Host)) {
    die('Unauthorized access');
}

class RentalController{

  public function createRental() {
    $title = $_POST['title'];
    $city = $_POST['city'];
    $pricePerNight = $_POST['price'];
    $description = $_POST['description'];
    $guests = $_POST['guests'];
    $bedrooms = $_POST['bedrooms'];
    $available_from = new DateTime($_POST['available_from']);
    $available_to = new DateTime($_POST['available_to']);

    $fileTmpPath = $_FILES['rentalIMG']['tmp_name'];
    $fileName = $_FILES['rentalIMG']['name'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $newFileName = time() . '_' . uniqid() . '.' . $fileExtension;
    $uploadPath = __DIR__ . '/../public/uploads/' . $newFileName;

    if (!move_uploaded_file($fileTmpPath, $uploadPath)) {
        die("Error uploading the image.");
    }
      
    $rental = new Rental(
      $title,
      $city,
      $pricePerNight,
      true,
      true,
      $description,
      $guests,
      $bedrooms,
      $available_from->format('Y-m-d'),
      $available_to->format('Y-m-d'),
      $newFileName
    );

      $host = $_SESSION['user'];
      $host->createRental($rental);
      header("location:  /views/host/hDashboard.view.php");
      echo "Rental created successfully!";
  }

    public function deleteRental() {
      if (!isset($_POST['id'])) {
          die('Invalid request');
      }

      $rentalId = (int) $_POST['id'];
      $host = $_SESSION['user'];


      $host->deleteRental($rentalId);

      header("Location: /views/host/Rentals.view.php");
      exit;
    }

    public function updateRental(){  
      $rentalId = $_POST['id'];
      $title    = $_POST['title'];
      $city     = $_POST['city'];
      $price    = $_POST['price'];

      $pdo = Database::getConnection();
      $host = $_SESSION['user'];
      $host->updateRental($rentalId, $title, $city, $price);

      header("Location: /Views/host/Rentals.view.php");
      exit;
    }

    public function show() {
      if (!isset($_GET['id'])) {
          die("Rental ID missing");
      }

      
      $id = (int) $_GET['id'];
      $rental = Rental::getRental($id);
      
      if (!$rental) {
          header("Location: /Views/rentalsListing.view.php");
          exit;
      }

      return $rental;
    }
}




if ($_SERVER['REQUEST_METHOD'] === "POST") {

  $Rent = new RentalController();

  if (isset($_POST['createRental'])) {
    $Rent->createRental();

  }
  if (isset($_POST['deleteRental'])) {
    $Rent->deleteRental();

  }
    if (isset($_POST['updateRental'])) {
    $Rent->updateRental();

  }
  
  

}