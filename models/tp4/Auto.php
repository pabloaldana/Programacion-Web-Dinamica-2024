<?php
    class Auto {
        private $patente;
        private $marca;
        private $modelo;
        
        private $mensajeOperacion;
        
        public function __construct() {
            $this->patente = '';
            $this->marca = '';
            $this->$modelo=''; 
            $this->objDuenio = '';
   
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

  
        public function getMensajeOperacion(){
            return $this->mensajeOperacion;
        }   
        public function setMensajeOperacion($mensajeOperacion){
            $this->mensajeOperacion = $mensajeOperacion;
            return $this;
        }
        public function setear($patente, $marca, $modelo, $duenio)
        {
            $this->setPatente($patente);
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setObjDuenio($duenio);
          
        }
        
        public function cargar(){
            $resp = false;
            $db=new DataBase();
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
            $db=new DataBase();
            $nroPatente = ($this->getObjDuenio())->getNroDni();
            $query = "INSERT INTO auto(Patente, Marca, Modelo,DniDuenio)  
              VALUES('"
            . $this->getPatente() . "', '"
            . $this->getMarca() . "', '"
            . $this->getModelo() . "', '"             
            . ($this->getObjDuenio())->getNroDni() . "' 
            );";
 
            if ($db->Iniciar()) {
                if ($patente = $db->Ejecutar($query)) {
                    $this->setPatente($patente);
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("ERROR::Auto->insertar: ".$db->getError());
                }
            } else {
                $this->setmensajeoperacion("ERROR::Auto->insertar: ".$db->getError());
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

        public function modificar()
        {

            $resp = false;
            $db = new DataBase();
            $dniDuenio = $this->getObjDuenio()->getNroDni();
            $patente = $this->getPatente();
    
            $query = "UPDATE auto SET Marca='" . $this->getMarca() . "', Modelo='" . $this->getModelo() . "', 
            DniDuenio='" . $dniDuenio . "' WHERE Patente='" . $this->getPatente() . "'";
            if ($db->Iniciar()) {
                if ($db->Ejecutar($query)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Auto->modificar: " . $db->getError());
                }
            } else {
                $this->setmensajeoperacion("Auto->modificar: " . $db->getError());
            }
            return $resp;
        }

        public static function listar($parameter = "")
        {
            $arreglo = array();
            $db = new DataBase();
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
                $this->setmensajeoperacion("ERROR::auto => listar: " . $db->getError());
            }
    
            return $arreglo;
        }

       
        public function getObjDuenio(){
            return $this->objDuenio;
        }
        public function setObjDuenio($objDuenio){
            $this->objDuenio = $objDuenio;
            return $this;
        }
    }




?>