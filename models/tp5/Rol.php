<?php
    class Rol {
        private $idRol;
        private $rolDescripcion;

        public function __construct() {
            $this->idRol = "";
            $this->rolDescripcion = "";
        }
        public function getIdRol(){
                return $this->idRol;
        } 
        public function setIdRol($idRol){
                $this->idRol = $idRol;
                return $this;
        }
        public function getRolDescripcion(){
                return $this->rolDescripcion;
        }
        public function setRolDescripcion($rolDescripcion){
                $this->rolDescripcion = $rolDescripcion;
                return $this;
        }

        public function setear ($idRol,$rolDescripcion){
            $this->setIdRol = $idRol;
            $this->setRolDescripcion = $rolDescripcion;
        }
        public function cargar(){
            $resp = false;
            $db=new DataBase();
            
            $sql= "SELECT * FROM rol WHERE IdRol = ".$this->getIdRol();
            if ($db->Iniciar()) {
                $res = $db->Ejecutar($sql);
                if($res>-1){
                    if($res>0){
                        $row = $db->Registro();
                        $this->setear($row['IdRol'], $row['RolDescripcion']);
                    }   
                }
            } else {
                $this->setmensajeoperacion("Error::rol->cargar: ".$db->getError());
            }
            return $resp;
        }
        public function insertar()
        {
            $resp = false;
            $db = new DataBase();
            $query = "INSERT INTO rol(IdRol,RolDescripcion)  
                  VALUES('"
                . $this->getIdRol() . "', '"
                . $this->getRolDescripcion() . "'
            );";
            if ($db->Iniciar()) {
                if ($dni = $db->Ejecutar($query)) {
                    $this->setIdUsuario($dni);
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("ERROR::rol->insertar ejecutar: " . $db->getError());
                }
            } else {
                $this->setmensajeoperacion("ERROR::rol->insertar iniciar: " . $db->getError());
            }
            return $resp;
        }   
        public function modificar()
        {
            $resp = false;
            $db = new DataBaseTp5();
            $query = "UPDATE rol SET 
                IdRol='" . $this->getIdRol() . "', RolDescripcion='" . $this->getRolDescripcion() . 
                "' WHERE IdRol=" . $this->getIdRol();
    
            if ($db->Iniciar()) {
                if ($db->Ejecutar($query)) {
                    $resp = true;
                } else {
                    $this->setMensajeoperacion("ERROR::rol => modificar ejecutar: " . $db->getError());
                }
            } else {
                $this->setMensajeoperacion("ERROR::rol => modificar insertar: " . $db->getError());
            }
            return $resp;
        }
        public function eliminar()
        {
            $resp = false;
            $db = new DataBase();
            $query = "DELETE FROM Rol WHERE IdRol=" . $this->getIdRol();
            if ($db->Iniciar()) {
                if ($db->Ejecutar($query)) {
                    $resp = true;
                } else {
                    $this->setMensajeoperacion("ERROR::Rol => eliminar ejecutar: " . $db->getError());
                }
            } else {
                $this->setMensajeoperacion("ERROR::Rol => eliminar insertar: " . $db->getError());
            }
            return $resp;
        }
        public static function listar($parameter = "")
        {
            $usuariorray = array();
            $db = new DataBase();
            $query = "SELECT * FROM rol ";
            if ($parameter != "") {
                $query .= 'WHERE ' . $parameter;
            }
            $res = $db->Ejecutar($query);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $db->Registro()) {
                        $obj = new Rol();
                        $obj->setear(
                            $row['IdRol'],
                            $row['RolDescripcion'],
                        );
                        array_push($usuarioArray, $obj);
                    }
                }
            } else {
                $this->setMensajeoperacion("ERROR::Rol => listar: " . $db->getError());
            }
        }
    }
?>