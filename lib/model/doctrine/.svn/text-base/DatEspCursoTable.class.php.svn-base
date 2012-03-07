<?php

class DatEspCursoTable extends Doctrine_Table
{
    public function getNiveles($ue,$gestion) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.ciclo_id AS ciclo_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ?',array ($gestion,$ue));
        return $q->execute();
    }

    public function getGrados($ue,$ciclo,$gestion) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.grado_id AS grado_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.ciclo_id = ?',array ($gestion,$ue,$ciclo));
        return $q->execute();
    }

    public function getDiscapacidad($ue,$ciclo,$gestion,$grado) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.discapacidad_id AS discapacidad_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.ciclo_id = ? and c.grado_id = ?',array ($gestion,$ue,$ciclo,$grado));
        return $q->execute();
    }

    public function getParalelo($ue,$gestion,$ciclo,$grado,$discapacidad) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.paralelo AS paralelo')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.ciclo_id = ? and c.grado_id = ? and c.discapacidad_id = ?',array ($gestion,$ue,$ciclo,$grado,$discapacidad));
        return $q->execute();
    }

    public function getTurno($ue,$gestion,$ciclo,$grado,$discapacidad,$paralelo) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.turno_id AS turno_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.ciclo_id = ? and c.grado_id = ? and c.discapacidad_id = ? and c.paralelo = ?',array ($gestion,$ue,$ciclo,$grado,$discapacidad,$paralelo));
        return $q->execute();
    }
}