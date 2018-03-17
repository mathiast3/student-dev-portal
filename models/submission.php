<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/11/2018
 * Time: 8:48 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', TRUE);




require "database.php";
require "../classes/Project.php";
require "../classes/Client.php";
require "../classes/Developers.php";



//create a new Project and Client objects to hold the data
$project= new Project();
$client = new Client();
$developer = new Developers();

//check if the form has been submitted
if(!empty($_POST)) {

    if(isset($_POST['projectName'])){
        $project->setProjectName($_POST['projectName']);
    }

    if(isset($_POST['projectDescription'])){
        $project->setProjectDescription($_POST['projectDescription']);
    }

    if(isset($_POST['companyName'])){
        $project->setCompanyName($_POST['companyName']);
    }

    if(isset($_POST['companyLocation'])){
        $project->setCompanyLocation($_POST['companyLocation']);
    }

    if(isset($_POST['companyURL'])){
        $project->setCompanyURL($_POST['companyURL']);
    }

    if(isset($_POST['username'])){
        $project->setUsername($_POST['username']);
    }

    if(isset($_POST['password'])){
        $project->setPassword($_POST['password']);
    }

    if(isset($_POST['siteURL'])){
        $project->setSiteURL($_POST['siteURL']);
    }

    if(isset($_POST['trelloLink'])){
        $project->setTrelloLink($_POST['trelloLink']);
    }

    if(isset($_POST['gitLink'])){
        $project->setGitLink($_POST['gitLink']);
    }

    if(isset($_POST['name'])){
        $client->setName($_POST['name']);
    }

    if(isset($_POST['phone'])){
        $client->setPhone($_POST['phone']);
    }

    if(isset($_POST['email'])){
        $client->setEmail($_POST['email']);
    }

    if(isset($_POST['className'])){
        $developer->setName($_POST['className']);
    }

    if(isset($_POST['instructor'])){
        $developer->setInstructor($_POST['instructor']);
    }

    if(isset($_POST['quarter'])){
        $developer->setQuarter($_POST['quarter']);
    }

    if(isset($_POST['notes'])){
        $developer->setNotes($_POST['notes']);
    }

    $project->setStatus("active");




}

//insert to projects table
insertProject($project->getProjectName(),$project->getProjectDescription(), $project->getCompanyName(), $project->getCompanyLocation(), $project->getCompanyURL(),$project->getStatus(), $project->getTrelloLink(),$project->getSiteURL(),$project->getUsername(), $project->getPassword());

//get the projectID to use as a foreign key
$projectID=getProjectID($project->getProjectName());

//insert into the client and dev table
insertClient($client->getName(),$client->getEmail(),$client->getPhone(),$projectID);
insertDevelopers($developer->getName(),$developer->getInstructor(),$developer->getQuarter(),$developer->getInstructor(),$projectID);




