<?php 

class MeioTransporte
{
	private $passageiros;

	public function __construct($passageiros)
	{
		$this->passageiros = $passageiros;
	}

	public function mover()
	{
		echo 'O veiculo esta se movento com '.$this->passageiros;
	}

	public function setPassageiros($passageiros)
	{
		$this->passageiros = $passageiros;
	}
	public function getPassageiros()
	{
		return $this->passageiros;
	}
}