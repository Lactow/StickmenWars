<?php

class Db_arena {

    private $getBest;
    private $saveArena;

    public function __construct($bd) {

        $this->getBest = $bd->prepare("select idaccountwinner,COUNT(idarena) as count from arena group by idaccountwinner ASC LIMIT 1");
        $this->saveArena = $bd->prepare("insert into arena (idstickmanwinner,datecreate)VALUE(:idStick,NOW())");
    }

    public function getBest() {
        $this->getBest->execute();
        return $this->getBest->fetch(PDO::FETCH_ASSOC);
    }

    function saveArena($idStick) {
        $this->saveArena->execute(array(':idStick' => $idStick));
        return $this->saveArena->rowCount();
    }

}
