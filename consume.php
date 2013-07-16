<?php
echo("clicked!");
require_once 'meekrodb.2.2.class.php';
DB::$user = 'root';
DB::$password = 'root';
DB::$dbName = 'consumption';

$table = 'consumption';

$kind = $_REQUEST['kind'];
$amount = $_REQUEST['amount'];

if ($kind != '' && $amount != '') {
	DB::insert($table, array(
		'kind' => $kind,
		'amount' => $amount
	));
}
/*
echo($amount . " of " $kind . " consumed!");
*/
?>