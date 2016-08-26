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

    public function createItemInArena($lesItem) {
        for ($i = 1; $i <= $this->itemMax; $i++) {
            $randX = rand(0, $this->sizeRoom);
            $randY = rand(0, $this->sizeRoom);
            $randItem = rand(0, $this->itemMax);

            $this->cells[$randX][$randY]->
                    $this->cells[$randX][$randY]->hasItem = $getItem;
        }
    }

    // get && set

    public function getSizeRoom() {
        return $this->sizeRoom;
    }

    function getCells() {
        return $this->cells;
    }

}
