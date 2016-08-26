<?php

class Item {

    protected $iditem;
    protected $name;
    protected $type;
    protected $boost;
    
    
    function __construct($iditem, $name, $type, $boost) {
        $this->iditem = $iditem;
        $this->name = $name;
        $this->type = $type;
        $this->boost = $boost;
    }


    
    
    //get && set
    
    function getBoost() {
        return $this->boost;
    }

  


    
}

?>
