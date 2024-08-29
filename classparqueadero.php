<?php
require_once("classvehiculo.php");

final class Parqueadero extends Vehiculo {
    // Propiedades
    public $intPisos;
    public $strEspaciosDisponibles;
    public $intPrecioHora = 2; // Changed to integer

    // Métodos
    public function __construct(string $nombre, int $documento, string $placa, string $color, string $marca, 
    string $horaIngreso, string $horaSalida, string $espaciosDisponibles, int $pisos) {
        parent::__construct($nombre, $documento, $placa, $marca, $color, $horaIngreso, $horaSalida);

        $this->strEspaciosDisponibles = $espaciosDisponibles;
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
            'Espacio_Encuentra' => $this->strEspaciosDisponibles,
            'Piso' => $this->intPisos
        ];
        return $infoCliente;
    }
}
?>