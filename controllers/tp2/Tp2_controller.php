<?php
    class Tp2_controller{
        public function controlUsuario ($nombreUsuario,$contraseña,$usuarios){
            foreach ($usuarios as $usuario) {
                if ($usuario['usuario'] === $nombreUsuario && $usuario['clave'] === $contraseña) {
                    return "Bienvenido";
                }
            }
            return "Acceso denegado";

        }
    }

?>
