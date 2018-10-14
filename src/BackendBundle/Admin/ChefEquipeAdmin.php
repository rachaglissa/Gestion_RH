<?php
namespace BackendBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class ChefEquipeAdmin extends AbstractAdmin
{
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nom');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nom');
    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
    $formMapper
        ->add('nom', TextType::class)
        ->add('prenom', TextType::class)
        ->add('email', EmailType::class)
        ->add('dateNaissance', BirthdayType::class)
        ->add('dateEmboche', DateType::class)
      
        ;
      }
}
?>