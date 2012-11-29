<?php
namespace Estudante\Form;

use Zend\Form\Form;

class Estudante extends Form{

	public function __construct($name = null){
		parent::__construct('estudante');
		$this->setAttribute('method', 'POST');

		$this->add(
				array(
						'nome' => 'matricula',
						'attributes' => array(
								'type' => 'hidden'
						)
				)

		);

		$this->add(
				array(
						'nome' => 'nome',
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