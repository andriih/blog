<?php
require __DIR__.'/autoload.php';

$db = new \App\Db();
$res = $db->query('SELECT * FROM foo');
echo "<pre>";
var_dump($res);
echo "</pre>";
