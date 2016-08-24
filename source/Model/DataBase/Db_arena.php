<?php

class Db_arena {

    private $getBest;
    private $saveArena;

    public function __construct($bd) {

        $this->getBest = $bd->prepare("select * from arena group by idstickmanwinner ASC limit 1");
        $this->saveArena = $bd->prepare("insert into arena (idstickmanwinner,datecreate)VALUE(:idStick,NOW())");
    }

    public function getBest() {
        $this->getBest->execute();
        return $this->getBest->fetch();
    }

    function saveArena($idStick) {
        $this->saveArena->execute(array(':idStick' => $idStick));
        return $this->saveArena->rowCount();
    }

}
