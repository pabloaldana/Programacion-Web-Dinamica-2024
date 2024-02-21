<?php
    class Usuario {
        private $idUsuario;
        private $usNombre;
        private $usPass;
        private $usMail;
        private $usDeshabilitado;
        private $mensajeOperacion;
        
        public function __construct() {
            $this->idUsuario = '';
            $this->usNombre = '';
            $this->usPass=''; 
            $this->usMail = '';
            $this->usDeshabilitado = '';
        } 
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($idUsuario)        {
                $this->idUsuario = $idUsuario;
                return $this;
        }
        public function getUsNombre(){
                return $this->usNombre;
        }
        public function setUsNombre($usNombre){
                $this->usNombre = $usNombre;
                return $this;
        }
        public function getUsPass(){
                return $this->usPass;
        }
        public function setUsPass($usPass){
                $this->usPass = $usPass;
                return $this;
        }
        public function getUsMail(){
                return $this->usMail;
        }
        public function setUsMail($usMail){
                $this->usMail = $usMail;
                return $this;
        }
        public function getUsDeshabilitado(){
                return $this->usDeshabilitado;
        }
        public function setUsDeshabilitado($usDeshabilitado){
                $this->usDeshabilitado = $usDeshabilitado;
                return $this;
        }
        public function getMensajeOperacion()
        {
                return $this->mensajeOperacion;
        }
        public function setMensajeOperacion($mensajeOperacion){
                $this->mensajeOperacion = $mensajeOperacion;
                return $this;
        }

       
        public function setear($idUsuario, $usNombre, $usPass, $usMail, $usDeshabilitado){
            $this->setIdUsuario($idUsuario);
            $this->setUsNombre($usNombre);
            $this->setUsPass($usPass);
            $this->setUsMail($usMail);
            $this->setUsDeshabilitado($usDeshabilitado);
        }
        public function cargar(){
            $resp = false;
            $db=new DataBase();
            
            $sql= "SELECT * FROM usuario WHERE IdUsuario = ".$this->getIdUsuario();
            if ($db->Iniciar()) {
                $res = $db->Ejecutar($sql);
                if($res>-1){
                    if($res>0){
                        $row = $db->Registro();
                        $this->setear($row['IdUsuario'], $row['UsNombre'],$row['UsPass'],$row['UsMail'],$row['UsDeshabilitado']);
                    }   
                }
            } else {
                $this->setmensajeoperacion("Error::usuario->cargar: ".$db->getError());
            }
            return $resp;
        }
        public function insertar()
        {
            $resp = false;
            $db = new DataBase();
            $query = "INSERT INTO usuario(IdUsuario, UsNombre, UsPass, UsMail, UsDeshabilitado)  
                  VALUES('"
                . $this->getIdUsuario() . "', '"
                . $this->getUsNombre() . "', '"
                . $this->getUsPass() . "', '"
                . $this->getUsMail() . "', '"
                . $this->getUsDeshabilitado() . "'
            );";
            if ($db->Iniciar()) {
                if ($dni = $db->Ejecutar($query)) {
                    $this->setIdUsuario($dni);
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("ERROR::usuario->insertar ejecutar: " . $db->getError());
                }
            } else {
                $this->setmensajeoperacion("ERROR::usuario->insertar iniciar: " . $db->getError());
            }
            return $resp;
        }           
        public function eliminar()
        {
            $resp = false;
            $db = new DataBase();
            $query = "DELETE FROM usuario WHERE IdUsuario=" . $this->getIdUsuario();
            if ($db->Iniciar()) {
                if ($db->Ejecutar($query)) {
                    $resp = true;
                } else {
                    $this->setMensajeoperacion("ERROR::usuario => eliminar ejecutar: " . $db->getError());
                }
            } else {
                $this->setMensajeoperacion("ERROR::usuario => eliminar insertar: " . $db->getError());
            }
            return $resp;
        }
        public static function listar($parameter = "")
        {
            $usuariorray = array();
            $db = new DataBase();
            $query = "SELECT * FROM usuario ";
            if ($parameter != "") {
                $query .= 'WHERE ' . $parameter;
            }
            $res = $db->Ejecutar($query);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $db->Registro()) {
                        $obj = new Usuario();
                        $obj->setear(
                            $row['IdUsuario'],
                            $row['UsNombre'],
                            $row['UsPass'],
                            $row['UsMail'],
                            $row['UsDeshabilitado'],
                        );
                        array_push($usuarioArray, $obj);
                    }
                }
            } else {
                $this->setMensajeoperacion("ERROR::usuario => listar: " . $db->getError());
            }
            return $usurioArray;
        }
        //falta la funcion deshabilitar
        public function modificar(){
            $resp = false;
            $sql="UPDATE usuario SET usnombre='".$this->getusnombre()."' ,uspass='".$this->getuspass()."',usmail='".$this->getusmail()."' ,usdeshabilitado='".$this->getusdeshabilitado()."'  ".
                " WHERE idusuario=".$this->getidusuario();
            if ($this->Iniciar()) {
                echo $sql;
                if ($this->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Especie->modificar: ".$this->getError());
                }
            } else {
                $this->setmensajeoperacion("Especie->modificar: ".$this->getError());
            }
            return $resp;
        }
        
    }
?>