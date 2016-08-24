<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Weed
 *
 * @author lactor
 */
class Weed {
    //put your code here
    private $idWeed;
    private $hpRestore;
    
    public function __construct($id,$stickHpMax) {
        $this->idWeed = $id;
        $this->hpRestore = $stickHpMax;
    }
    
}
