<?php
$db = new SQLite3('hello.db');

$db->exec('CREATE TABLE currencies (ccode STRING,crate FLOAT)');
echo "created table.Inserting rows...<br />";
$db->exec("INSERT INTO currencies VALUES ('USD',0)");
$db->exec("INSERT INTO currencies VALUES ('INR',0.0153206)");
$db->exec("INSERT INTO currencies VALUES ('AUD',0.77)");
echo "Inserted Values<br />";
echo "Printing values<br />";
$result = $db->query('SELECT * FROM currencies');
var_dump($result->fetchArray());
?>