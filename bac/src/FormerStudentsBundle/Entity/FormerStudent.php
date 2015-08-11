<?php

namespace FormerStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * FormerStudent
 *
 *@ORM\Table
 *@ORM\Entity(repositoryClass="FormerStudentsBundle\Entity\FormerStudentRepository")
 */
class FormerStudent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="civility", type="string", length=255)
     */
    private $civility;

    /**
     * @var string
     *
     * @ORM\Column(name="studySector", type="string", length=255)
     */
    private $studySector;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var int
     *
     * @ORM\Column(name="graduationYear", type="integer")
     */
    private $graduationYear;

    /**
     *@ORM\ManyToMany(targetEntity = "FormerStudentsBundle\Entity\University", cascade={"persist"})
     */
    private $universities;



    public function __construct()
    {
        $this->universities = new ArrayCollection();

    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return FormerStudent
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return FormerStudent
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    public function getCivility()
    {
        return $this->civility;
    }

    public function setCivility($civility)
    {
        $this->civility = $civility;
        return $this;
    }

    public function getStudySector(){
        return $this->studySector;
    }

    public function setStudySector($studySector){
        $this->studySector = $studySector;
        return $this;
    }
    /**
     * Set mail
     *
     * @param string $mail
     * @return FormerStudent
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set graduationYear
     *
     * @param string $graduationYear
     * @return FormerStudent
     */
    public function setGraduationYear($graduationYear)
    {
        $this->graduationYear = $graduationYear;

        return $this;
    }

    /**
     * Get graduationYear
     *
     * @return string 
     */
    public function getGraduationYear()
    {
        return $this->graduationYear;
    }

    /**
     * Add university
     *
     * @param string $university
     * @return FormerStudent
     */
    public function addUniversity(University $university)
    {
        $this->universities[] = $$university;
        return $this;
    }

    /**
    * Remoce $university
    * @param \FormerStudentBundle\Entity\University
    */
    public function removeUniversity(University $university){
        $this->universities->removeElement($university);
    }


     /* Get universities
     *
     * @return string 
     */
    public function getUniversities()
    {
        return $this->universities;
    }
}
