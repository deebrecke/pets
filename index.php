<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once("vendor/autoload.php");

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route ("home page" for hello project)
$f3->route('GET /', function(){
//echo '<h1>Pet Home</h1>';
$view = new Template();
echo $view->render('views/home.html');
});

//Run fat free
$f3->run();

?>