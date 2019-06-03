<?php

class Destination {
    private $id;
    private $location;
    private $price;
    private $id_tour_operator;

    public function __construct(array $destinations){
      
            $this->id = $destinations['id'];
            $this->location = $destinations['location'];
            $this->price = $destinations['price'];
            $this->id_tour_operator = $destinations['id_tour_operator'];
            
        
    }

    public function getId(){
        return $this->id;
    }

    public function getLocation(){
        return $this->location;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getId_tour_operator(){
        return $this->id_tour_operator;
    }


}