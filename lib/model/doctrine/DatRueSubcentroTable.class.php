<?php

class DatRueSubcentroTable extends Doctrine_Table
{
	public function getSubCentroEducacion($usuario){
        $q = $this->createQuery('d')
		->innerJoin('d.DatRueUnidadEducativa e')
		->innerJoin('e.RelUsuarioUe f')
        ->where('f.usuario_id = ?',$usuario);        
        return $q;
    }
}