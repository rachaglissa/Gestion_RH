<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\ModuleRepository")
 */
class Module
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
     * @ORM\Column(name="titremodule", type="string", length=255)
     */
    private $titremodule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutM", type="datetime")
     */
    private $datedebutM;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinM", type="datetime")
     */
    private $datefinM;
   
    /**
     * @ORM\OneToMany(targetEntity="Tache", mappedBy="module")
     */
    private $tache;
    
    /**
     * @ORM\ManyToOne(targetEntity="Projet")
     */
    private $projet;
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
     * Set titremodule
     *
     * @param string $titremodule
     *
     * @return Module
     */
    public function setTitremodule($titremodule)
    {
        $this->titremodule = $titremodule;

        return $this;
    }

    /**
     * Get titremodule
     *
     * @return string
     */
    public function getTitremodule()
    {
        return $this->titremodule;
    }

    /**
     * Set dateM
     *
     * @param \DateTime $dateM
     *
     * @return Module
     */
    public function setDatedebutM($datedebutM)
    {
        $this->datedebutM = $datedebutM;

        return $this;
    }

    /**
     * Get dateM
     *
     * @return \DateTime
     */
    public function getDatedebutM()
    {
        return $this->datedebutM;
    }

    /**
     * Set datefinM
     *
     * @param \DateTime $datefinM
     *
     * @return Module
     */
    public function setDatefinM($datefinM)
    {
        $this->datefinM = $datefinM;

        return $this;
    }

    /**
     * Get datefinM
     *
     * @return \DateTime
     */
    public function getDatefinM()
    {
        return $this->datefinM;
    }

       public function getTache()
    {
        return $this->tache;
    }
    

   /**
    * @return Projet
    */
      public function getProjet()
    {
        return $this->projet;
    }

     public function setProjet(Projet $projet)
    {
        return $this->projet= $projet;
    }


   
}

