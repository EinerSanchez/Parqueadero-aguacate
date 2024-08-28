<?php

class Cliente{
    //propiedades
    public $strNombres;
    public $strApellidos;
    public $intDocumento;
    //metodos
    public function __construct(string $nombres,string $apellidos,int $documento){
        $this->$strNombres=$nombres;
        $this->$strApellidos=$apellidos;
        $this->$intDocumento=$documento;
    }
    public function getInfoCliente(){
        $infoCliente = [
            'Nombres' => $this->strNombres;
            'Apellidos' => $this->strApellidos;
            'Documento' => $this->intDocumento;
        ];
        return $infoCliente;
    }
}
?>
