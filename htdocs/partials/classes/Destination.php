<?php

class Destination {
    private $id;
    private $location;
    private $price;
    private $id_tour_operator;

    public function __construct($destination){
            $this->id = $destination['id'];
            $this->location = $destination['location'];
            $this->price = $destination['price'];
            $this->id_tour_operator = $destination['id_tour_operator'];
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