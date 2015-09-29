<?php

namespace FormerStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FormerStudentsBundle\Entity\Chapitre;

/**
 * Ressource
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FormerStudentsBundle\Entity\RessourceRepository")
 */
class Ressource
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
    * @ORM\ManyToOne(targetEntity = "FormerStudentsBundle\Entity\Chapitre", inversedBy="ressources", cascade={"persist"})
    */
    private $chapitre;

    public function __construct()
    {
        $this->chapitre = new Chapitre();
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
     * Set title
     *
     * @param string $title
     * @return Ressource
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Ressource
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function setChapitre(Chapitre $chapitre){
        $this->chapitre = $chapitre;
        return $chapitre;
    }

    public function getChapitre(){
        return $this->chapitre;
    }
}
