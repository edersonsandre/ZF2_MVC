<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Estudante\Controller;

use Estudante\Model\EstudanteTable;

use Zend\Mvc\Controller\AbstractActionController,
Zend\View\Model\ViewModel;

class EstudanteController extends AbstractActionController{
	/*
	 * 
	 * @var EstudanteTable
	 */
	protected  $estudanteTable;


	public function indexAction()
	{
		return new ViewModel(
				array(
						'estudantes' => $this->getEstudanteTable()->fetchAll()
				)
		);
	}

	public function addAction()
	{
		return new ViewModel();
	}

	public function registroAction()
	{
		return new ViewModel();
	}

	public function editAction()
	{
		return new ViewModel();
	}

	public function deleteAction()
	{
		return new ViewModel();
	}
	
	public function getEstudanteTable(){
		if(!$this->estudanteTable){
			$sm = $this->getServiceLocator();
			$this->estudanteTable = $sm->get("Estudante\Model\EstudanteTable");
		}
	
		return $this->estudanteTable;
	}
}
