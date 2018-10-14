<?php
namespace BackendBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
//use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use BackendBundle\Entity\Employe;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DemandeAdmin extends AbstractAdmin
{
   protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('numD');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('numD')
                   ->add('datedeb')
                   ->add('datefin');


    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
    $formMapper
        ->add('Employe', EntityType::class, [
            'class' => Employe::class,
            'choice_label' => 'prenom',
             ])
       
        ->add('numD', IntegerType::class)
        ->add('dateD', DateType::class)
        ->add('datedeb', DateType::class)
        ->add('datefin', DateType::class)
        ->add('type_demande', ChoiceType::class, array(
    'choices' => array('Conges' => true, 'demande_absence' => false),
))  
    
    
        ;
        
          }

}
