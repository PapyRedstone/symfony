<?php

namespace WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeplacementJour
 *
 * @ORM\Table(name="deplacement_jour", indexes={@ORM\Index(name="fk_deplacement_jour_type_deplacement1_idx", columns={"type_deplacement_id"}), @ORM\Index(name="fk_deplacement_jour_deplacement1_idx", columns={"deplacement_id"})})
 * @ORM\Entity
 */
class DeplacementJour
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
     * @var float
     *
     * @ORM\Column(name="nb_km", type="float", precision=10, scale=0, nullable=true)
     */
    private $nbKm;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="jour", type="integer", nullable=true)
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

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
     * @var \WebServiceBundle\Entity\Deplacement
     *
     * @ORM\ManyToOne(targetEntity="WebServiceBundle\Entity\Deplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deplacement_id", referencedColumnName="id")
     * })
     */
    private $deplacement;

    /**
     * @var \WebServiceBundle\Entity\TypeDeplacement
     *
     * @ORM\ManyToOne(targetEntity="WebServiceBundle\Entity\TypeDeplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_deplacement_id", referencedColumnName="id")
     * })
     */
    private $typeDeplacement;



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
     * Set nbKm
     *
     * @param float $nbKm
     *
     * @return DeplacementJour
     */
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;

        return $this;
    }

    /**
     * Get nbKm
     *
     * @return float
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return DeplacementJour
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set jour
     *
     * @param integer $jour
     *
     * @return DeplacementJour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return integer
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DeplacementJour
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return DeplacementJour
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
     * @return DeplacementJour
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
     * Set deplacement
     *
     * @param \WebServiceBundle\Entity\Deplacement $deplacement
     *
     * @return DeplacementJour
     */
    public function setDeplacement(\WebServiceBundle\Entity\Deplacement $deplacement = null)
    {
        $this->deplacement = $deplacement;

        return $this;
    }

    /**
     * Get deplacement
     *
     * @return \WebServiceBundle\Entity\Deplacement
     */
    public function getDeplacement()
    {
        return $this->deplacement;
    }

    /**
     * Set typeDeplacement
     *
     * @param \WebServiceBundle\Entity\TypeDeplacement $typeDeplacement
     *
     * @return DeplacementJour
     */
    public function setTypeDeplacement(\WebServiceBundle\Entity\TypeDeplacement $typeDeplacement = null)
    {
        $this->typeDeplacement = $typeDeplacement;

        return $this;
    }

    /**
     * Get typeDeplacement
     *
     * @return \WebServiceBundle\Entity\TypeDeplacement
     */
    public function getTypeDeplacement()
    {
        return $this->typeDeplacement;
    }
}
