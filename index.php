<?php
require("funciones/funciones.php");

$_SESSION["mantenimiento"] = 0;

if($_SESSION["mantenimiento"] == '0') {

	tablaprincipalinicio();

	inicio();

	menu();


	operacionesinicio();


	cuerpoprincipalinicio();

	noticias();


	cuerpoprincipalfinal();



	operacionesfinal();

	fintabla('19px');

	tablaprincipalfinal();

}else{
	nodisponible();
}