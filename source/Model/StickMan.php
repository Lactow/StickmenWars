<?php

/**
 * le stickman peut move, fight, look, protect,leave, died, grabItem,  
 *
 * @author lactor
 */
class StickMan {

    CONST __HIMSELF__ = 1;
    CONST __OTHER_DIED__ = 2;
    CONST __OTHER_TOUCHED__ = 3;

    public $idStickman;
    public $nameStick;
    protected $inventoryItems;
    protected $attributes;
    protected $actionPoints;
    protected $movePoints;
    protected $posX;
    protected $posY;
    private $damage;
    private $exp;

    function __construct($idStickman, $nameStick) {
        $this->idStickman = $idStickman;
        $this->nameStick = $nameStick;
    }



    //------------------------- GETTERS -------------------------

    function getStickman() {
        return $this->idStickman;
    }

    function getNameStick() {
        return $this->nameStick;
    }

    function getInventory() {
        return $this->inventoryItems;
    }

    function getAttributes() {
        return $this->attributes;
    }

    function getActionPoints() {
        return $this->actionPoints;
    }

    function getMovePoints() {
        return $this->movePoints;
    }

    //return current position of stickman
    function getPosition($x, $y) {
        $x->posX;
        $y->poxY;
    }

    function getDamage() {
        return $this->damage;
    }

    //------------------------- SETTERS -------------------------

    /* function setStickman($idStickman) {

      } */
    function setStickman($idStickman) {
        $id = (int) $idStickman;
        if ($id > 0) {
            $this->idStickman = $id;
        }
    }

    function setName($name) {
        if (is_string($name)) {
            $this->nameStick = $name;
        }
    }

    //do damage to someone but not himself
    function fight(StickMan $idStickman) {
        if ($idStickman->getStickman() == $this->idStickman) {
            return self::__HIMSELF__;
        }
        $this->exp += 1;
        return $idStickman->beTouched(); //just return if other is touched
    }

    //is touched, so damage are : $persoAFrapper->_degats += $this->_force;
    function beTouched() {
        $this->damage += 5;

        // Si on a 100 de dégâts ou plus, on dit que le personnage a été tué.
        //TODO : inserer la life ici
        if ($this->damage >= 100) {
            return self::__OTHER_DIED__;
        }

        // Sinon, on se contente de dire que le personnage a bien été frappé.
        return self::__OTHER_TOUCHED__;
    }

    //set some action points, to do some actions in the script

    function setActionPoints() {
        if($this->actionPoints >0){
            $this->actionPoints -1; //decrem 
        }
        
    }

    function setMovePoints() {
        if($this->movePoints >0){
            $this->movePoints -1; //decrem
        }
    }

    function setAttributes() {
        //life or strength
    }

    function setInventory(array $newInventory) {
        //call this one whenever a new item is added or removed
    }

    function walkX($n) {
        //this will parse arena horizontally and save when find a stickman or an item
        $oldX = $this->posX;

        $newX = $oldX + $n;

        return $newX;
    }

    function walkY($n) {
        //this will parse arena vertically and save when find a stickman or an item
        $oldY = $this->posY;
        $newY = $oldY + $n;
        return $newY;
    }

    function grab($item) {
        //take item
        $newInventory = $this->getInventory();
        array_push($newInventory, $item);
        $this->setInventory($newInventory);
        return $newInventory;
    }

}
