<?php
class noticia {

    private $idnoticia;
    private $titulo;
    private $mensaje;
    private $fecha;
    private $status;

    public function __construct($id, $title, $info,  $fecha, $status) {        
        $this->idnoticia = $id;       
        $this->titulo = $title;
        $this->mensaje = $info;       
        $this->fecha = $fecha;
        $this->status = $status;
    }

    public function getIdContenido() {
        return $this->idnoticia;
    }

    public function gettitulo() {
        return $this->titulo;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function getFecha() {
        return $this->fecha;
    }
   
    public function getStatus() {
        return $this->status;
    }

}
?>