<?php

namespace WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=45, nullable=true)
     */
    private $service;



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
     * Set service
     *
     * @param string $service
     *
     * @return Service
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    public function __toString(){
      return (string) $this->service;
    }
}
