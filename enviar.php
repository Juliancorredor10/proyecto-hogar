<?php

$destino="julipo6985@gmail.com";
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Telefono = $_POST["Telefono"];
$Correo = $_POST["Correo"];
$Carrera = $_POST["Carrera"];

$contenido = "Nombre: " . $Nombre . "\nApellido: " . $Apellido . "\n Telefono: " . $Telefono . "\n Correo: " . $Correo . "\nCarrera: " . $Carrera;
mail($destino,"Contacto", $contenido);
header("location:Formulario.html");




?>

