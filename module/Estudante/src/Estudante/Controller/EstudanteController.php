<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Estudante\Controller;

use Estudante\Form\EstudanteForm;

use Estudante\Model\Estudante;

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
		
		if($this->getRequest()->isPost()){
			$estudante = new Estudante();
			$estudante->exchangeArray($_POST);
			//$this->getEstudanteTable()->
		}
		
		$form = new EstudanteForm();
		
		//return new ViewModel(array('form'=>$form));
		
		return new ViewModel();
	}

	public function registroAction()
	{
		return new ViewModel();
	}

	public function editAction(){
		
		$matricula = (int) $this->params()->fromRouter('matricula');
		$estudante = $this->getEstudanteTable()->getEstudante($matricula);
		
		$form = new \Estudante\Form\Estudante();
		$form->bind($estudante);
		
		
		return new ViewModel(array('form'=>$form));
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
