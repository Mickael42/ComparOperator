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

  public function __construct($nameTO, $priceDestinationTO, $imgPath, $idOperator, $reviews,$destinationSelectedName)
  {
    echo ('
          <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="' . $imgPath . '" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">' . $nameTO . '</h5>
            <p class="card-text">Séjour à partir de ' . $priceDestinationTO . ' €.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal' . $idOperator . '">Voir le profil de ' . $nameTO . '</button>
          </div>
        </div>
        

        <!-- Modal -->
        <div class="modal fade" id="modal' . $idOperator . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">      
           <div class="modal-content">
              <div class="modal-header">
                <img src="' . $imgPath . '">  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <h4>Les derniers avis pour '.$nameTO.' </h4>');
            foreach($reviews as $review){
              echo('
              <p>Posté par <strong>'.$review['author'].'</strong> : '.$review['message'].'
              ');
            }


            echo('</div>
            <div class="row justify-content-center">
            <div class="col-md-auto">
            <h5>Donner votre avis !</h5>
                <form action="../layout/createReview.php" method="post">
                    <input type="text" name="review" placeholder="Saisissez votre commentaire ici" required>
                    <input type="text" name="nameAuthor" placeholder="Saisissez votre nom ici" required>
                    <label for="grade" name ="grade>   Attribuer une note</label>
                  
                    <label for="grade">Attribuer une note:</label>

                    <select id="grade" name="grade">
                        <option value="" disabled selected>--Choissiez un note--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                  
                    <input type="hidden" name="idOperator" value="'.$idOperator.'">
                    <input type="hidden" name="nameDestination" value="'.$destinationSelectedName.'">
                    <button class="btn btn-primary" type="submit" >Envoyer</button>
                </form>
            </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>');
    }
  }

