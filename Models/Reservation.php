<?php

class Reservation{
    private DateTime $startDate;
    private DateTime $endDate;
    private float $totalPrice;

  public function __construct($startDate,$endDate,$totalPrice) {
     $this->startDate=$startDate;
     $this->endDate=$endDate;
     $this->totalPrice=$totalPrice;
}
    public function getAll():array{
        return[];
    }

    




}







