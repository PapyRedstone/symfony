<?php

/**
 * C'est le fichier de l'entité Societe.
 *
 * @author Lorens BARRAUD, Alexandre FEBVRE
 * @version 1.0
 *
*/

namespace WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe", indexes={@ORM\Index(name="fk_societe_ville1_idx", columns={"ville_id"})})
 * @ORM\Entity(repositoryClass="WebServiceBundle\Repository\SocieteRepository")
 */
class Societe
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
     * @ORM\Column(name="societe", type="string", length=45, nullable=true)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

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
     * Set societe
     *
     * @param string $societe
     *
     * @return Societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Societe
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
     * Set ville
     *
     * @param \WebServiceBundle\Entity\Ville $ville
     *
     * @return Societe
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

    public function __toString() {
      return (string) $this->getSociete();
    }
}
