<?php
require_once __DIR__ . '/User.php';
class Host extends User {
    public string $role = "host";

    public function __construct(int $id, string $name, string $email, string $password, bool $isActive) {
        parent::__construct($id, $name, $email, $password, $isActive);
    }

    public function createRental(Rental $rental) {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare(
            "INSERT INTO rentals 
            (title, city, pricePerNight, isActive, isAvailable, id_host, description, guests, bedrooms, available_from, available_to, cover_image) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->execute([
            $rental->getTitle(),
            $rental->getCity(),
            $rental->getPricePerNight(),
            $rental->getIsActive(),
            $rental->getIsAvailable(),
            $this->getId(),  
            $rental->getDescription(),
            $rental->getGuests(),
            $rental->getBedrooms(),
            $rental->getAvailableFrom(),
            $rental->getAvailableTo(),
            $rental->getImage()
        ]);
        
    }

    public function deleteRental($rentalId) {
    $pdo = Database::getConnection();

    $stmt = $pdo->prepare(
        "DELETE FROM rentals 
         WHERE id = ? AND id_host = ?"
    );

    $stmt->execute([$rentalId, $this->getId()]);
}

 public function updateRental($rentalId, $title, $city, $price){
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("UPDATE rentals SET title = ?, city = ?, pricePerNight = ? WHERE id = ? AND id_host = ?");
        return $stmt->execute([$title, $city, $price, $rentalId, $this->id]);
    }
  public function getRentals(){
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM rentals WHERE id_host = ?");
        $stmt->execute([$this->id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_name () {
        return $this->name;
    }
}
