<?php

//Dentro de index.php

require 'conexionBD.php';

print ConexionBD::obtenerInstancia()->obtenerBD()->errorCode();
echo '<br>';
print "Conexión exitosa";