<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/15/2018
 * Time: 1:47 PM
 */

class Developers extends Client
{
        private $_instructor;
        private $_quarter;
        private $_notes;


    /**
     * @return mixed
     */
    public function getInstructor()
    {
        return $this->_instructor;
    }

    /**
     * @param mixed $instructor
     */
    public function setInstructor($instructor)
    {
        $this->_instructor = $instructor;
    }

    /**
     * @return mixed
     */
    public function getQuarter()
    {
        return $this->_quarter;
    }

    /**
     * @param mixed $quarter
     */
    public function setQuarter($quarter)
    {
        $this->_quarter = $quarter;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->_notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->_notes = $notes;
    }



}