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

function getProjects()
{
    global $dbh;

    //1. Define the query
    $sql = "SELECT * FROM members ORDER BY last, first";

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

function insertProject($title, $description, $clientCompany, $clientLocation, $clientSite, $status, $trello, $projectURL, $projectLogin, $projectPass)
{
    global $dbh;

    //1. Define the query
    $sql = "INSERT INTO projects VALUES (:title, :description, :clientCompany, :clientLocation, :clientSite, :status, :trello, :projectURL, :projectLogin, :projectPass)";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters
    $statement->bindParam(':title', $title, PDO::PARAM_STR);
    $statement->bindParam(':decription', $description, PDO::PARAM_STR);
    $statement->bindParam(':clientCompany', $clientCompany, PDO::PARAM_STR);
    $statement->bindParam(':clientLocation', $clientLocation, PDO::PARAM_STR);
    $statement->bindParam(':clientSite', $clientSite, PDO::PARAM_STR);
    $statement->bindParam(':status', $status, PDO::PARAM_STR);
    $statement->bindParam(':trello', $trello, PDO::PARAM_STR);
    $statement->bindParam(':projectURL', $projectURL, PDO::PARAM_STR);
    $statement->bindParam(':projectLogin', $projectLogin, PDO::PARAM_STR);
    $statement->bindParam(':projectPass', $projectPass, PDO::PARAM_STR);
    //4. Execute the query
    $result = $statement->execute();

    //5. Return the result
    return $result;
}