<?php

class ClaEstadoMatriculaTable extends Doctrine_Table
{
    public function getListaEstadoMatricula()
    {
        $q = $this->createQuery('c')
        ->where('c.id_estado_matricula IN (11,5,6,10,9,4)');
        return $q->execute();
    }
}