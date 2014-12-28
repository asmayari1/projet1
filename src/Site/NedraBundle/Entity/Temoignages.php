<?php

namespace Site\NedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temoignages
 *
 * @ORM\Table(name="temoignages")
 * @ORM\Entity
 */
class Temoignages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=255, nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @var \Coaching
     *
     * @ORM\ManyToOne(targetEntity="Coaching")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="coaching_id", referencedColumnName="id")
     * })
     */
    private $coaching;

    /**
     * @var \Services
     *
     * @ORM\ManyToOne(targetEntity="Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="services_id", referencedColumnName="id")
     * })
     */
    private $services;



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
     * Set nom
     *
     * @param string $nom
     * @return Temoignages
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Temoignages
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Temoignages
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Temoignages
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set profession
     *
     * @param string $profession
     * @return Temoignages
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    
        return $this;
    }

    /**
     * Get profession
     *
     * @return string 
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set coaching
     *
     * @param \Site\NedraBundle\Entity\Coaching $coaching
     * @return Temoignages
     */
    public function setCoaching(\Site\NedraBundle\Entity\Coaching $coaching = null)
    {
        $this->coaching = $coaching;
    
        return $this;
    }

    /**
     * Get coaching
     *
     * @return \Site\NedraBundle\Entity\Coaching 
     */
    public function getCoaching()
    {
        return $this->coaching;
    }

    /**
     * Set services
     *
     * @param \Site\NedraBundle\Entity\Services $services
     * @return Temoignages
     */
    public function setServices(\Site\NedraBundle\Entity\Services $services = null)
    {
        $this->services = $services;
    
        return $this;
    }

    /**
     * Get services
     *
     * @return \Site\NedraBundle\Entity\Services 
     */
    public function getServices()
    {
        return $this->services;
    }
}