<?php
include 'MeioTransporte.php';

class Aviao extends MeioTransporte
{
	private $tipo;

	public function __construct($passageiros,$tipo){
		parent::__construct($passageiros);
		$this->tipo = $tipo;
	}

	public function mover()
	{
		echo 'Avião do tipo '.$this->tipo.' voando com '.$this->getPassageiros().' passageiros';
	}
}