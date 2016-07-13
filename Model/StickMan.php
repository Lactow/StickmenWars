<?php

/**
 * le stickman peut move, fight, look, protect,leave, died, grabItem,  
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
    protected  $posX;
    protected $posY;
    
            
    
    
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
    
    //return current position of stickman
    function getPosition($x,$y){
        
    }
    
    function walkX(){
        //this will parse arena horizontally and save when find a stickman or an item
    }
    function walkY(){
        //this will parse arena vertically and save when find a stickman or an item
    }
    
    function grab(){
        
    }
    
    
    
    

    
    
    
}