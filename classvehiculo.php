<?php
require_once ("classcliente.php");
class Vehiculo extends Cliente {
    //propiedades
    public $strPlaca;
    public $strColor;
    public $strHoraIngreso;
    public $strHoraSalida;
    public $intTotalPagar;

    //metodos
    public function __construct(string $nombres,string $apellidos,int $documento, string $placa, string $color, string $horaingreso, string $horasalida, int $totalpagar){
    parent::__construct($nombres,$apellidos,$documento);
    
    $this-> strPlaca = $placa;
    $this-> strColor = $color;
    $this-> strHoraIngreso = $horaingreso;
    $this-> strHoraSalida = $horasalida;
    $this-> intTotalPagar = $totalpagar;
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
            'TotalPagar' => $this->intTotalPagar
        ];
        return $infoCliente;
    }
}
