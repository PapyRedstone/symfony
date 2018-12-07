<?php

namespace WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_type_user_idx", columns={"type_user_id"}), @ORM\Index(name="fk_user_societe1_idx", columns={"societe_id"}), @ORM\Index(name="fk_user_service1_idx", columns={"service_id"}), @ORM\Index(name="fk_user_ville1_idx", columns={"ville_id"})})
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var float
     *
     * @ORM\Column(name="distance_init", type="float", precision=10, scale=0, nullable=true)
     */
    private $distanceInit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \WebServiceBundle\Entity\Service
     *
     * @ORM\ManyToOne(targetEntity="WebServiceBundle\Entity\Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
     */
    private $service;

    /**
     * @var \WebServiceBundle\Entity\Societe
     *
     * @ORM\ManyToOne(targetEntity="WebServiceBundle\Entity\Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="societe_id", referencedColumnName="id")
     * })
     */
    private $societe;

    /**
     * @var \WebServiceBundle\Entity\TypeUser
     *
     * @ORM\ManyToOne(targetEntity="WebServiceBundle\Entity\TypeUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_user_id", referencedColumnName="id")
     * })
     */
    private $typeUser;

    /**
     * @var \WebServiceBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="WebServiceBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     * })
     */
    private $ville;



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
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
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
     * Set distanceInit
     *
     * @param float $distanceInit
     *
     * @return User
     */
    public function setDistanceInit($distanceInit)
    {
        $this->distanceInit = $distanceInit;

        return $this;
    }

    /**
     * Get distanceInit
     *
     * @return float
     */
    public function getDistanceInit()
    {
        return $this->distanceInit;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return User
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return User
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set service
     *
     * @param \WebServiceBundle\Entity\Service $service
     *
     * @return User
     */
    public function setService(\WebServiceBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \WebServiceBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set societe
     *
     * @param \WebServiceBundle\Entity\Societe $societe
     *
     * @return User
     */
    public function setSociete(\WebServiceBundle\Entity\Societe $societe = null)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return \WebServiceBundle\Entity\Societe
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set typeUser
     *
     * @param \WebServiceBundle\Entity\TypeUser $typeUser
     *
     * @return User
     */
    public function setTypeUser(\WebServiceBundle\Entity\TypeUser $typeUser = null)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get typeUser
     *
     * @return \WebServiceBundle\Entity\TypeUser
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * Set ville
     *
     * @param \WebServiceBundle\Entity\Ville $ville
     *
     * @return User
     */
    public function setVille(\WebServiceBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \WebServiceBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }
}
