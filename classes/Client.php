<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/14/2018
 * Time: 10:38 PM
 */

class Client
{
    private $_name;
    private $_email;
    private $_phone;

    /**
     * Client constructor.
     * @param string $name
     * @param string $email
     * @param string $phone
     */
    public function __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }


}