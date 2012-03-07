<?php

class DatUsuGrupoTable extends Doctrine_Table
{
    /*
     * author Ing. Ivan Callapa Quiróz
     * method Obtiene el grupo del usuario
     * param usuario_id  =  Código del usuario
     */
    public function getGrupoRol($usuario_id)
    {
        $q = $this->createQuery('c')
        ->leftJoin('c.RelUsuarioGrupo j')
        ->where('j.usuario_id = ? ', $usuario_id);
        return $q->fetchOne();
    }
}