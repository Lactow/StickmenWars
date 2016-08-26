<?php

require_once './source/Model/StickMan.php';
require_once './source/Model/Arena/Arena.php';
require_once './source/Model/Items/Item.php';

$stickMan01 = new StickMan(1, "stick 01");
$stickMan02 = new StickMan(2, "stick 02");
$lesStick= array($stickMan01,$stickMan02);



$item01 = new Item(1, "potion", "potion", 5);
$item02 = new Item(2, "sword", "potion", 6);

$lesItem= array($item01,$item02);


$arena1 = new Arena(1, 5);
display("size arena", $arena1->getSizeRoom());



function display($title,$data){
    echo '<pre>';
    echo "<h3>".$title."</h3>";
    var_dump($data);
    echo '</pre>';
}


