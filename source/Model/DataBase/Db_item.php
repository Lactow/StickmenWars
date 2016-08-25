<?php

class Db_item {

    private $getById;
    private $getAll;
    private $maxItem;

    public function __construct($db) {
        $this->getById = $db->prepare("select * from item where iditem = :id");
        $this->getAll = $db->prepare("select * from item");
        $this->maxItem = $db->prepare("select count(iditem) from item");
    }

    /*
     * getById retourne l'item par l'id
     * @params : id item
     */

    public function getById($id) {
        $this->getById->execute(array(':id' => $id));
        //  $this->getById->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'item');
        //requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Film', array("ajoutePar", "titre", "uri", "duree", "categorie", "numMedia", "ajouteLe", "dateSortie", "photo", "nbVue", "lastView"));

        return $this->getById->fetch();
    }

    /*
     * getAll retourne tous les items
     * @params : 
     */

    public function getAll() {
        $this->getAll->execute();
       //  $this->getAll->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'item');
        //requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Film', array("ajoutePar", "titre", "uri", "duree", "categorie", "numMedia", "ajouteLe", "dateSortie", "photo", "nbVue", "lastView"));
        //$result = $sth->fetchAll(PDO::FETCH_CLASS, "fruit");
        return $this->getAll->fetchAll();
    }

    /*
     * maxItem obtient le nomrbe d'items
     * @params : 
     */

    public function maxItem() {
        $this->maxItem->execute();
        return $this->maxItem->fetch();
    }

}
