<?php
require __DIR__.'/autoload.php';

$db = new \App\Db();
$res = $db->execute('CRAETE TABLE foo (id SERIAL)');
var_dump($res);