<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/17/2018
 * Time: 6:14 PM
 */


/**
 * @param $url the url to validate
 * @return bool returns true if URL is valid
 */
function validURL($url){
    if (filter_var($url, FILTER_VALIDATE_URL) !== false)
        return true;
    else
        return false;
}

/**
 * @param $email the email to be validated
 * @return bool true if email validates
 */
function validEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
        return true;
    else
        return false;
}

/**
 * @param $phone The phone to be validated
 * @return bool true if phone validates
 */
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