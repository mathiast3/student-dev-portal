<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/13/2018
 * Time: 2:03 PM
 */

class Project
{
    private $projectName;
    private $projectDescription;
    private $companyName;
    private $companyLocation;
    private $companyURL;
    private $siteURL;
    private $trelloLink;
    private $gitLink;
    private $username;

    /**
     * project constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    private $password;
    private $status;

    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
    }

    /**
     * @return string
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * @param string $projectDescription
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string
     */
    public function getCompanyLocation()
    {
        return $this->companyLocation;
    }

    /**
     * @param string $companyLocation
     */
    public function setCompanyLocation($companyLocation)
    {
        $this->companyLocation = $companyLocation;
    }

    /**
     * @return string
     */
    public function getCompanyURL()
    {
        return $this->companyURL;
    }

    /**
     * @param string $companyURL
     */
    public function setCompanyURL($companyURL)
    {
        $this->companyURL = $companyURL;
    }

    /**
     * @return string
     */
    public function getSiteURL()
    {
        return $this->siteURL;
    }

    /**
     * @param string $siteURL
     */
    public function setSiteURL($siteURL)
    {
        $this->siteURL = $siteURL;
    }

    /**
     * @return string
     */
    public function getTrelloLink()
    {
        return $this->trelloLink;
    }

    /**
     * @param string $trelloLink
     */
    public function setTrelloLink($trelloLink)
    {
        $this->trelloLink = $trelloLink;
    }

    /**
     * @return string
     */
    public function getGitLink()
    {
        return $this->gitLink;
    }

    /**
     * @param string $gitLink
     */
    public function setGitLink($gitLink)
    {
        $this->gitLink = $gitLink;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }





}