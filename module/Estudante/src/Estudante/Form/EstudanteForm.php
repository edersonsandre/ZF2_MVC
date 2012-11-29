<?php
namespace Estudante\Form;

use Zend\Form\Form;

class EstudanteForm extends Form{

	public function __construct($name = null){
		parent::__construct('estudante');
		
		$this->setAttribute('method', 'post');

		$this->add(
				array(
						'name' => 'matricula',
						'attributes' => array(
								'type' => 'hidden'
						)
				)

		);

		$this->add(
				array(
						'name' => 'nome',
						'attributes' => array(
								'type' => 'text'
						),
						'options' => array(
								'label' => 'Nome'
						)
				)

		);

		$this->add(
				array(
						'nome' => 'submit',
						'attributes' => array(
								'type' => 'submit',
								'value' => 'Gravar'
						)
				)

		);

	}

}