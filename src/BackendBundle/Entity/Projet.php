<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\ProjetRepository")
 */
class Projet
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
     *
     * @ORM\Column(name="nomprojet", type="string", length=255)
     */
    private $nomprojet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutP", type="datetime")
     */
    private $datedebutP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinP", type="datetime")
     */
    private $datefinP;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

   /**
    * @ORM\ManyToOne(targetEntity="Equipe")
    */
    protected $equipe;


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
     * Set nomprojet
     *
     * @param string $nomprojet
     *
     * @return Projet
     */
    public function setNomprojet($nomprojet)
    {
        $this->nomprojet = $nomprojet;

        return $this;
    }

    /**
     * Get nomprojet
     *
     * @return string
     */
    public function getNomprojet()
    {
        return $this->nomprojet;
    }

    /**
     * Set datedebutP
     *
     * @param \DateTime $datedebutP
     *
     * @return Projet
     */
    public function setDatedebutP($datedebutP)
    {
        $this->datedebutP = $datedebutP;

        return $this;
    }

    /**
     * Get datedebutP
     *
     * @return \DateTime
     */
    public function getDatedebutP()
    {
        return $this->datedebutP;
    }

    /**
     * Set datefinP
     *
     * @param \DateTime $datefinP
     *
     * @return Projet
     */
    public function setDatefinP($datefinP)
    {
        $this->datefinP = $datefinP;

        return $this;
    }

    /**
     * Get datefinP
     *
     * @return \DateTime
     */
    public function getDatefinP()
    {
        return $this->datefinP;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Projet
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
    
    public function setEquipe(Equipe $equipe)
    {
        $this->equipe = $equipe;
        
        return $this;
    }
    
    /**
    * @return Equipe
    */
    public function getEquipe()
    {
       return$this->equipe;
    }
  
}

