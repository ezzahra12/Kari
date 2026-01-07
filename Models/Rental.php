<?php


class Rental {
    protected $title;
    protected $city;
    protected $pricePerNight;
    public $isActive;
    public $isAvailable;
    protected $description;   
    protected $guests;          
    protected $bedrooms;      
    protected $available_from; 
    protected $available_to; 
    protected $image_cover;  

    public function __construct(
        $title,
        $city,
        $pricePerNight,
        $isActive,
        $isAvailable,
        $description,
        $guests,
        $bedrooms,
        $available_From,
        $available_To,
   $image_cover 

    ) {
        $this->title = $title;
        $this->city = $city;
        $this->pricePerNight = $pricePerNight;
        $this->isActive = $isActive;
        $this->isAvailable = $isAvailable;
        $this->description = $description;
        $this->guests = $guests;
        $this->bedrooms = $bedrooms;
        $this->available_from = $available_From;
        $this->available_to = $available_To;
        $this->image_cover=$image_cover  ;
    }
     public function getTitle(): string {
        return $this->title;
    }

    public function getCity(): string {
        return $this->city;
    }

    public function getPricePerNight(): float {
        return $this->pricePerNight;
    }

    public function getIsActive(): bool {
        return $this->isActive;
    }

    public function getIsAvailable(): bool {
        return $this->isAvailable;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getGuests(): int {
        return $this->guests;
    }

    public function getBedrooms(): int {
        return $this->bedrooms;
    }

    public function getAvailableFrom(): string {
        return $this->available_from;
    }

    public function getAvailableTo(): string {
        return $this->available_to;
    }

    public function getImage(): string {
        return $this->image_cover;
    }

   
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setCity(string $city): void {
        $this->city = $city;
    }

    public function setPricePerNight(float $price): void {
        $this->pricePerNight = $price;
    }

    public function setIsActive(bool $isActive): void {
        $this->isActive = $isActive;
    }

    public function setIsAvailable(bool $isAvailable): void {
        $this->isAvailable = $isAvailable;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setGuests(int $guests): void {
        $this->guests = $guests;
    }

    public function setBedrooms(int $bedrooms): void {
        $this->bedrooms = $bedrooms;
    }

    public function setAvailableFrom(string $date): void {
        $this->available_from = $date;
    }

    public function setAvailableTo(string $date): void {
        $this->available_to = $date;
    }

    public function setImage(string $image): void {
        $this->image_cover = $image;
    }



   public function getAll(){
     $pdo=Database::getConnection();
     $stmt=$pdo->query("SELECT * from rentals ");
     $rentals=$stmt->fetch(PDO :: FETCH_ASSOC);
     return $rentals;
   }
   public function getRental($id){
     $pdo=Database::getConnection();
     $stmt=$pdo->prepare("SELECT * from rentals where id=? ");
     $rentals=$stmt->fetch(PDO :: FETCH_ASSOC);
     return $rentals;
   }
    public function deleteRental():bool{
        return true;
    }
     public function filterRentals():array{
        return [];
    } 
    public function getAverageRating():float{
        return true;
    }
}