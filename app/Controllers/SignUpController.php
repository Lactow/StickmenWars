<?php
/*
 * Controller to signup OR create new account
 * save datas
 * connect user
 */
class Signup{
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
        <h1>Bienvenue au Signup!</h1>
        <?php
    }
}
