<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BookAdmin extends AbstractAdmin {
	protected function configureFormFields(FormMapper $formMapper) {
		$formMapper->add('name', TextType::class);
		$formMapper->add('author', TextType::class);
		$formMapper->add('price', TextType::class);
	}

	protected function configDatagridFilters(DatagridMapper $datagridmapper) {
		$datagridmapper->add('name');
	}

	protected function configureListFields(ListMapper $listMapper) {
		$listMapper->addIdentifier('name');
		$listMapper->addIdentifier('author');
		$listMapper->addIdentifier('price');
	}
}
?>