<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\DemandeRepository")
 */
class Demande
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
     * @var int
     *
     * @ORM\Column(name="numD", type="integer")
     */
    private $numD;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateD", type="datetime")
     */
    private $dateD;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedeb", type="datetime")
     */
    private $datedeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $datefin;

     /**
     * @ORM\ManyToOne(targetEntity="Employe")
     */
    private $employe;

   /**
    * @var string
    *
    * @ORM\Column(name="type_demande", type="string", length=255)
    */
    private  $type_demande;


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
     * Set numD
     *
     * @param integer $numD
     *
     * @return Demande
     */
    public function setNumD($numD)
    {
        $this->numD = $numD;

        return $this;
    }

    /**
     * Get numD
     *
     * @return int
     */
    public function getNumD()
    {
        return $this->numD;
    }

    /**
     * Set dateD
     *
     * @param \DateTime $dateD
     *
     * @return Demande
     */
    public function setDateD($dateD)
    {
        $this->dateD = $dateD;

        return $this;
    }

    /**
     * Get dateD
     *
     * @return \DateTime
     */
    public function getDateD()
    {
        return $this->dateD;
    }

    /**
     * Set datedeb
     *
     * @param \DateTime $datedeb
     *
     * @return Demande
     */
    public function setDatedeb($datedeb)
    {
        $this->datedeb = $datedeb;

        return $this;
    }

    /**
     * Get datedeb
     *
     * @return \DateTime
     */
    public function getDatedeb()
    {
        return $this->datedeb;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Demande
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }
    

    public function getEmploye()
    {
        return $this->employe;
    }
 
    public function setEmploye(Employe $employe)
    {
        return $this->employe= $employe;
    }

  public function getTypeDemande()
    {
        return $this->type_demande;
    }


   public function setTypeDemande( $type_demande)
    {
        return $this->type_demande=$type_demande;
    }

}

