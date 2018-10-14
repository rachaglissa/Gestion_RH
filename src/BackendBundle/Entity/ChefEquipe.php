<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChefEquipe
 *
 * @ORM\Table(name="chef_equipe")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\ChefEquipeRepository")
 */
class ChefEquipe
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

