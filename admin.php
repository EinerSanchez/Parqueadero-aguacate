<?php
require_once("classParqueadero.php");
$pisoAleatorio = rand(1, 4);
$espacioAleatorio = rand(1, 10);

$parqueadero = new Parqueadero( "Einer Sanchez",1083881788,"SMH-77C","Rojo","Toyota","6:00:00","18:00:00",$espacioAleatorio,$pisoAleatorio
);
echo "<h2>Buscando Vehiculo Por placa</h2>";
$buscarVehiculo = $parqueadero->getBuscarVehiculo();
echo "<pre>";
print_r($buscarVehiculo);
echo "</pre>";

echo "<h2>Vehiculo Encontrado:</h2>";
echo "<h2>Información del cliente y su vehículo</h2>";
$infoCliente = $parqueadero->getInfoCliente();
echo "<pre>";
print_r($infoCliente);
echo "</pre>";

echo "<h2>Valor a pagar:</h2>";
$valorAPagar = $parqueadero->calcularValorAPagar();
echo "Su valor total a pagar es: $".$valorAPagar;

?>