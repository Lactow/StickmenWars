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
class Arena {

    private $idArena;
    private $sizeRoom = 24;
    private $itemMax = 5;
    private $cells;

    function __construct($idArena, $sizeRoom = 24, $itemMax = 5) {
        $this->idArena = $idArena;

        $this->sizeRoom = $sizeRoom;
        $this->itemMax = $itemMax;
        $this->cells=array();
    }

    public function getPosStick() {
        
    }

    public function createArena() {
        //instanciate arena with id and size;
        $size = $this->getSizeRoom();

        for ($y = 1; $y <= $size; $y++) {
            for ($x = 1; $x <= $size; $x++) {
                $cell = new Cell($x, $y, $this->idArena);
                $this->cells[$x][$y] = $cell;
            }
        }
    }

    public function createItemInArena() {


        $item01 = new Item(1, "potion", "potion", 5);
        $item02 = new Item(2, "sword", "potion", 6);

        $lesItem = array($item01, $item02);

        for ($i = 1; $i <= $this->itemMax; $i++) {
            $randX = rand(0, $this->sizeRoom - 1);
            $randY = rand(0, $this->sizeRoom - 1);
            $randItem = rand(0, sizeof($lesItem) - 1);

//            $lesItem[$randItem]
           // $this->cells 
           
        //->addItem($lesItem[$randItem]);
         //   echo $randItem . " - " . $randX . " " . $randY . " " . var_dump($lesItem[$randItem]) . "<br><br>";
        }
    }

    // get && set

    public function getSizeRoom() {
        return $this->sizeRoom;
    }

    public function getCells($x, $y) {
        return $this->cells[$x][$y];
    }

}
