<?php



class Traveler extends User{
    
      private string $role="traveler";
     
   


public function __construct($id,$name, $email, $password, $isActive,$role){
    parent::__construct($id,$name, $email, $password, $isActive);
    $this->role=$role;
    return $this->role;
}
    public function addReview():bool{
        return true;
    }
    
    public function bookRental():bool{
        return true;
    }

    public function cancelReservation():bool{
        return true;
    }

    public function addToFavorites():bool{
        return true;
    }

    public function removeFromFavorites():bool{
        return true;
    }
   
}
