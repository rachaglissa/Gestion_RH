<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conges
 *
 * @ORM\Table(name="conges")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\CongesRepository")
 */
class Conges 
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
     * @ORM\Column(name="typeC", type="string", length=255)
     */
    private $typeC;

    /**
     * @var int
     *
     * @ORM\Column(name="nbjrsC", type="integer")
     */
    private $nbjrsC;


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
     * Set typeC
     *
     * @param string $typeC
     *
     * @return Conges
     */
    public function setTypeC($typeC)
    {
        $this->typeC = $typeC;

        return $this;
    }

    /**
     * Get typeC
     *
     * @return string
     */
    public function getTypeC()
    {
        return $this->typeC;
    }

    /**
     * Set nbjrsC
     *
     * @param integer $nbjrsC
     *
     * @return Conges
     */
    public function setNbjrsC($nbjrsC)
    {
        $this->nbjrsC = $nbjrsC;

        return $this;
    }

    /**
     * Get nbjrsC
     *
     * @return int
     */
    public function getNbjrsC()
    {
        return $this->nbjrsC;
    }
}

