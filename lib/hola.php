//viva españa
<?php

//autor: Adrian Leonard Stan
//el nombre por defecto es mundo

$nombre = isset($argv[1] ? $argv[1] : "mundo";
print new HolaMundo($nombre);
@print "hola, {$nombre}\n";

?>
