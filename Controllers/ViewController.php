<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Index{
    public function __construct(){
    }
    //@TODO
    public function doAction($action){
        switch($action){
            case 1 :
                $this->afficheIndex();
                break;
        }
    }

    public function afficheIndex(){
        ?>
        <h1>Bienvenue !</h1>
        <?php
    }
}