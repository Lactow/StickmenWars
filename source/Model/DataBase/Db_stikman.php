<?php

class Db_stickman {

    private $getByName;
    private $getById;
    private $getMaxWin;
    private $gameEnd;

    public function __construct($bd) {
        $this->getByName = $bd->prepare("select * from stickman WHERE stickname = :name");
        $this->getById = $bd->prepare("select * from stickman WHERE idstickman=:id");

        $this->getMaxWin = $bd->prepare("select * from stickman WHERE countwin = (select max(countwin) from stickman)");

        $this->gameEnd = $bd->prepare("update stickman set countround = countround+1 , countwin = countwin + :win , countlost = countlost + :lost WHERE idstickman = :id ");
    }

    /*
     * getByName retourne le stick par le nom
     */

    public function getByName($name) {
        $this->getByName->execute(array(':name' => $name));
        $this->getByName->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'stickman');
        return $this->getByName->fetch();
    }

    /*
     * getById retourne le stick par sont id
     */

    public function getById($id) {
        $this->getById->execute(array(':id' => $id));
        $this->getById->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'stickman');
        return $this->getById->fetch();
    }

    /*
     * getMaxWin retourne le joueur qui a le plus de partie gagnier
     * 
     */

    public function getMaxWin() {
        $this->getMaxWin->execute();
        $this->getMaxWin->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'stickman');
        return $this->getMaxWin->fetchAll();
    }

    /*
     * gameEnd incrément les stats du stick
     * @param : id du stickman  , boolean -> true = victoire
     * 
     */

    public function gameEnd($id, $victoire) {
        if ($victoire) {
            $this->gameEnd->execute(array(':id' => $id, ':win' => 1, ':lost' => 0));
        } else {
            $this->gameEnd->execute(array(':id' => $id, ':win' => 0, ':lost' => 1));
        }
        return $this->gameEnd->rowCount();
    }

}
