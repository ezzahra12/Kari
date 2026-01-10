<?php

class Review{
    private int $rating;
    private string $comment;

  public function __construct($rating,$comment) {
     $this->rating=$rating;
     $this->comment=$comment;
}
   
}