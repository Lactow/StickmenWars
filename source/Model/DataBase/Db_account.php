<?php

class Db_account {

    private $getByid;
    private $updatePassword;
    private $ban;
    private $avertissement;
    private $connect;

    public function __construct($bd) {
        ;
    }

    /*
     * getByid  retoune le account par l'id account
     * @params : id stickman 
     */

    public function getByid($id) {
        
    }

    /*
     * updatePassword change le mod de pass
     * @params : id account , String new password
     */

    public function updatePassword($id, $pass) {
        
    }

    /*
     * ban -> ban ou deban un joueur
     * @param : id account , boolean 
     */

    public function ban($id, $bool) {
        
    }

    /*
     * avertissement incrément avertissement :]
     * param : id account
     */

    public function avertissement($id) {
        
    }

    /*
     * connect change la datelastConnection
     * param : id account
     */

    public function connect($id) {
        
    }

}
