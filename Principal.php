<?php
include 'Aviao.php';

class Principal
{
}
	$meioTransporte = new MeioTransporte(200);
	$meioTransporte->mover();
	
	echo '<br/>';

	$aviao = new Aviao(200,'Boeing');
	$aviao->mover();