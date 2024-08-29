<?php
require_once("classcliente.php");

class Vehiculo extends Cliente {
    // Propiedades
    public $strPlaca;
    public $strMarca;
    public $strColor;
    public $strHoraIngreso;
    public $strHoraSalida;
    public $strTotalPagar;

    // Métodos
    public function __construct(string $nombre, int $documento, string $placa, string $marca, string $color,
     string $horaIngreso, string $horaSalida, ) {
        parent::__construct($nombre, $documento);

        $this->strPlaca = $placa;
        $this->strMarca = $marca;
        $this->strColor = $color;
        $this->strHoraIngreso = $horaIngreso;
        $this->strHoraSalida = $horaSalida;
    
    }
    public function getInfoCliente(){
        $infoCliente = [
            'Nombre' => $this->strNombre,
            'Documento' => $this->intDocumento,
            'Placa' => $this->strPlaca,
            'Marca' => $this->strMarca,
            'color' => $this->strColor,
            'Hora_Ingreso' => $this->strHoraIngreso,
            'Hora_Salida' => $this->strHoraSalida,
   

        ];
        return $infoCliente;
    }

    public function calcularValorAPagar(): float {
        $duracion = strtotime($this->strHoraSalida) - strtotime($this->strHoraIngreso);
        $valorAPagar = ($duracion / 3600) * 2; // $2 USD por hora
        return $valorAPagar;
    }
}
?>