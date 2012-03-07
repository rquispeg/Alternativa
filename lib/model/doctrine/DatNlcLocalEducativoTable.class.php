<?php

class DatNlcLocalEducativoTable extends Doctrine_Table
{
    public function getNucleo($CodLeId,$GestionId){
        $q = $this->createQuery('c')->where('c.cod_le_id = ? and c.gestion_id = ?',array($CodLeId,$GestionId));
        return $q->fetchOne();
    }
}