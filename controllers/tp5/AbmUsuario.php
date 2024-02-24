<?php
class AbmUsuario
{

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Usuario
     */
    private function cargarObjeto($param)
    {
        $obj = null;
        if (array_key_exists('idUsuario', $param)) {
            $obj = new Usuario();
            $obj->setear(
                $param['idUsuario'],
                $param['usNombre'],
                $param['usPass'],
                $param['usMail'],
                $param['usDeshabilitado'],
            );
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Usuario
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['idUsuario'])) {
            $obj = new Usuario();
            $obj->setear($param['idUsuario'], null, null, null, null);
        }
        return $obj;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['idUsuario']))
            $resp = true;
        return $resp;
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
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $where = [];
        if ($param !== NULL) {
            if (isset($param['idUsuario']))
                $where[] = " idUsuario = '" . $param['idUsuario'] . "'";
            if (isset($param['usNombre']))
                $where[] = " usNombre = '" . $param['usNombre'] . "'";
            if (isset($param['usPass']))
                $where[] = " usPass = '" . $param['usPass'] . "'";
            if (isset($param['usMail']))
                $where[] = " usMail = '" . $param['usMail'] . "'";
            if (isset($param['usDeshabilitado']))
                $where[] = " usDeshabilitado = '" . $param['usDeshabilitado'] . "'";
        }
        $whereClause = implode(" AND ", $where);
        $arreglo = Usuario::listar($whereClause);
        return $arreglo;
    }

    public function deshabilitar($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $personObject = $this->cargarObjetoConClave($param);
            if ($personObject != null and $personObject->deshabilitar()) {
                $resp = true;
            }
        }
        return $resp;
    }
}
