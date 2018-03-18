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

$f3->route('GET|POST /projects', function($f3) {
    include 'models/database.php';
    connect();
    $projects = getProjects();
    $f3->set('projects', $projects);

    $template = new Template();
    echo $template->render('views/projects.html');
});

$f3->route('GET|POST /projects/client/@projectID', function($f3, $params) {
    include 'models/database.php';
    connect();

    $projectID = $params['projectID'];
    $clients = getClients($projectID);
    $f3->set('clients', $clients);

    $template = new Template();
    echo $template->render('views/clients.html');
});

$f3->route('GET|POST /projects', function($f3, $params) {
    include 'models/database.php';
    connect();

    $projectID = $params['projectID'];
    $developers = getDevelopers($projectID);
    $f3->set('developers', $developers);

    $template = new Template();
    echo $template->render('views/developers.html');
});
$f3->run();