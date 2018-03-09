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
