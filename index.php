<?php
require 'vendor/autoload.php';
use App\SQLiteConnection;
use App\Person;
 
$pdo = (new SQLiteConnection())->connect();
if ($pdo != null) {
    echo 'Connected to the SQLite database successfully!</br>';
	
	echo 'Show Student list from database</br>';
	$person = new Person($pdo);
	$tables = $person->getTableList();
	echo '<hr>';
	echo '<ol>';
	foreach ($tables as $table)
		echo '<li>' . $table . '</li>';
	echo '</ol>';
	echo '<hr>';

} else {
    echo 'Whoops, could not connect to the SQLite database!';
}