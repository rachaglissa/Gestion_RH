<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table(name="tache")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\TacheRepository")
 */
class Tache
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
     * @ORM\Column(name="titreT", type="string", length=255)
     */
    private $titreT;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebutT", type="datetime")
     */
    private $datedebutT;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinT", type="datetime")
     */
    private $datefinT;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionT", type="string", length=255)
     */
    private $descriptionT;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatTache", type="string", length=255)
     */
    private $etatTache;

    /**
     * @var float
     *
     * @ORM\Column(name="taux_avancement", type="float")
     */
    private $tauxAvancement;

    /**
     * @ORM\ManyToOne(targetEntity="Module", inversedBy="tache")
     */
    private $module;

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
     * Set titreT
     *
     * @param string $titreT
     *
     * @return Tache
     */
    public function setTitreT($titreT)
    {
        $this->titreT = $titreT;

        return $this;
    }

    /**
     * Get titreT
     *
     * @return string
     */
    public function getTitreT()
    {
        return $this->titreT;
    }

    /**
     * Set datedebutT
     *
     * @param \DateTime $datedebutT
     *
     * @return Tache
     */
    public function setDatedebutT($datedebutT)
    {
        $this->datedebutT = $datedebutT;

        return $this;
    }

    /**
     * Get datedebutT
     *
     * @return \DateTime
     */
    public function getDatedebutT()
    {
        return $this->datedebutT;
    }

    /**
     * Set datefinT
     *
     * @param \DateTime $datefinT
     *
     * @return Tache
     */
    public function setDatefinT($datefinT)
    {
        $this->datefinT = $datefinT;

        return $this;
    }

    /**
     * Get datefinT
     *
     * @return \DateTime
     */
    public function getDatefinT()
    {
        return $this->datefinT;
    }

    /**
     * Set descriptionT
     *
     * @param string $descriptionT
     *
     * @return Tache
     */
    public function setDescriptionT($descriptionT)
    {
        $this->descriptionT = $descriptionT;

        return $this;
    }

    /**
     * Get descriptionT
     *
     * @return string
     */
    public function getDescriptionT()
    {
        return $this->descriptionT;
    }

    /**
     * Set etatTache
     *
     * @param string $etatTache
     *
     * @return Tache
     */
    public function setEtatTache($etatTache)
    {
        $this->etatTache = $etatTache;

        return $this;
    }

    /**
     * Get etatTache
     *
     * @return string
     */
    public function getEtatTache()
    {
        return $this->etatTache;
    }

    /**
     * Set tauxAvancement
     *
     * @param integer $tauxAvancement
     *
     * @return Tache
     */
    public function setTauxAvancement($tauxAvancement)
    {
        $this->tauxAvancement = $tauxAvancement;

        return $this;
    }

    /**
     * Get tauxAvancement
     *
     * @return float
     */
    public function getTauxAvancement()
    {
        return $this->tauxAvancement;
    }
     public function getModule()
    {
        return $this->module;
    }

      public function setModule(Module $module)
    {
        return $this->module= $module;
    }
}

