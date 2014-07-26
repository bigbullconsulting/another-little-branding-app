<?php

namespace Demo\BrandingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Branding
 *
 * @ORM\Table(name="branding")
 * @ORM\Entity
 */
class Branding
{
    /**
     * @var string
     *
     * @ORM\Column(name="host_key", type="string", length=40, nullable=true)
     */
    private $hostKey;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url_logo_image", type="string", length=200, nullable=true)
     */
    private $urlLogoImage;

    /**
     * @var string
     *
     * @ORM\Column(name="url_home", type="string", length=100, nullable=true)
     */
    private $urlHome;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set hostKey
     *
     * @param string $hostKey
     * @return Branding
     */
    public function setHostKey($hostKey)
    {
        $this->hostKey = $hostKey;

        return $this;
    }

    /**
     * Get hostKey
     *
     * @return string 
     */
    public function getHostKey()
    {
        return $this->hostKey;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Branding
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set urlLogoImage
     *
     * @param string $urlLogoImage
     * @return Branding
     */
    public function setUrlLogoImage($urlLogoImage)
    {
        $this->urlLogoImage = $urlLogoImage;

        return $this;
    }

    /**
     * Get urlLogoImage
     *
     * @return string 
     */
    public function getUrlLogoImage()
    {
        return $this->urlLogoImage;
    }

    /**
     * Set urlHome
     *
     * @param string $urlHome
     * @return Branding
     */
    public function setUrlHome($urlHome)
    {
        $this->urlHome = $urlHome;

        return $this;
    }

    /**
     * Get urlHome
     *
     * @return string 
     */
    public function getUrlHome()
    {
        return $this->urlHome;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Branding
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function isActive()
    {
        return $this->active;
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
}
