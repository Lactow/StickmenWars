<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell extends Arena {

    private $id;
    private $idArena;
    private $hasItem;//listitem
    private $geoY;
    private $geoX;

    public function __construct($x, $y, $idArena) {
        $this->geoX = $x;
        $this->geoY = $y;

        $this->idArena = $idArena;
        $this->hasItem = array();
    }
// function

    public function addItem($item){
        array_push($this->hasItem, $item);
    }
    
    
    
    public function removItem($item){
        
        $key = array_search($item, $this->hasItem);// recherche la postion de l'item dans array
        unset($this->hasItem[$key]);// suprime l'item 
        $array = array_values($array);// sork

    //get && set


 

    
}
