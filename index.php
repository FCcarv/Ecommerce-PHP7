<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Code\Page;

$app = new Slim();

echo $app->config('debug', true);


$app->get('/', function() {
    
 	$page = new Page();

 	$page->setTpl("index");
	 
});

$app->run();

 ?>