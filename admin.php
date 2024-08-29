<?php
require_once("classParqueadero.php");
echo "<h2>Buscando Vehiculo Por placa</h2>";

$parqueadero = new Parqueadero( "Einer Sanchez",1083881788,"SMH-77C","Rojo","Toyota","2022-01-01 10:00:00","2022-01-01 12:00:00","Deja libre Espacio 10",2
);


echo "<h1>Información del cliente y su vehículo</h1>";
$infoCliente = $parqueadero->getInfoCliente();
foreach ($infoCliente as $key => $value) {
    echo "<strong>$key:</strong> $value<br>";
}

echo "<h2>Valor a pagar:</h2>";
$valorAPagar = $parqueadero->calcularValorAPagar();
echo "<strong>Valor a pagar:</strong> $" . number_format($valorAPagar, 2) . "<br>";

?>