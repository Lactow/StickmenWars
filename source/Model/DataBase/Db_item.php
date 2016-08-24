<?php

class Db_item {

    private $getAll;

    public function __construct($db) {
        $this->getAll = $db->prepare("select * from item");
    }

    public function getAll() {
        $this->selectOne->execute();
        $this->getByName->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'item');
        //requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Film', array("ajoutePar", "titre", "uri", "duree", "categorie", "numMedia", "ajouteLe", "dateSortie", "photo", "nbVue", "lastView"));

        return $this->selectOne->fetchAll();
    }

}
