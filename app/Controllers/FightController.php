<?php

/*
 * Controller for join arena, 
 * and know if player has won or lost
 * displaying messages for that.
 * controller to quit arena 
 */
class Fight{
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
        <h1>Bienvenue au Fight!</h1>
        <?php
    }
}
