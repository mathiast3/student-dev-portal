<?php
/**
 * Created by PhpStorm.
 * User: Mathias
 * Date: 3/13/2018
 * Time: 2:03 PM
 */

class project
{
    private $projectName;
    private $projectDescription;
    private $companyName;
    private $companyLocation;
    private $companyURL;
    private $siteURL;
    private $trelloLink;
    private $gitLink;
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


    /**
     * Project constructor.
     * @param string $projectName
     * @param string $projectDescription
     * @param string $companyName
     * @param string $companyLocation
     * @param string $companyURL
     * @param string $siteURL
     * @param string $trelloLink
     * @param string $gitLink
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param string $status
     */
    public function __construct($projectName, $projectDescription, $companyName, $companyLocation, $companyURL, $siteURL, $trelloLink, $gitLink, $name, $email, $phone, $status)
    {
        $this->projectName = $projectName;
        $this->projectDescription = $projectDescription;
        $this->companyName = $companyName;
        $this->companyLocation = $companyLocation;
        $this->companyURL = $companyURL;
        $this->siteURL = $siteURL;
        $this->trelloLink = $trelloLink;
        $this->gitLink = $gitLink;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->status = $status;
    }


}