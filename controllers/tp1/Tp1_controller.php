<?php
    class Tp1_controller{
        public function ejercicio1 ($nro){
            if ($nro > 0){
                $resp = "es positivo";
            }
            else{
                if ($nro < 0) {
                   $resp= "es negativo"; 
                }else{
                   $resp="es cero";
                }
            }
            return $resp;
        }
        public function ejercicio2 ($horasDeLaSemana){
            $suma = 0;
            $claves = array_keys($horasDeLaSemana);
            foreach ($claves as $clave) {
                $suma += $horasDeLaSemana[$clave];
            }
            return $suma;
        }
        public function ejercicio3 ($datos){
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos ['edad'];
            $direccion = $datos ['direccion'];

            return "Hola, yo soy $nombre , $apellido tengo $edad años y vivo en $direccion";
        }
        public function ejercicio4 ($datos){
            $legal="";
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos ['edad'];
            $direccion = $datos ['direccion'];
            if ($edad>=18)
                $legal="mayor de edad";
            else
                $legal = "menor de edad";

            return "Hola, yo soy $nombre , $apellido tengo $edad años y vivo en $direccion y soy $legal";
        }
        public function ejercicio5 ($datos){
            $legal="";
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos ['edad'];
            $direccion = $datos ['direccion'];
            if ($edad>=18)
                $legal="mayor de edad";
            else
                $legal = "menor de edad";

            return "Hola, yo soy $nombre , $apellido tengo $edad años, vivo en $direccion y soy $legal";
        }
        public function ejercicio6 ($datos){
            $legal="";
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos ['edad'];
            $direccion = $datos ['direccion'];
            if ($edad>=18)
                $legal="mayor de edad";
            else
                $legal = "menor de edad";

            $deportes = $datos['sports'];
            $cantDepotes = count($deportes);
            

            return "Hola, yo soy $nombre , $apellido tengo $edad años, vivo en $direccion, soy $legal <br/> Practico $cantDepotes deportes.";
        }
        public function ejercicio7 ($datos){
            $nro1 = $datos['numero1'];
            $nro2 = $datos['numero2'];
            $operador = $datos['operador'];

            if (is_numeric($nro1) && is_numeric($nro2)){
                if($operador ===  'suma'){
                    $resultado= $nro1 + $nro2;
                }elseif($operador==='resta'){
                    $resultado=$nro1 - $nro2;
                }elseif($operador==='multiplicacion'){
                    $resultado=$nro1 * $nro2;
                }else {//si el operador no es igual a suma o resta o multiplicación mostramos un error
                    $resultado = "Error: Operador incorrecto.";
                }
            }
            else //Si alguno de los dos números no son numéricos mostramos un error
                $resultado = "Error: Datos invalidos.";
            
            return "La respuesta del cálculo es: $resultado";

        }
        public function ejercicio8 ($datos){

        }
    }