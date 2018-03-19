<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 2/15/2018
 * Time: 1:50 PM
 */

/**
 * @return PDO|void
 * connects to the database
 */
function connect()

{


    try {
        //instantiate db object

        $dbh= new PDO(DB_DSN, DB_USER
            , DB_PASS);

    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
    return $dbh;

}