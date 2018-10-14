<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\EquipeRepository")
 */
class Equipe
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
     * @ORM\Column(name="numequipe", type="integer")
     */
    private $numequipe;

    /**
     * @var string
     *
     * @ORM\Column(name="nomequipe", type="string", length=255)
     */
    private $nomequipe;
   
   /**
    * @ORM\ManyToOne(targetEntity="ChefEquipe")
    */
    private $chefequipe;

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
     * Set numequipe
     *
     * @param integer $numequipe
     *
     * @return Equipe
     */
    public function setNumequipe($numequipe)
    {
        $this->numequipe = $numequipe;

        return $this;
    }

    /**
     * Get numequipe
     *
     * @return int
     */
    public function getNumequipe()
    {
        return $this->numequipe;
    }

    /**
     * Set nomequipe
     *
     * @param string $nomequipe
     *
     * @return Equipe
     */
    public function setNomequipe($nomequipe)
    {
        $this->nomequipe = $nomequipe;

        return $this;
    }

    /**
     * Get nomequipe
     *
     * @return string
     */
    public function getNomequipe()
    {
        return $this->nomequipe;
    }
  
   /**
    * @return ChefEquipe
    */
    public function getChefEquipe()
    {
        return $this->chefequipe;
    }


 public function setChefEquipe(ChefEquipe $chefequipe)
    {
        return $this->chefequipe= $chefequipe;
    }


}

