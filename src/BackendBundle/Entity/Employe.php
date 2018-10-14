<?php
namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
   /**
    * Employe
    *
    * @ORM\Table(name="employe")
    * @ORM\Entity(repositoryClass="BackendBundle\Repository\EmployeRepository")
    */
    class Employe
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_emboche", type="datetime")
     */
    private $dateEmboche;
    
   /**
    * @var string
    *
    * @ORM\Column(name="role", type="string", length=255)
    */
    private  $role;

   /**
    * @ORM\ManyToMany(targetEntity="Projet", mappedBy="employe")
    */
    private $projet;

    /**
    * @ORM\ManyToOne(targetEntity="Equipe", inversedBy="employe")
    */
    private $equipe;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Employe
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Employe
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Employe
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Employe
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set dateEmboche
     *
     * @param \DateTime $dateEmboche
     *
     * @return Employe
     */
    public function setDateEmboche($dateEmboche)
    {
        $this->dateEmboche = $dateEmboche;

        return $this;
    }

    /**
     * Get dateEmboche
     *
     * @return \DateTime
     */
    public function getDateEmboche()
    {
        return $this->dateEmboche;
    }
     public function getRole()
    {
        return $this->role;
    }


   public function setRole( $role)
    {
        return $this->role=$role;
    }


   public function getEquipe()
    {
        return $this->equipe;
    }


   public function setEquipe(Equipe $equipe)
    {
        return $this->equipe=$equipe;
    }
    public function getProjet()
    {
        return $this->projet;
    }
    /*public function getDemande()
    {
        return $this->demande;
    }*/
}

