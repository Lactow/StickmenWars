<?php
class Db_item_stickman{
    
    
    private $buy;
    
    public function __construct($bd) {
        $this->buy= $bd->prepare("insert into  item_has_stickman idstickman = :idstick, iditem = :iditem , datebuild = NOW() ");
    }
    
    
    public function buy($idstick,$iditem){
            $this->buy->execute(array(':idstick' => $idstick,':iditem'=>$iditem));
        return $this->buy->rowCount();
    }
}
