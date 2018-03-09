<?php
/*
  CREATE TABLE projects (
    projectID int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(40),
    description VARCHAR(300),
    clientCompany VARCHAR(50),
    clientLocation VARCHAR(50),
    clientSite VARCHAR(100),
    status VARCHAR(30)
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

 */
