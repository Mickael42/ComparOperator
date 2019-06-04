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
                <h5 class="card-title">'.$destination.'</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          </div>');
  }
}
