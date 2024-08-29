<?php
require_once("classvehiculo.php");

final class Parqueadero extends Vehiculo {
    //propiedades
    public $strPisos;
    public $strEspaciosDisponibles;
    public $intPrecioHora = "$2";

//metodos 
public function __construct(string $nombres,string $apellidos,int $documento, string $placa, string $color, 
string $horaingreso, string $horasalida, int $totalpagar, string $pisos, string $espaciosDisponibles){
parent::__construct($nombres,$apellidos,$documento,$placa,$color,$horaingreso,$horasalida,$totalpagar)

$this->strPisos= $pisos,
$this->strEspaciosDisponibles= $espaciosDisponibles
}
public function getInfoCliente(){
    $infoCliente = [
        'Nombres' => $this->strNombres,
        'Apellidos' => $this->strApellidos,
        'Documento' => $this->intDocumento,
        'Placa' => $this->strPlaca,
        'Color' => $this->strColor,
        'HoraIngreso' => $this->strHoraIngreso,
        'Horasalida' => $this->strHoraSalida,
        'TotalPagar' => $this->intTotalPagar,
        'Pisos' => $this->strPisos,
        'EspaciosDisponibles' => $this->strEspaciosDisponibles
    ];
    return $infoCliente;
}
}