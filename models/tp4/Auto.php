<?php
    class Auto {
        private $patente;
        private $marca;
        private $modelo;
        private $dniDuenio;
        private $mensajeOperacion;
        
        public function __construct() {
            $this->patente = '';
            $this->marca = '';
            $this->$modelo=''; 
            $this->dniDuenio = '';
   
        } 
         /**
         * Get the value of patente
         */ 
        public function getPatente(){
            return $this->patente;
        }
        public function setPatente($patente){
            $this->patente = $patente;
            return $this;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
            return $this;
        }
        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
            return $this;
        }

        public function getDniDuenio(){
            return $this->dniDuenio;
        }
        public function setDniDuenio($dniDuenio){
            $this->dniDuenio = $dniDuenio;
            return $this;
        }
        public function getMensajeOperacion(){
            return $this->mensajeOperacion;
        }
        public function setMensajeOperacion($mensajeOperacion){
            $this->mensajeOperacion = $mensajeOperacion;
            return $this;
        }
        public function setear($patente, $marca, $modelo, $dniDuenio)
        {
            $this->setNroDni($dni);
            $this->setApellido($apellido);
            $this->setNombre($nombre);
            $this->setFechaNac($fechaN);
          
        }
        
        public function cargar(){
            $resp = false;
            $base=new BaseDatos();
            $sql="SELECT * FROM auto WHERE DniDuenio = ".$this->getDniDuenio();
            if ($db->Iniciar()) {
                $res = $db->Ejecutar($sql);
                if($res>-1){
                    if($res>0){
                        $row = $db->Registro();
                        $this->setear($row['DniDuenio'], $row['Patente'],$row['Marca'],$row['Modelo']);
                        
                    }   
                }
            } else {
                $this->setmensajeoperacion("Error::Auto->cargar: ".$db->getError());
            }
            return $resp;
        }
        public function insertar(){
            $resp = false;
            $base=new BaseDatos();
            $query = "INSERT INTO Auto(DniDuenio, Patente, Marca, Modelo)  
              VALUES('"
            . $this->getDniDuenio() . "', '"
            . $this->getPatente() . "', '"
            . $this->getMarca() . "', '"
            . $this->getModelo() . "'
            );";
            if ($base->Iniciar()) {
                if ($elid = $base->Ejecutar($sql)) {
                    $this->setNroDni($dni);
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("ERROR::Auto->insertar: ".$base->getError());
                }
            } else {
                $this->setmensajeoperacion("ERROR::Auto->insertar: ".$base->getError());
            }
            return $resp;
        }
        
        public function eliminar()
        {
            $resp = false;
            $db = new DataBase();
            $query = "DELETE FROM Auto WHERE DniDuenio=" . $this->getDniDuenio();
            if ($db->Iniciar()) {
                if ($db->Ejecutar($query)) {
                    $resp = true;
                } else {
                    $this->setMensajeoperacion("ERROR::Auto => eliminar ejecutar: " . $db->getError());
                }
            } else {
                $this->setMensajeoperacion("ERROR::Auto => eliminar insertar: " . $db->getError());
            }
            return $resp;
        }

        public static function listar($parameter = "")
        {
            //echo "aca no llega";
            $arreglo = array();
            //echo "aca no llega2";
            $db = new DataBase();
            echo "aca no llega";
            
            $query = "SELECT * FROM auto ";
            if ($parameter != "") {
                $query .= 'WHERE ' . $parameter;
            }
            $res = $db->Ejecutar($query);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $db->Registro()) {
                        $obj = new Auto();
                        $duenio = new Persona();
                        $duenio->setNroDni($row['DniDuenio']);
                        $duenio->cargar();
                        $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $duenio);
                        array_push($arreglo, $obj);
                    }
                }
            } else {
                $this->setMensajeoperacion("ERROR::Auto => listar: " . $db->getError());
            }
            return $arreglo;
        }
       
    }




?>