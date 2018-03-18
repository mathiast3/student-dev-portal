<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/17/2018
 * Time: 6:14 PM
 */



//validate URL
function validURL($url){
    if (filter_var($url, FILTER_VALIDATE_URL) !== false)
        return true;
    else
        return false;
}

function validEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
        return true;
    else
        return false;
}

function validPhone($phone){

    trim($phone);
    str_replace("(","",$phone);
    str_replace(")","",$phone);
    str_replace("-","",$phone);
    str_replace(" ","",$phone);

    if(preg_match("/^[0-9]{10}/", $phone)) {
        return true;
    }
    return false;

}