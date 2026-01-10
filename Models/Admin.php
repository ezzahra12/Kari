<?php

class Admin extends User{
    
    private string $role="admin";
   


public function __construct($id,$name, $email, $password, $isActive,$role){
    parent::__construct($id,$name, $email, $password, $isActive);
    $this->role=$role;
    return $this->role;
}



    public function activateUser():bool{
        return true;
    }
    
    public function desactivateUser():bool{
        return true;
    }

    public function activateRental():bool{
        return true;
    }

    public function desactivateRental():bool{
        return true;
    }

    public function deleteReview():bool{
        return true;
    }

    public function getStatistics():bool{
        return true;
    }
   
}

