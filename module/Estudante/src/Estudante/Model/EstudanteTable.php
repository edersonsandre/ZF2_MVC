<?php
namespace Estudante\Model;

use Zend\Db\TableGateway\TableGateway;

class EstudanteTable{
	protected $tableGateway;

	public function __construct(TableGateway $tableGateway){
		$this->tableGateway = $tableGateway;
	}
	
	public function fetchaAll(){
		
		return $this->tableGateway->select();
	}
	
	public function getEstudante(Int $matricula){
		$matricula = (int) $matricula;

		$rowSet = $this->tableGateway->select(array(" matricula = {$matricula}"));
		$row = $rowSet->current();
		if(!$row){
			throw new \Exception("Nenhum registro foi encontrado!");
		}
		
		return $row;
	}
	
	public function saveEstudante(Estudante $estudante){
		$data = Array(
				'nome' => $estudante->nome
				);
		
		$matricula = (int) $estudante->matricula;
		if(empty($matricula)){
			return $this->tableGateway->insert($data);
		}else{
			if($this->getEstudante($matricula)){
				return $this->tableGateway->update($data, array('matricula'=>$matricula));
			}
		}
		
	}
	
	public function deleteEstudante(Estudante $estudante){
		$matricula = (int) $estudante->matricula;
		
		if($this->getEstudante($matricula)){
			return $this->tableGateway->delete($data, array('matricula'=>$matricula));
		}
		
	}
	
	
	
}