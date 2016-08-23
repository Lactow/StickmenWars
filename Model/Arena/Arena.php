<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Model for the DB connection for arena
 * Define behaviors of the arena
 *
 * @author lactor
 */
class Arena extends Cell{
    private $idArena;
    public $sizeRoom = "50";
    public $itemMax;
    public $cells;
    
    private function setSizeRoom($value){
        $this->sizeRoom = $value;
    }
    private function getSizeRoom(){
        return $this->sizeRoom;
    }
    
    private function createArena(){
        //instanciate arena with id and size;
        $size = $this->getSizeRoom();
        
        for($y=1;$y<=$size;$y++){
            for($x=1;$x<=$size;$x++){
                $cell = new Cell($x,$y,$this->idArena);
                $this->cells[$x][$y] = $cell;
            }
        }
    }
    
    
}
