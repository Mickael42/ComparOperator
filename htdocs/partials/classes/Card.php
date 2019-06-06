<?php

class Card
{

  public function __construct($destination, $imgDestination)
  {
    echo ('
        <div class="col-sm">
          <div class="card cardDestination">
            <img class="card-img-top" src="../assets/img/' . $imgDestination . '"  alt="Card image cap">
              <div class="card-img-overlay">
                <h5 class="card-title">' . $destination . '</h5>
                  <form action="pageDestination.php" = method="get">
                  <input type ="hidden" name="selectionDestination" value="' . $destination . '">
                  <input type="submit" class="btn btn-primary" value="Voir nos offres"> 
                  </form>
              </div>
            </div>
          </div>');
  }
}


class CardDestinationTO extends Card
{

  public function __construct($nameTO, $priceDestinationTO)
  {
    echo ('
          <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../assets/img/Turquie.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">'.$nameTO.'</h5>
            <p class="card-text">Séjour à partir de'.$priceDestinationTO.' €.</p>
            <a href="#" class="btn btn-primary">Voir l\'offre</a>
          </div>
        </div>');
  }
}
