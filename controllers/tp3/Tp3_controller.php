<?php
    class Tp3_controller{
        private $EXTENSION_ARCHIVO = ['doc','pdf'];
        private $EXTENSION_IMG = ['jpg', 'png', 'jpeg'];
        private $TAM_MAXIMO = 2*1024*1024; // 2MB
        private $CARPETA = __DIR__ . '/../../views/tp3/cargas/'; //ACA GUARDO LAS IMAGENES
        
        public function cargaArchivo($nombre,$tamaño,$carpetaTemporal){
            $inf_archivo = pathinfo($nombre);
            $extensionDeArchivo = $inf_archivo['extension'];

            if (in_array($extensionDeArchivo,$this->EXTENSION_ARCHIVO)){
                if($tamaño <= $this->TAM_MAXIMO){
                    $ubicacion = $this->CARPETA . $nombre;
                    if (move_uploaded_file($carpetaTemporal, $ubicacion)) {
                        $resp =  "Archivo guardado con éxito";
                    } else {
                        // Ocurrió un error al intentar mover el archivo.
                        //echo 'Error de PHP: ' . error_get_last()['message'] . "<br />";
                        $resp = "ERROR al guardar el archivo";
                    }

                }else{
                    $resp = "ERROR: El archivo supera los 2 Mb permitidos";
                }
            }else{
                $resp = "ERROR: El formato del archivo no es el permitido";
            }
            return $resp;
        }
    }


?>