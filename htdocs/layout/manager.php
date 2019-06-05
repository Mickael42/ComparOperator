<?php

class Manager
{
    private $bdd;

    public function __construct($hostName)
    {
        try {
            $this->bdd = new PDO('mysql:host='.$hostName.';dbname=ComparOperator;charset=utf8', 'root', '');
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getAllDestination()
    {
        $rep = $this->bdd->query("SELECT * FROM destinations WHERE id_tour_operator=2");
        $allDestinations = $rep->fetchAll();
        return $allDestinations;
    }

    public function getOperatorByDestination($idOperator)
    {
        $req = $this->bdd->prepare("SELECT * FROM tour_operators INNER JOIN destinations WHERE id_tour_operator= ?");
        $req->execute(array(
            $idOperator
        ));
        $operatorByDestination = $req->fetch();
        return $operatorByDestination;
    }

    public function createReview($message, $author, $id_tour_operator)
    { 
        $createReview = $this->bdd->prepare("INSERT INTO reviews(message, author, id_tour_operator)
                                                VALUES(?,?,?)");

        $createReview->execute(array($message, $author,$id_tour_operator));
    }

    public function getReviewByOperatorId($idOperator)
    {
        $req = $this->bdd->prepare("SELECT * FROM reviews INNER JOIN tour_operators WHERE id_tour_operator= ?");
        $req->execute(array(
            $idOperator
        ));
        $reviewByOperatorID = $req->fetch();
    }


////////////////////////////////Méthodes pour la partie Admin/////////////////////////////////////////////


    public function getAllOperator()
    {
        $rep = $this->bdd->query("SELECT * FROM tour_operators");
        $allOperators = $rep->fetchAll();
        return $allOperators;
    }


    public function updateOperatorToPremium($idOperator)
    {
        $req = $this->bdd->prepare("UPDATE tour_operators 
                                    SET is_premium = is_premium + 1
                                    WHERE id = ?");
        $req->execute(array($idOperator));
     }


    public function createTourOperator($operatorName, $operatorLink)
    { 
        $createTourOperator = $this->bdd->prepare("INSERT INTO tour_operators(name, grade, link, is_premium)
                                                VALUES(?,?,?,?)");
        $createTourOperator->execute(array($operatorName, 0, $operatorLink,0));
    }


    public function createDestination($location, $price, $id_tour_operator)
    { 
        $createDestination = $this->bdd->prepare("INSERT INTO destinations(location, price, id_tour_operator)
                                                VALUES(?,?,?)");
        $createDestination->execute(array($location, $price, $id_tour_operator));

    }
}


