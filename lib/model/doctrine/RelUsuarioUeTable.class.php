<?php

class RelUsuarioUeTable extends Doctrine_Table
{
	public function getCodUE($usuario){
        $q = $this->createQuery('d') 
		->select('d.cod_ue_id as cod_ue')
        ->where('d.usuario_id = ? ',$usuario);        
        return $q->fetchOne();
    }

}