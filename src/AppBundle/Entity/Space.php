<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Space
 *
 * @ORM\Table(name="spaces")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpaceRepository")
 */
class Space
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
     * @var text
     *
     * @ORM\Column(name="name", type="text", length=100)
     */
    private $name;

     /**
     * @var text
     *
     * @ORM\Column(name="description", type="text", length=255)
     */
    private $description;

    /**
     * @var text
     *
     * @ORM\Column(name="url", type="text", length=255)
     */
    private $url;

    /**
     * @var text
     *
     * @ORM\Column(name="address", type="text", length=255)
     */
    private $address;

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
     * Set name
     *
     * @param text $name
     *
     * @return Space
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return text
     */
    public function getName()
    {
        return $this->name;
    }

     /**
     * Set description
     *
     * @param text $description
     *
     * @return Space
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

     /**
     * Set `
     *
     * @param text $url
     *
     * @return Space
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return text
     */
    public function getUrl()
    {
        return $this->url;
    }

     /**
     * Set address
     *
     * @param text $address
     *
     * @return Space
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return text
     */
    public function getAddress()
    {
        return $this->address;
    }

     /**
     * Set lng
     *
     * @param float $lng
     *
     * @return Space
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
     * @return Space
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

    public function toArray()
    {
        return [
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'url' => $this->getUrl(),
            'address' => $this->getAddress(),
            'position' => [ 'lng' => $this->getLng(), 'lat' => $this->getLat()]
        ];
    }
}
