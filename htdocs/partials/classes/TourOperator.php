<?php

class TourOperator {
    private $id;
    private $name;
    private $grade;
    private $link;
    private $is_premium;

    public function __construct(array $operators){
        foreach($operators as $operator){
            $this->id = $operator[0];
            $this->name = $operator[1];
            $this->grade = $operator[2];
            $this->link = $operator[3];
            $this->is_premium = $operator[4];
        }
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getGrade(){
        return $this->grade;
    }

    public function getLink(){
        return $this->link;
    }

    public function getPremium(){
        return $this->is_premium;
    }

}