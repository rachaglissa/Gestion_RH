<?php
namespace BackendBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
//use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use BackendBundle\Entity\Equipe;
//use BackendBundle\Entity\Module;

class ProjetAdmin extends AbstractAdmin
{
   protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nomprojet');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nomprojet')
                   ->add('etat');
    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
    $formMapper
        ->add('nomprojet', TextType::class)
        ->add('datedebutP', DateType::class)
        ->add('datefinP', DateType::class)
        ->add('description', TextType::class)
        ->add('etat', TextType::class)
        ->add('Equipe', EntityType::class, [
            'class' => Equipe::class,
            'choice_label' => 'nomequipe',
        ])
       /* ->add('Module', EntityType::class, [
            'class' => Module::class,
            'choice_label' => 'module',
        ])*/
    ;
      }

}
