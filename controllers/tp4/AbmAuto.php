<?php
class AbmAuto
{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param)
    {

        $objAuto = null;
        if (array_key_exists('patente', $param)) { //complear con todos los parametros
            $objAuto = new Auto();
            $persona = new Persona();

            $persona->setNroDni($param['dniDuenio']);
            $persona->cargar();
            $objAuto->setear(
                $param['patente'],
                $param['marca'],
                $param['modelo'],
                $persona,
            );
        }
        return $objAuto;
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
            $objAuto = $this->cargarObjeto($param);

            if ($objAuto != null and $objAuto->modificar()) {
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

    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['patente']))
            $resp = true;
        return $resp;
    }

    /**
     * 
     * @param array $param
     */
    public function alta($param)
    {

        $resp = false;
        $objtAuto = $this->cargarObjeto($param);
        if ($objtAuto != null and $objtAuto->insertar()) {
            $resp = true;
        }
        return $resp;
    }


    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param)
    {
        $where = "";
        if ($param !== NULL) {
            if (isset($param['Patente']))
                $where = " Patente ='" . $param['Patente'] . "'";
            if (isset($param['marca']))
                $where = " Marca ='" . $param['Marca'] . "'";
            if (isset($param['modelo']))
                $where = " Modelo ='" . $param['Modelo'] . "'";
            if (isset($param['DniDuenio']))
                $where = " DniDuenio ='" . $param['DniDuenio'] . "'";
        }

        $arreglo = Auto::listar($where);

        return $arreglo;
    }
}
