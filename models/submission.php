<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/11/2018
 * Time: 8:48 PM
 */

require "/home/mtaylorg/config.php";
require "/home/mtaylorg/public_html/328/student-dev-portal/models/db-connect.php";

//connect to database
$dbh=connect();

//create a new Project and Client objects to hold the data
$project = new Project();

//check if the form has been submitted
if(!empty($_POST)) {

    if(isset($_POST['projectName'])){
        $project.setProjectName($_POST['projectName']);
    }

    if(isset($_POST['projectDescription'])){
        $project.setProjectDescription($_POST['projectDescription']);
    }

    if(isset($_POST['companyName'])){
        $project.setCompanyName($_POST['companyName']);
    }

    if(isset($_POST[['companyLocation']])){
        $project.setCompanyLocation($_POST['companyLocation']);
    }

    if(isset($_POST[['companyURL']])){
        $project.setCompanyURL($_POST['companyURL']);
    }

    if(isset($_POST[['siteURL']])){
        $project.setSiteURL($_POST['siteURL']);
    }

    if(isset($_POST[['trelloLink']])){
        $project.setTrelloLink($_POST['trelloLink']);
    }

    if(isset($_POST[['gitLink']])){
        $project.setGitLink($_POST['gitLink']);
    }

    if(isset($_POST[['name']])){
        $name=$_POST['name'];
    }

    if(isset($_POST[['phone']])){
        $phone=$_POST['phone'];
    }

    if(isset($_POST[['email']])){
        $email=$_POST['email'];
    }



}

$sql="INSERT INTO projects(title,description, clientCompany, clientLocation, clientSite,status,trello,projectURL)
      VALUES(:title,:description, :clientCompany, :clientLocation, :clientSite,:status,:trello,:projectURL)";
//prepare statement
$statement = $dbh->prepare($sql);
//Bind parameters
$statement->bindParam(':title',$projectName, PDO::PARAM_STR);
$statement->bindParam(':description',$projectDescription, PDO::PARAM_STR);
$statement->bindParam(':clientCompany',$companyName, PDO::PARAM_STR);
$statement->bindParam(':clientLocation',$companyLocation, PDO::PARAM_STR);
$statement->bindParam(':clientSite',$companyURL, PDO::PARAM_STR);
$statement->bindParam(':status',$status, PDO::PARAM_STR);
$statement->bindParam(':trello',$trelloLink, PDO::PARAM_STR);
$statement->bindParam(':projectURL',$siteURL, PDO::PARAM_STR);
$statement->execute();

$f3->set('DEBUG',3);
$f3->reroute('home.html');

