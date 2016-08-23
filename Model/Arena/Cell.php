<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cell {
    private $id;
    private $idArena;
    private $hasItem;
    private $geoY;
    private $geoX;
    
    function __construct($x,$y,$idArena) {
        $this->creationCell($x,$y);
        $this->setIdArena($idArena);
        $this->randomInstanciateAttribute();
    }
    
    /*
     * return GeoX value
     */
    public function getGeoX(){
        return $this->geoX;
    }
    /*
     * set GeoX value
     */
    protected function setGeoX($value){
        $this->geoX = (int) $value;
    }
    /*
     * return geoY value
     */
    public function getGeoY(){
        return $this->geoY;
    }
    /*
     * set GeoY value
     */
    protected function setGeoY($value){
        $this->geoY = (int) $value;
    }
    /*
     * set id Arena
     */
    protected function setIdArena($idArena){
        $this->idArena = $idArena;
    }/*
     * Get hasItem
     */
    protected function getHasitem(){
        return $this->hasItem;
    }
    private function creationCell($valueX,$valueY){
        setGeoY($valueY);
        setGeoX($valueX);
    }
    private function randomInstanciateAttribute(){
        $this->hasItem = (bool)rand(0, 1);
    }
    
}