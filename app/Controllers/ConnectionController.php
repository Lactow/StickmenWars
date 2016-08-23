<?php
/*
 * 
 * 
 */
class Connection{
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
        <h1>Bienvenue à la connection!</h1>
        <?php
    }
}
