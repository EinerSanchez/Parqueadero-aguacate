<?php

class Cliente{
    //propiedades
    public $strNombre;
    public $intDocumento;
    //metodos
    public function __construct(string $nombre,int $documento){
        $this->strNombre=$nombre;
        $this->intDocumento=$documento;
    }
    public function getInfoCliente(){
        $infoCliente = [
            'Nombre' => $this->strNombre,
            'Documento' => $this->intDocumento
        ];
        return $infoCliente;
    }
}
?>
