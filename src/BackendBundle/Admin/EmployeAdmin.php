<?php
namespace BackendBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use BackendBundle\Entity\Equipe;
use BackendBundle\Entity\Projet;
use BackendBundle\Entity\Demande;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EmployeAdmin extends AbstractAdmin
{
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nom')
                       ->add('prenom');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nom')
                   ->add('prenom')
                   ->add('role')
        ;
    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
    $formMapper
        ->add('nom', TextType::class)
        ->add('prenom', TextType::class)
        ->add('email', EmailType::class)
        ->add('dateNaissance', BirthdayType::class)
        ->add('dateEmboche', DateType::class)
        ->add('equipe', EntityType::class, [
            'class' => Equipe::class,
            'choice_label' => 'nomequipe',
        ])

        ->add('role', ChoiceType::class, array(
    'choices' => array('Employe' => true, 'Chef_Equipe' => false),
))  
      /*  ->add('Projet', EntityType::class, [
            'class' => Projet::class,
            'choice_label' => 'projet',
        ])
        ->add('Demande', EntityType::class, [
            'class' => Demande::class,
            'choice_label' => 'demande',
        ])*/
    ;
      }
}
?>