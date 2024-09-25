<?php

class HolaMundo
{
	private $nomrbe;

	function __construct($nombre)
{
  		$this->nombre = $nombre;
}

function __toString()
{
return srintf("Hola, %s.\n", $this->nombre);
}
}
?>
