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

  public function __construct($nameTO, $priceDestinationTO, $imgPath, $idOperator)
  {
    echo ('
          <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="'.$imgPath.'" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">'.$nameTO.'</h5>
            <p class="card-text">Séjour à partir de '.$priceDestinationTO.' €.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal'.$idOperator.'">Voir le profil de '.$nameTO.'</button>
          </div>
        </div>
        

        <!-- Modal -->
        <div class="modal fade" id="modal'.$idOperator.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">      
           <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">'.$nameTO.'</h5>
                <img src="'.$imgPath.'">  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        
        
        ');
  }
}