<?php
require __DIR__ . '/../../Models/database.php';
require __DIR__ . '/../../Models/Host.php';
session_start();

if (!isset($_SESSION['user']) || !($_SESSION['user'] instanceof Host)) {
    die('Unauthorized');
}

if (!isset($_GET['id'])) {
    die('Rental not found');
}

$pdo = Database::getConnection();
$stmt = $pdo->prepare("SELECT * FROM rentals WHERE id = ? AND id_host = ?");
$stmt->execute([$_GET['id'], $_SESSION['user']->getId()]);
$rental = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$rental) {
    die('Rental not found');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Controllers/RentalController.php" method="POST">
    <input type="hidden" name="id" value="<?= $rental['id'] ?>">
    <input type="hidden" name="updateRental" value="1">

    <input type="text" name="title" value="<?= $rental['title'] ?>" required>
    <input type="text" name="city" value="<?= $rental['city'] ?>" required>
    <input type="number" name="price" value="<?= $rental['pricePerNight'] ?>" required>

    <button type="submit">Enregistrer</button>
</form>

</body>
</html>