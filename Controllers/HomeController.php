<?php
class Home{
    public function __construct(){
    }
    //@TODO
    public function doAction($action){
        switch($action){
            case 1 :
                $this->displayHome();
                break;
        }
    }

    public function displayHome(){
        ?>
        <h1 class="col-xs-12 col-sm-9 col-md-9 col-lg-9 col-lg-offset-1">Bienvenue au Home!</h1>
        <?php
    }
}
