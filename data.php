<?php

require_once 'meekrodb.2.2.class.php';
DB::$user = 'root';
DB::$password = 'root';
DB::$dbName = 'consumption';

$table = 'consumption';

//$link = mysql_connect('localhost', 'root', 'root');

$all_data = DB::query("SELECT * FROM " . $table);

foreach($all_data as $row) {
  echo "Kind: " . $row['kind'] . "<br>";
  echo "Amount: " . $row['amount'] . "<br>";
  echo "Time: " . $row['time'] . "<br>";
  echo "-------------<br>";
}

echo("Data loaded!");

?>