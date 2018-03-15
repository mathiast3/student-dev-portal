<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/6/2018
 * Time: 2:56 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

require_once ('vendor/autoload.php');


$f3 = Base::instance();

//turn on error reporting
$f3->set('DEBUG',3);

$f3->route('GET /', function() {
    $view = new View;
    echo $view->render('views/home.html');
});



$f3->run();