<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db_connect
 *
 * @author caro_pc
 */
class Db_connect {
    private $host;
    private $user;
    private $pwd;
    private $table;
    private $url ;
    
    public function __construct() {
        $this->url = $_SERVER['SERVER_NAME'];
        switch($this->url){
            case(strpos($this->url, 'localhost') !== false) :
            case(strpos($this->url, 'local') !== false):
                $this->host = '127.0.0.1';
                $this->user = 'root';
                $this->pwd = '';
                $this->bdd = '';
                /*
                 * Must be modifed when the app will be online
                 */
            default:
                    $this->host = '127.0.0.1';
                    $this->user = 'root';
                    $this->pwd = '';
                    $this->bdd = '';
                    break;
        }
    }
    
    public function DB_Connection(){
        $mysqli = mysqli_connect($this->host,$this->user,$this->pwd,$this->bdd)  or die ("ERROR : " . mysqli_error($mysqli));
        mysqli_query($mysqli, 'SET NAMES UTF8');
        return $mysqli;
    }
}
