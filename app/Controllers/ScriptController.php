<?php
/*
 * To display script
 * save new script
 * launch script to fight
 */
class Script{
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
        <h1>Bienvenue au script!</h1>
        <?php
    }
}
