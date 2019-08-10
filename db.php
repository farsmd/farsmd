<?php
require  'Medoo.php';

// Using Medoo namespace
use Medoo\Medoo;

$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'api',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
  'prefix' => 'api_',
]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["code"])) {
    $database->insert("product", [
	     "code" => $_POST["code"],
	     "pn" => $_POST["pn"],
    	 "price" => $_POST["price"],
       "pcs" => $_POST["pcs"],
    ]);
  };
};

?>
