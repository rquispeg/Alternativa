<?php

class DatIfrJurisdiccionAdministrativaTable extends Doctrine_Table
{
    public function getDistritos($CodLeId,$GestionId){
        $q = $this->createQuery('c')->where('c.cod_le_id = ? and c.gestion_id = ?',array($CodLeId,$GestionId));
        return $q->fetchOne();
    }
}