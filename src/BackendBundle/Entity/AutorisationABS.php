<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutorisationABS
 *
 * @ORM\Table(name="autorisation_a_b_s")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\AutorisationABSRepository")
 */
class AutorisationABS 
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
     * @ORM\Column(name="typeAbs", type="string", length=255)
     */
    private $typeAbs;

    /**
     * @var int
     *
     * @ORM\Column(name="nbjAbs", type="integer")
     */
    private $nbjAbs;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrhAbs", type="integer")
     */
    private $nbrhAbs;


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
     * Set typeAbs
     *
     * @param string $typeAbs
     *
     * @return AutorisationABS
     */
    public function setTypeAbs($typeAbs)
    {
        $this->typeAbs = $typeAbs;

        return $this;
    }

    /**
     * Get typeAbs
     *
     * @return string
     */
    public function getTypeAbs()
    {
        return $this->typeAbs;
    }

    /**
     * Set nbjAbs
     *
     * @param integer $nbjAbs
     *
     * @return AutorisationABS
     */
    public function setNbjAbs($nbjAbs)
    {
        $this->nbjAbs = $nbjAbs;

        return $this;
    }

    /**
     * Get nbjAbs
     *
     * @return int
     */
    public function getNbjAbs()
    {
        return $this->nbjAbs;
    }

    /**
     * Set nbrhAbs
     *
     * @param integer $nbrhAbs
     *
     * @return AutorisationABS
     */
    public function setNbrhAbs($nbrhAbs)
    {
        $this->nbrhAbs = $nbrhAbs;

        return $this;
    }

    /**
     * Get nbrhAbs
     *
     * @return int
     */
    public function getNbrhAbs()
    {
        return $this->nbrhAbs;
    }
}

