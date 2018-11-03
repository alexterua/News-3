<?php

require_once __DIR__. '/../autoload.php';
require_once __DIR__ . '/../functions.php';

/*$db = new \App\Db();
$sql = "INSERT INTO users (email, name) VALUES ('alex@bk.ru', 'Alex')";
$db->execute($sql);*/

$data = \App\Models\User::findById(2);

dd($data);