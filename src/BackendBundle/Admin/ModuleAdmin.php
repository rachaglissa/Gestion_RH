<?php
namespace BackendBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use BackendBundle\Entity\Projet;

class ModuleAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titremodule');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('titremodule');
    }

     protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('titremodule', TextType::class)
                   ->add('datedebutM', DateType::class)
                   ->add('datefinM', DateType::class)
                   ->add('projet', EntityType::class, [
                         'class' => Projet::class,
                         'choice_label' => 'nomprojet',])
                   ;
    }
}
?>