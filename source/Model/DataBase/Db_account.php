<?php

class Db_account {

    private $getById;
    private $getByName;
    private $updatePassword;
    private $updateScript;
    private $ban;
    private $avertissement;
    private $connect;

    public function __construct($bd) {
        $this->getById = $bd->prepare("SELECT * FROM account WHERE idaccount = :id");
        $this->getByName = $bd->prepare("select * from stickman WHERE stickname = :name");

        $this->updatePassword = $bd->prepare("UPDATE account SET password = :pass WHERE idaccount = :id");
        $this->updateScript = $bd->prepare("UPDATE account SET script = :script WHERE idaccount = :id");
        $this->ban = $bd->prepare("UPDATE account SET isban = :ban WHERE idaccount = :id");
        $this->avertissement = $bd->prepare("UPDATE account SET avertissement = avertissement +1 WHERE idaccount = :id");
        $this->connect = $bd->prepare("UPDATE account SET datelastconnection = NOW() WHERE idaccount = :id");

        $this->gameEnd = $bd->prepare("update account set countround = countround+1 , countwin = countwin + :win , countlost = countlost + :lost WHERE idstickman = :id ");
    }

    /*
     * getByid  retoune le account par l'id account
     * @params : id stickman 
     */

    public function getByid($id) {
        $this->getByid->execute(array(':id' => $id));
        $this->getByid->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'account');
        //requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Film', array("ajoutePar", "titre", "uri", "duree", "categorie", "numMedia", "ajouteLe", "dateSortie", "photo", "nbVue", "lastView"));

        return $this->getByid->fetch();
    }

    
       /*
     * getByname  retoune le account par le name du stick
     * @params : id stickman 
     */

    public function getByName($name) {
        $this->getByid->execute(array(':name' => $name));
        return $this->getByid->fetch();
    }
    
    /*
     * updatePassword change le mod de pass
     * @params : id account , String new password
     */

    public function updatePassword($id, $pass) {
        $this->updatePassword->execute(array(':id' => $id, ':pass' => $pass));
           return $this->updatePassword->rowCount();
    }

    /*
     * ban -> ban ou deban un joueur
     * @param : id account , boolean 
     */

    public function ban($id, $bool) {
        $this->ban->execute(array(':id' => $id, ':bool' => $bool));
         return $this->ban->rowCount();
    }

    /*
     * avertissement incrément avertissement :]
     * param : id account
     */

    public function avertissement($id) {
        $this->avertissement->execute(array(':id' => $id));
         return $this->avertissement->rowCount();
    }

    /*
     * connect change la datelastConnection
     * param : id account
     */

    public function connect($id) {
        $this->connect->execute(array(':id' => $id));
          return $this->connect->rowCount();
    }

}
