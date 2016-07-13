<?php

/**
 * This class implements all methods for discussing with the API
 * and instantiate StickMen
 *
 * @author lactor
 */
class StickMan {
    public $idStickman;
    public $nameStick;
    protected $inventoryItems;
    protected $attributes;
    protected $actionPoints;
    protected $movePoints;
    
    
    
    function getStickman($idStickman){
        return $this->idStickman;
    }
    
    function setStickman(){
        
    }
    function getNameStick($nameStick){
        return $this->nameStick;
    }
    
    function setName(){
        
    }
    
    function getInventory($inventoryItems){
        return $this->inventoryItems;
    }
    
    function setInventory(){
        
    }
    
    function getAttributes($idStickman){
        return $this->attributes;
    }
    
    function setAttributes(){
        
    }
    
    function getActionPoints($idStickman){
        return $this->actionPoints;
    }
    
    function setActionPoints(){
        
    }
    
    function getMovePoints($idStickman){
        return $this->movePoints;
    }
    
    function setMovePoints(){
        
    }

    
    
    
}