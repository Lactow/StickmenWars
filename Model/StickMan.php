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
    
    function setInventory($newInventory){
        //call this one whenever a new item is added or removed

    }
    
    function getAttributes($idStickman){
        return $this->attributes;
    }
    
    function setAttributes(){
        //life or strength
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
        $x->posX;
        $y->poxY;
        
    }
    
    function walkX($n){
        //this will parse arena horizontally and save when find a stickman or an item
        $oldX = $this->posX;

        $newX = $oldX+$n;
        
        return $newX;
        
    }
    function walkY($n){
        //this will parse arena vertically and save when find a stickman or an item
        $oldY = $this->posY;
        $newY = $oldY+$n;
        return $newY;
    }
    
    function grab($item){
        //take item
      
      $newInventory = $this->getInventory($inventoryItems);
      array_push($item, $inventory);
      $this->setInventory($newInventory);
      return $inventory;
       
    }
    
    
    
    

    
    
    
}