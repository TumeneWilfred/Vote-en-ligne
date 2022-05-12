<?php 

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
  ->withServiceAccount('vote-en-ligne-1b2ac-firebase-adminsdk-6oksp-8545bf15ad.json')
  ->withDatabaseUri('https://vote-en-ligne-1b2ac-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();
?>

