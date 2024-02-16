<?php
class AbmAuto{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $objAuto = null;
           
        if( array_key_exists('patente',$param)){
            $objAuto = new Auto();
            $autos = $objAuto->listar("patente = '".$param['patente']."'");
            $obj->setear(
                $autos[0]->getPatente(), 
                $autos[0]->getMarca(),
                $autos[0]->getModelo(),
                $autos[0]->getObjetoDuenio(),
            );
        }
        return $objAuto;
    }    
     /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtAuto = $this->cargarObjeto($param);
            
            $objPersona = new Persona();
            $objPersona ->setNroDni ($param['dniDuenio']);
            $objPersona ->cargar();

            $objAuto -> setObjetoDuenio( $objPersona);
            if ($objAuto!= null and $objAuto->modificar()){
                $resp=true;
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
        if (isset($param['patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $objtAuto = $this->cargarObjeto($param);
        if ($objtAuto!=null and $elObjtAuto->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    // public function baja($param){
    //     $resp = false;
    //     if ($this->seteadosCamposClaves($param)){
    //         $elObjtAuto = $this->cargarObjetoConClave($param);
    //         if ($elObjtAuto!=null and $elObjtAuto->eliminar()){
    //             $resp = true;
    //         }
    //     }
        
    //     return $resp;
    // }
    
   
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = "";
        // $patente = $param['Patente'];
        // echo $patente;
        if ($param !== NULL){
            if  (isset($param['Patente']))
                $where .=" Patente ='".$param['Patente'] . "'";
            if  (isset($param['marca']))
            $where .=" Marca ='".$param['Marca'] . "'";
            if  (isset($param['modelo']))
            $where .=" Modelo ='".$param['Modelo'] . "'";
            if  (isset($param['dniDuenio']))
            $where .=" DniDuenio ='".$param['DniDuenio'] . "'";
        }
        //echo "buscar de ABMauto";
        $arreglo = Auto::listar($where); 
        

        return $arreglo;   
        
    }
    
}
?>