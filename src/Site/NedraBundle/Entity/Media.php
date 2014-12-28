<?php

namespace Site\NedraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity
 */
class Media
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
     * @ORM\Column(name="photos", type="string", length=255, nullable=true)
     */
    private $photos;

    /**
     * @var string
     *
     * @ORM\Column(name="videos", type="string", length=255, nullable=true)
     */
    private $videos;

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
     * @var \Introduction
     *
     * @ORM\ManyToOne(targetEntity="Introduction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="introduction_id", referencedColumnName="id")
     * })
     */
    private $introduction;

    /**
     * @var \Programme
     *
     * @ORM\ManyToOne(targetEntity="Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="programmes_id", referencedColumnName="id")
     * })
     */
    private $programmes;

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
     * @var \News
     *
     * @ORM\ManyToOne(targetEntity="News")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="news_id", referencedColumnName="id")
     * })
     */
    private $news;



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
     * Set photos
     *
     * @param string $photos
     * @return Media
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    
        return $this;
    }

    /**
     * Get photos
     *
     * @return string 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set videos
     *
     * @param string $videos
     * @return Media
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;
    
        return $this;
    }

    /**
     * Get videos
     *
     * @return string 
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Set coaching
     *
     * @param \Site\NedraBundle\Entity\Coaching $coaching
     * @return Media
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
     * Set introduction
     *
     * @param \Site\NedraBundle\Entity\Introduction $introduction
     * @return Media
     */
    public function setIntroduction(\Site\NedraBundle\Entity\Introduction $introduction = null)
    {
        $this->introduction = $introduction;
    
        return $this;
    }

    /**
     * Get introduction
     *
     * @return \Site\NedraBundle\Entity\Introduction 
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Set programmes
     *
     * @param \Site\NedraBundle\Entity\Programme $programmes
     * @return Media
     */
    public function setProgrammes(\Site\NedraBundle\Entity\Programme $programmes = null)
    {
        $this->programmes = $programmes;
    
        return $this;
    }

    /**
     * Get programmes
     *
     * @return \Site\NedraBundle\Entity\Programme 
     */
    public function getProgrammes()
    {
        return $this->programmes;
    }

    /**
     * Set services
     *
     * @param \Site\NedraBundle\Entity\Services $services
     * @return Media
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

    /**
     * Set news
     *
     * @param \Site\NedraBundle\Entity\News $news
     * @return Media
     */
    public function setNews(\Site\NedraBundle\Entity\News $news = null)
    {
        $this->news = $news;
    
        return $this;
    }

    /**
     * Get news
     *
     * @return \Site\NedraBundle\Entity\News 
     */
    public function getNews()
    {
        return $this->news;
    }
}