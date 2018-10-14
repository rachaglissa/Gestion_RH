<?php
namespace BackendBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class EquipeAdmin extends AbstractAdmin
{
   protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nomequipe');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->add('num_Equipe')
        ->addIdentifier('nomequipe');
    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
    $formMapper
        ->add('num_Equipe', IntegerType::class)
        ->add('nom_Equipe', TextType::class)
    ;
      }

}
