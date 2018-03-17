<?php
/*
  CREATE TABLE projects (
    projectID int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(40),
    description VARCHAR(300),
    clientCompany VARCHAR(50),
    clientLocation VARCHAR(50),
    clientSite VARCHAR(100),
    status VARCHAR(30),
    trello VARCHAR(100),
    projectURL VARCHAR(100),
    projectLogin VARCHAR(100),
    projectPass VARCHAR(100)

    );
 *
create table clients (
    clientID int PRIMARY KEY AUTO_INCREMENT,
    clientName VARCHAR(50),
    clientEmail VARCHAR(50),
    clientPhone VARCHAR(50),
    projectID int,
    FOREIGN KEY(projectID) REFERENCES projects(projectID)
    );
   *
create table developers (
    classID int PRIMARY KEY AUTO_INCREMENT,
    className VARCHAR(50),
    instructor VARCHAR(50),
    quarter VARCHAR(50),
    instructorNotes VARCHAR(300),
    projectID INT,
    FOREIGN KEY(projectID) REFERENCES projects(projectID)
    );
 */

/*
 * Author: Ashton Knox
 * Date: 3/14/2018
 * Database functions
 */

require "/home/mtaylorg/config.php";

/**
 * create a connection object
 */
function connect()
{
    try {
        //Instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME,
            DB_PASSWORD );
        //echo "Connected to database!!!";
        return $dbh;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
}

/**
 * @return array associative array of all projects and their fields
 */
function getProjects()
{
    global $dbh;
    $dbh=connect();

    //1. Define the query
    $sql = "SELECT * FROM projects ORDER BY last, first";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters

    //4. Execute the query
    $statement->execute();

    //5. Get the results
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($result);
    return $result;
}

/**
 * @param $title
 * @param $description
 * @param $clientCompany
 * @param $clientLocation
 * @param $clientSite
 * @param $status
 * @param $trello
 * @param $projectURL
 * @param $projectLogin
 * @param $projectPass
 * @return bool true if successfully addec
 */
function insertProject($title, $description, $clientCompany, $clientLocation, $clientSite, $status, $trello, $projectURL, $projectLogin, $projectPass)
{
    //global $dbh;
    $dbh=connect();

    //1. Define the query
    $sql = "INSERT INTO projects(title, description, clientCompany, clientLocation, clientSite, status, trello, projectURL, projectLogin, projectPass) VALUES (:title, :description, :clientCompany, :clientLocation, :clientSite, :status, :trello, :projectURL, :projectLogin, :projectPass)";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters
    $statement->bindParam(':title', $title, PDO::PARAM_STR);
    $statement->bindParam(':description', $description, PDO::PARAM_STR);
    $statement->bindParam(':clientCompany', $clientCompany, PDO::PARAM_STR);
    $statement->bindParam(':clientLocation', $clientLocation, PDO::PARAM_STR);
    $statement->bindParam(':clientSite', $clientSite, PDO::PARAM_STR);
    $statement->bindParam(':status', $status, PDO::PARAM_STR);
    $statement->bindParam(':trello', $trello, PDO::PARAM_STR);
    $statement->bindParam(':projectURL', $projectURL, PDO::PARAM_STR);
    $statement->bindParam(':projectLogin', $projectLogin, PDO::PARAM_STR);
    $statement->bindParam(':projectPass', $projectPass, PDO::PARAM_STR);
    //4. Execute the query
    $statement->execute();


}

/**
 * @return array all clients and their fields
 */
function getClients()
{
    global $dbh;
    $dbh=connect();

    //1. Define the query
    $sql = "SELECT * FROM clients ORDER BY last, first";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters

    //4. Execute the query
    $statement->execute();

    //5. Get the results
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($result);
    return $result;
}

/**
 * @param $clientName
 * @param $clientEmail
 * @param $clientPhone
 * @param $projectID
 * @return bool true if add succeeds
 */
function insertClient($clientName, $clientEmail, $clientPhone, $projectID)
{
    global $dbh;
    $dbh=connect();

    //1. Define the query
    $sql = "INSERT INTO clients VALUES (:clientName, :clientEmail, :clientPhone, :projectID)";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters
    $statement->bindParam(':clientName', $clientName, PDO::PARAM_STR);
    $statement->bindParam(':clientEmail', $clientEmail, PDO::PARAM_STR);
    $statement->bindParam(':clientPhone', $clientPhone, PDO::PARAM_STR);
    $statement->bindParam(':projectID', $projectID, PDO::PARAM_STR);

    //4. Execute the query
    $result = $statement->execute();

    //5. Return the result
    return $result;
}

/**
 * @return array all developers and their fields
 */
function getDevelopers()
{
    global $dbh;
    $dbh=connect();

    //1. Define the query
    $sql = "SELECT * FROM developers ORDER BY last, first";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters

    //4. Execute the query
    $statement->execute();

    //5. Get the results
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($result);
    return $result;
}

/**
 * @param $className
 * @param $instructor
 * @param $quarter
 * @param $instructorNotes
 * @param $projectID
 * @return bool true if the add succeeds
 */
function insertDevelopers($className, $instructor, $quarter, $instructorNotes, $projectID)
{
    global $dbh;
    $dbh=connect();

    //1. Define the query
    $sql = "INSERT INTO developers VALUES (:className, :instructor, :quarter, :instructorNotes, :projectID)";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters
    $statement->bindParam(':className', $className, PDO::PARAM_STR);
    $statement->bindParam(':instructor', $instructor, PDO::PARAM_STR);
    $statement->bindParam(':quarter', $quarter, PDO::PARAM_STR);
    $statement->bindParam(':instructorNotes', $instructorNotes, PDO::PARAM_STR);
    $statement->bindParam(':projectID', $projectID, PDO::PARAM_STR);

    //4. Execute the query
    $result = $statement->execute();

    //5. Return the result
    return $result;
}