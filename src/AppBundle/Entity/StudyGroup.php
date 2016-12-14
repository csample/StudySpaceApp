<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudyGroup
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudyGroupRepository")
 */
class StudyGroup
{
   /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_created", type= "datetime")
     */
    private $dateCreated;

    /**
     * @var string
     * @ORM\Column(name="google_api_key", type="text", length=100)
     */
    private $googleApiKey;

    /**
     * @var bool
     * @ORM\Column(name="indoor", type="boolean")
     */
    private $indoor;

    /**
     * @var bool
     * @ORM\Column(name="outdoor", type="boolean")
     */
    private $outdoor;

    /**
     * @var int
     * @ORM\Column(name="limit_cap", type="integer", length=20)
     */
    private $limitCap;

    /**
     * @var int
     * @ORM\Column(name="course_id", type="integer", length=11)
     */
    private $courseId;

     /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float")
     */
    private $lng;

     /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float")
     */
    private $lat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return StudyGroup
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return StudyGroup
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set googleApiKey
     *
     * @param string $googleApiKey
     *
     * @return StudyGroup
     */
    public function setGoogleApiKey($googleApiKey)
    {
        $this->googleApiKey = $googleApiKey;

        return $this;
    }

    /**
     * Get googleApiKey
     *
     * @return string
     */
    public function getGoogleApiKey()
    {
        return $this->googleApiKey;
    }

    /**
     * Set indoor
     *
     * @param boolean $indoor
     *
     * @return StudyGroup
     */
    public function setIndoor($indoor)
    {
        $this->indoor = $indoor;

        return $this;
    }

    /**
     * Get indoor
     *
     * @return bool
     */
    public function getIndoor()
    {
        return $this->indoor;
    }

    /**
     * Set outdoor
     *
     * @param boolean $outdoor
     *
     * @return StudyGroup
     */
    public function setOutdoor($outdoor)
    {
        $this->outdoor = $outdoor;

        return $this;
    }

    /**
     * Get outdoor
     *
     * @return bool
     */
    public function getOutdoor()
    {
        return $this->outdoor;
    }

    /**
     * Set limitCap
     *
     * @param integer $limitCap
     *
     * @return StudyGroup
     */
    public function setLimitCap($limitCap)
    {
        $this->limitCap = $limitCap;

        return $this;
    }

    /**
     * Get limitCap
     *
     * @return int
     */
    public function getLimitCap()
    {
        return $this->limitCap;
    }

    /**
     * Set courseId
     *
     * @param integer $courseId
     *
     * @return StudyGroup
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return int
     */
    public function getCourseId()
    {
        return $this->courseId;
    }
     /**
     * Set lng
     *
     * @param float $lng
     *
     * @return StudyGroup
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

     /**
     * Set lat
     *
     * @param float $lat
     *
     * @return StudyGroup
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    public function toArray() {
        return [
          'id' => $this->getId(),
          'title' => $this->getTitle(),
          'date_created' => $this->getDateCreated(),
          'google_api_key' => $this->getGoogleApiKey(),
          'indoor' => $this->getIndoor(),
          'outdoor' => $this->getOutdoor(),
          'limit_cap' => $this->getLimitCap(),
          'course_id' => $this->getCourseId(),
          'lat' => $this->getLat(),
          'lng' => $this->getLng()
        ];
    }
}

