<?php
class Session
{
    function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    function iniciar($nombreUsuario, $psw)
    {
        $resp = false;
        $user = new AbmUsuario();

        $searchUser = array('usNombre' => $nombreUsuario, 'usPass' => $psw);
        $userObject = $user->buscar($searchUser);


        if (count($userObject) > 0) {
            $dateDisabled = $userObject[0]->getUsDeshabilitado();
            if (is_null($dateDisabled)) {
                $_SESSION['idUsuario'] = $userObject[0]->getIdUsuario();
                $_SESSION['usuario'] = $nombreUsuario;
                $resp = true;
            }
        } else {
            $this->cerrar();
        }
        return $resp;
    }

    function validar()
    {
        if ($this->activa()) {
            if (isset($_SESSION['usuario']) && isset($_SESSION['idUsuario'])) {
                return true;
            }
        }
        return false;
    }

    function activa()
    {
        return session_status() === PHP_SESSION_ACTIVE;
    }

    function getUsuario()
    {
        return isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
    }

    function getRol()
    {
        $rols = array();
        if ($this->validar()) {
            $param['idusuario'] = $_SESSION['usuario'];
            $rolUser = new AbmUsuarioRol();
        }
    }

    function cerrar()
    {
        session_unset();
        session_destroy();
    }
}
