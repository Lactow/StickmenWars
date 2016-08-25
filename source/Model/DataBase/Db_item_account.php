<?php

class Db_item_account {

    private $buy;
    private $getitembuyaccount;
    public function __construct($bd) {
        
        $this->buy = $bd->prepare("insert into  item_has_stickman value ( idstickman = :idstick, iditem = :iditem , datebuild = NOW())");
        $this->getitembuyaccount = $bd->prepare("select * from item_has_stickman where 	idaccount = :id");
        
    }

    /*
     * buy un account acheter un object
     * @params : id account , id item
     */
    public function buy($idstick, $iditem) {
        $this->buy->execute(array(':idstick' => $idstick, ':iditem' => $iditem));
        return $this->buy->rowCount();
    }
    
      /*
     * getitembuyaccount retourne la liste de tous les objects acheter
     * @params : id account , id item
     */
    public function getitembuyaccount($idstick) {
        $this->getitembuyaccount->execute(array(':id' => $idstick));
        return $this->getitembuyaccount->fetchAll(PDO::FETCH_ASSOC);
    }


}   
