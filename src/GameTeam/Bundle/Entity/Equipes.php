<?php

namespace GameTeam\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipes
 */
class Equipes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $membres;


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
     * @return Equipes
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
     * Set membres
     *
     * @param string $membres
     * @return Equipes
     */
    public function setMembres($membres)
    {
        $this->membres = $membres;

        return $this;
    }

    /**
     * Get membres
     *
     * @return string 
     */
    public function getMembres()
    {
        return $this->membres;
    }
}
