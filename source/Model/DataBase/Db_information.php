<?php

class Db_informtion {

    private $getById;
    private $getByTitle;
    private $save;
    private $update;

    public function __construct($bd) {
        $this->getById = $bd->prepare("SELECT * FROM information WHERE idinformation = :id");
        $this->getByTitle = $bd->prepare("SELECT * FROM information WHERE title = :title");
        $this->save = $bd->prepare("INSERT INTO information (title, date, texte) VALUES ( :title, NOW(), :text)");
        $this->update = $bd->prepare("UPDATE information SET title = :title , texte = :text WHERE idinformation = :id");
    }

    function getById($id) {
        $this->getById->execute(array(':id' => $id));
      //  $this->getByid->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'information');
        //requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Film', array("ajoutePar", "titre", "uri", "duree", "categorie", "numMedia", "ajouteLe", "dateSortie", "photo", "nbVue", "lastView"));

        return $this->getById->fetch(PDO::FETCH_ASSOC);
    }

    function getByTitle($title) {
        $this->getByTitle->execute(array(':title' => $title));
//        $this->getByTitle->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'information');
        //requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Film', array("ajoutePar", "titre", "uri", "duree", "categorie", "numMedia", "ajouteLe", "dateSortie", "photo", "nbVue", "lastView"));

        return $this->getByTitle->fetch(PDO::FETCH_ASSOC);
    }

    function save($title, $text) {
        $this->save->execute(array(':title' => $title, ':text' => $text));
        return $this->save->rowCount();
    }

    function update($id, $title, $text) {
        $this->update->execute(array(':id' => $id, ':title' => $title, ':text' => $text));
        return $this->update->rowCount();
    }

}
