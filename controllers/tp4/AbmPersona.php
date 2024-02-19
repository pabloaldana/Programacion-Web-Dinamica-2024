<?php
class AbmPersona{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param)
    {
        $obj = null;
        if (array_key_exists('dni', $param)) {
            $obj = new Persona();
            $obj->setear(
                $param['dni'],
                $param['apellido'],
                $param['nombre'],
                $param['fechaNac'],
                $param['telefono'],
                $param['direccion'],
            );
        }
        return $obj;
    }    
     /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $personObject = $this->cargarObjeto($param);
            if ($personObject != null and $personObject->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['dni']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        
        $resp = false;
        $objPersona = $this->cargarObjeto($param);
        if ($objPersona!=null and $objPersona->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    
   
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['dni']))
                $where =" NroDni ='".$param['dni'] . "'";
            if  (isset($param['apellido']))
            $where =" Apellido =".$param['apellido'] . "'";
            if  (isset($param['nombre']))
            $where =" Nombre =".$param['nombre'] . "'";
            if  (isset($param['fechaNac']))
            $where =" fechaNac =".$param['fechaNac'] . "'";
            if  (isset($param['telefono']))
            $where =" Telefono =".$param['telefono'] . "'";
            if  (isset($param['direccion']))
            $where =" Direccion =".$param['direccion'] . "'";
        }
        //echo  $where;
        $arreglo = Persona::listar($where);  
        //verEstructura($arreglo);
        return $arreglo;   

    }
}
?>