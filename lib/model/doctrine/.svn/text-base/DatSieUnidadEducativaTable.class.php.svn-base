<?php

class DatSieUnidadEducativaTable extends Doctrine_Table
{
    public function getSubcentros($gestion,$ue,$periodo) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.sub_cea AS sub_cea')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ?',array ($gestion,$ue,$periodo));
        return $q->execute();
    }
}