<?php

class Db_script{
    private $getById;
    private $update;
    private $addNew;
    
    
    public function __construct($bd) {
    //getById    //select * from script where idScript = :id
        //addNew $db->prepare("insert into script (script,lastupdate,isvalide) VALUE (:script ,NOW(),$valid)");
    }
    function getById($id) {
        
    }
    

    function update($title,$text){
        
    }
        function addNew($script,$valide){
        
    }
    
}
