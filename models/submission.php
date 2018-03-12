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

$projectName="";
$projectDescription="";
$companyName="";
$companyLocation="";
$companyURL="";

$siteURL="";
$trelloLink="";
$gitLink="";

$name="";
$email="";
$phone="";

//check if the form has been submitted
if(!empty($_POST)) {

    if(isset($_POST['projectName'])){
        $projectName=$_POST['projectName'];
    }

    if(isset($_POST['projectDescription'])){
        $projectDescription=$_POST['projectDescription'];
    }

    if(isset($_POST['companyName'])){
        $companyName=$_POST['companyName'];
    }

    if(isset($_POST[['companyLocation']])){
        $companyLocation=$_POST['companyLocation'];
    }

    if(isset($_POST[['companyURL']])){
        $companyURL=$_POST['companyURL'];
    }

    if(isset($_POST[['siteURL']])){
        $siteURL=$_POST['siteURL'];
    }

    if(isset($_POST[['trelloLink']])){
        $trelloLink=$_POST['trelloLink'];
    }

    if(isset($_POST[['gitLink']])){
        $gitLink=$_POST['gitLink'];
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

    $sql="INSERT INTO 
      VALUES";
//prepare statement
    $statement = $dbh->prepare($sql);
//Bind parameters
    $statement->bindParam('projectName',$projectName, PDO::PARAM_STR);


}