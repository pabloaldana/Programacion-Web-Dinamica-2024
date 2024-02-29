<?php
class Usuario
{
    private $idUsuario;
    private $usNombre;
    private $usPass;
    private $usMail;
    private $usDeshabilitado;
    private $mensajeOperacion;

    public function __construct()
    {
        $this->idUsuario = '';
        $this->usNombre = '';
        $this->usPass = '';
        $this->usMail = '';
        $this->usDeshabilitado = '';
    }
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }
    public function getUsNombre()
    {
        return $this->usNombre;
    }
    public function setUsNombre($usNombre)
    {
        $this->usNombre = $usNombre;
        return $this;
    }
    public function getUsPass()
    {
        return $this->usPass;
    }
    public function setUsPass($usPass)
    {
        $this->usPass = $usPass;
        return $this;
    }
    public function getUsMail()
    {
        return $this->usMail;
    }
    public function setUsMail($usMail)
    {
        $this->usMail = $usMail;
        return $this;
    }
    public function getUsDeshabilitado()
    {
        return $this->usDeshabilitado;
    }
    public function setUsDeshabilitado($usDeshabilitado)
    {
        $this->usDeshabilitado = $usDeshabilitado;
        return $this;
    }
    public function getMensajeOperacion()
    {
        return $this->mensajeOperacion;
    }
    public function setMensajeOperacion($mensajeOperacion)
    {
        $this->mensajeOperacion = $mensajeOperacion;
        return $this;
    }


    public function setear($idUsuario, $usNombre, $usPass, $usMail, $usDeshabilitado)
    {

        $this->setIdUsuario($idUsuario);
        $this->setUsNombre($usNombre);
        $this->setUsPass($usPass);
        $this->setUsMail($usMail);
        $this->setUsDeshabilitado($usDeshabilitado);
    }
    public function cargar()
    {
        $resp = false;
        $db = new DataBaseTp5();

        $sql = "SELECT * FROM usuario WHERE IdUsuario = " . $this->getIdUsuario();
        if ($db->Iniciar()) {
            $res = $db->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $db->Registro();
                    $this->setear($row['IdUsuario'], $row['UsNombre'], $row['UsPass'], $row['UsMail'], $row['UsDeshabilitado']);
                }
            }
        } else {
            $this->setmensajeoperacion("Error::usuario->cargar: " . $db->getError());
        }
        return $resp;
    }
    public function insertar()
    {
        $resp = false;
        $db = new DataBaseTp5();
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
        $db = new DataBaseTp5();
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
        $usuarioArray = array();
        $db = new DataBaseTp5();
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
                        $row['idUsuario'],
                        $row['usNombre'],
                        $row['usPass'],
                        $row['usMail'],
                        $row['usDeshabilitado'],
                    );

                    array_push($usuarioArray, $obj);
                }
            }
        } else {
            $this->setMensajeoperacion("ERROR::usuario => listar: " . $db->getError());
        }
        return $usuarioArray;
    }
    //falta la funcion deshabilitar
    public function modificar()
    {
        $resp = false;
        $db = new DataBaseTp5();

        $query = "UPDATE usuario SET 
                usNombre='" . $this->getUsNombre() . "', 
                usPass='" . $this->getUsPass() . "', 
                usMail='" . $this->getUsMail() . "'";

        $usDeshabilitado = $this->getUsDeshabilitado();

        if ($usDeshabilitado !== 'null') {
            $query .= ", usDeshabilitado='" . $usDeshabilitado . "'";
        }

        $query .= " WHERE idUsuario=" . $this->getIdUsuario();
        if ($db->Iniciar()) {
            if ($db->Ejecutar($query)) {
                //aca no llega
                $resp = true;
            } else {
                $this->setMensajeoperacion("ERROR::Usuario => modificar ejecutar: " . $db->getError());
            }
        } else {
            $this->setMensajeoperacion("ERROR::Usuario => modificar insertar: " . $db->getError());
        }

        return $resp;
    }
    public function deshabilitar()
    {
        $resp = false;
        $db = new DataBaseTp5();
        $newDate = date('Y-m-d H:i:s');
        $query = "UPDATE usuario SET 
                usDeshabilitado='" . $newDate . "' WHERE idUsuario=" . $this->getIdUsuario();

        if ($db->Iniciar()) {
            if ($db->Ejecutar($query)) {
                $resp = true;
            } else {
                $this->setMensajeoperacion("ERROR::Usuario => deshabilitar ejecutar: " . $db->getError());
            }
        } else {
            $this->setMensajeoperacion("ERROR::Usuario => deshabilitar insertar: " . $db->getError());
        }
        return $resp;
    }
}
