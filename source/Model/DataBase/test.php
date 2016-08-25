<?php

require_once './Db_connect.php';
require_once './Db_item.php';
require_once './Db_information.php';
require_once './Db_arena.php';

$db_connect = new Db_connect();
$db = $db_connect->DB_Connection();

$item = new Db_item($db);
echo '<br>---- get id<br>';

var_dump($item->getById(1));
echo '<br>---- get all<br>';
var_dump($item->getAll());

echo '<br>---- maxItem<br>';
var_dump($item->maxItem());
/*
echo '<h1>inforamtion</h1>';
$info = new Db_informtion($db);

echo '<br>---- getById <br>';
var_dump($info->getById(1));

echo '<br>---- getByTitle <br>';
var_dump($info->getByTitle("promotion"));

echo '<br>---- save <br>';
//var_dump($info->save("promotion2","la promo"));


echo '<br>---- getByTitle <br>';
$byTitle = $info->getByTitle("promotion2");
var_dump($byTitle);
echo '<br>---- update <br>';
var_dump($info->update($byTitle["idinformation"],"promotion3","tett"));

echo '<br>---- getByTitle <br>';
var_dump($info->getByTitle("promotion3"));
/**/
/*
echo '<h1>arena</h1>';
$arena = new Db_arena($db);

echo '<br>---- getBest <br>';
var_dump($arena->getBest());
/**/
/*
echo '<h1>Db_item_account</h1>';
require_once './Db_item_account.php';
$db_item_account = new Db_item_account($db);


var_dump($db_item_account->buy(1, 1));

var_dump($db_item_account->getitembuyaccount(1));
/**/

echo "<h1>account</h1>";
require_once './Db_account.php';
$db_account = new Db_account($db);

$db_account->gameEnd($id);



?>