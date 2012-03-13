<?php

class SdatRdeInscripcionTable extends Doctrine_Table
{
	public function getInscripcion($rude,$codigo_ue) {
        $q = $this->createQuery('d')
		//->select('codigo_rude_id as codigo_rude, cod_ue_id as cod_ue')
        ->where('d.codigo_rude_id = ? AND d.cod_ue_id = ? ',array($rude,$codigo_ue));
        return $q->fetchOne();
    }
}