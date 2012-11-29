<?php
namespace Estudante\Model;

class Estudante{
	public $matricula;
	public $nome;

	public function exchangeArray(Array $data){
		$this->matricula = (isset($data['matricula'])) ? $data['matricula'] : null;
		$this->nome = (isset($data['nome'])) ? $data['nome'] : null;
	}
}