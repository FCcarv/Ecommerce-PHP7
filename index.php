<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

echo $app->config('debug', true);


$app->get('/', function() {
    
  $sql = new \Code\DB\Sql();
 
    $results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);
	 

});

$app->run();

 ?>