<?php

require_once './source/Model/StickMan.php';
require_once './source/Model/Arena/Arena.php';
require_once './source/Model/Items/Item.php';



$stickMan01 = new StickMan(1, "stick 01");
$stickMan02 = new StickMan(2, "stick 02");
$lesStick = array($stickMan01, $stickMan02);






$arena1 = new Arena(1, 5);
display("size arena", $arena1->getSizeRoom());
$arena1->createItemInArena();
displayArena($arena1);

function display($title, $data) {
    echo '<pre>';
    echo "<h3>" . $title . "</h3>";
    var_dump($data);
    echo '</pre>';
}

function displayArena(Arena $arena) {
    $size = $arena->getSizeRoom();

    for ($x = 0; $x < $size; $x++) {

        for ($y = 0; $y < $size; $y++) {
            echo " ° ";
            $cells = $arena->getCells($x, $y);
        }
        echo '<br>';
    }
}
