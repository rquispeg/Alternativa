<?php

class DatAltCursoofertaTable extends Doctrine_Table
{
    public function getEspecialidades($cod_ue_id)
    {
        $q = $this->createQuery('d')                
        //->select('curso_oferta_id as curso_oferta')
        ->where('d.cod_ue_id = ?',$cod_ue_id);        
        return $q->execute();
    }
}