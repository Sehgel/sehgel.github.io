<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: x-api-key, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
// Encabezado de contenido de acuerdo a lo que se va a devolver
header("Content-type: application/json; charset=utf-8");
// Permite solo el método POST para evitar errores
header("Access-Control-Allow-Methods: POST");
header("Allow: POST");
echo "Array:";
foreach($_POST as $key => $value)
  echo "{$key} => {$value} ";

?>