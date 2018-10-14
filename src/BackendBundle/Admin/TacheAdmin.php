<?php
namespace BackendBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
//use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use BackendBundle\Entity\Module;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TacheAdmin extends AbstractAdmin
{
   protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titreT');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titreT')
                   ->add('tauxAvancement')
        ;
    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
    $formMapper
        ->add('titreT', TextType::class)
        ->add('descriptionT', TextType::class)
        ->add('datedebutT', DateType::class)
        ->add('datefinT', DateType::class)
        ->add('etatTache', TextType::class)
        ->add('tauxAvancement', PercentType::class)
         ->add('module', EntityType::class, [
            'class' => Module::class,
            'choice_label' => 'titremodule',
        ])
    ;
      }

}
