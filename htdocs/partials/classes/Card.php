<?php

class Card
{

  public function __construct($destination)
  {
    echo ('
        <div class="col-sm">
          <div class="card cardDestination">
            <img class="card-img-top" src="https://picsum.photos/230/230"  alt="Card image cap">
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
