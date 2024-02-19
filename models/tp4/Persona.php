<?php
    class Persona {
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $nroDni;
        private $telefono;
        private $domicilio;
        private $mensajeOperacion;
        
        public function __construct() {
            $this->nombre = '';
            $this->apellido = '';
            $this->$fechaNacimiento=''; 
            $this->nroDni = '';
            $this->telefono = '';
            $this->domicilio = '';
        } 
        /* Métodos getter y setter */
        public function getNombre(){
                return $this->nombre;
        }
        public function setNombre($nombre){
                $this->nombre = $nombre;
                return $this;
        }
        public function getApellido(){
                return $this->apellido;
        }
        public function setApellido($apellido){
                $this->apellido = $apellido;
                return $this;
        }
        public function getFechaNacimiento(){
                return $this->fechaNacimiento;
        }
        public function setFechaNacimiento($fechaNacimiento){
                $this->fechaNacimiento = $fechaNacimiento;
                return $this;
        }
        public function getNroDni(){
                return $this->nroDni;
        }
        public function setNroDni($nroDni){
                $this->nroDni = $nroDni;
                return $this;
        }
        public function getTelefono(){
                return $this->telefono;
        }
        public function setTelefono($telefono){
                $this->telefono = $telefono;
                return $this;
        }
        public function getDomicilio(){
                return $this->domicilio;
        }
        public function setDomicilio($domicilio){
                $this->domicilio = $domicilio;
                return $this;
        }
        public function setear($dni, $apellido, $nombre, $fechaN, $telef, $domic){
            $this->setNroDni($dni);
            $this->setApellido($apellido);
            $this->setNombre($nombre);
            $this->setFechaNacimiento($fechaN);
            $this->setTelefono($telef);
            $this->setDomicilio($domic);
        }
        public function cargar(){
            $resp = false;
            $db=new DataBase();
            
            $sql= "SELECT * FROM persona WHERE NroDni = ".$this->getNroDni();
            if ($db->Iniciar()) {
                $res = $db->Ejecutar($sql);
                if($res>-1){
                    if($res>0){
                        $row = $db->Registro();
                        $this->setear($row['NroDni'], $row['Apellido'],$row['Nombre'],$row['fechaNac'],$row['Telefono'],$row['Domicilio']);
                    }   
                }
            } else {
                $this->setmensajeoperacion("Error::Persona->cargar: ".$db->getError());
            }
            return $resp;
        }
        public function insertar()
        {
            $resp = false;
            $db = new DataBase();
            $query = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)  
                  VALUES('"
                . $this->getNroDni() . "', '"
                . $this->getApellido() . "', '"
                . $this->getNombre() . "', '"
                . $this->getFechaNacimiento() . "', '"
                . $this->getTelefono() . "', '"
                . $this->getDomicilio() . "'
            );";
            if ($db->Iniciar()) {
                if ($dni = $db->Ejecutar($query)) {
                    $this->setNroDni($dni);
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("ERROR::Persona->insertar ejecutar: " . $db->getError());
                }
            } else {
                $this->setmensajeoperacion("ERROR::Persona->insertar iniciar: " . $db->getError());
            }
            return $resp;
        }   
        
        public function eliminar()
        {
            $resp = false;
            $db = new DataBase();
            $query = "DELETE FROM persona WHERE NroDni=" . $this->getNroDni();
            if ($db->Iniciar()) {
                if ($db->Ejecutar($query)) {
                    $resp = true;
                } else {
                    $this->setMensajeoperacion("ERROR::Persona => eliminar ejecutar: " . $db->getError());
                }
            } else {
                $this->setMensajeoperacion("ERROR::Persona => eliminar insertar: " . $db->getError());
            }
            return $resp;
        }
        public static function listar($parameter = "")
        {
            $personArray = array();
            $db = new DataBase();
            $query = "SELECT * FROM persona ";
            if ($parameter != "") {
                $query .= 'WHERE ' . $parameter;
            }
            //echo $query;
            $res = $db->Ejecutar($query);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $db->Registro()) {
                        $obj = new Persona();
                        $obj->setear(
                            $row['NroDni'],
                            $row['Apellido'],
                            $row['Nombre'],
                            $row['fechaNac'],
                            $row['Telefono'],
                            $row['Domicilio']
                        );
                        array_push($personArray, $obj);
                    }
                }
            } else {
                $this->setMensajeoperacion("ERROR::persona => listar: " . $db->getError());
            }
            return $personArray;
        }

        /**
         * Get the value of mensajeOperacion
         */ 
        public function getMensajeOperacion()
        {
                return $this->mensajeOperacion;
        }

        /**
         * Set the value of mensajeOperacion
         *
         * @return  self
         */ 
        public function setMensajeOperacion($mensajeOperacion)
        {
                $this->mensajeOperacion = $mensajeOperacion;

                return $this;
        }
    }
?>