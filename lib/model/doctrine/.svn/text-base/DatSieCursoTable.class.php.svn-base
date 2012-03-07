<?php

class DatSieCursoTable extends Doctrine_Table
{

    public function getSubcentros($gestion,$ue,$periodo) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.sub_cea_id AS sub_cea_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ?',array ($gestion,$ue,$periodo));
        return $q->execute();
    }

    public function getModalidad($ue,$gestion,$periodo,$subcea) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.nivel_id AS nivel_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ? and c.sub_cea_id = ?',array ($gestion,$ue,$periodo,$subcea));
        return $q->execute();
    }

    public function getNiveles($ue,$gestion,$periodo,$subcea,$nivel) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.ciclo_id AS ciclo_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ? and c.sub_cea_id = ? and c.nivel_id = ? ',array ($gestion,$ue,$periodo,$subcea,$nivel));
        return $q->execute();
    }

    public function getGrados($ue,$gestion,$periodo,$subcea,$nivel,$ciclo) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.grado_id AS grado_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ? and c.sub_cea_id = ? and c.nivel_id = ? and c.ciclo_id = ?',array ($gestion,$ue,$periodo,$subcea,$nivel,$ciclo));
        return $q->execute();
    }

    public function getParalelo($ue,$gestion,$periodo,$subcea,$nivel,$ciclo,$grado) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.paralelo AS paralelo')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ? and c.sub_cea_id = ? and c.nivel_id = ? and c.ciclo_id = ? and c.grado_id = ?',array ($gestion,$ue,$periodo,$subcea,$nivel,$ciclo,$grado));
        return $q->execute();
    }

    public function getTurno($ue,$gestion,$periodo,$subcea,$nivel,$grado,$paralelo) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.turno_id AS turno_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ? and c.sub_cea_id = ? and c.ciclo_id = ? and c.grado_id = ? and c.paralelo = ?',array ($gestion,$ue,$periodo,$subcea,$nivel,$grado,$paralelo));
        return $q->execute();
    }

    

/**
  * Cursos habilidados para una unidad determinada
  *
  * @param $ue cï¿½digo de la unidad educativa
  *        $gestiï¿½n
  *        $operativo
  */
    public function getCursosHabilitados($gestion,$ue,$operativo) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.nivel_id AS nivel_id, c.grado_id as grado_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.operativo_id = ?',array ($gestion,$ue,$operativo))
        ->orderBy('c.nivel_id,c.grado_id');
        return $q->fetchArray();
    }

    public function getMultigrado($gestion,$ue,$operativo) {
        $q = $this->createQuery('c')
        ->select('c.nivel_id AS nivel_id, c.grado_id as grado_id, c.multigrado as multigrado')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.operativo_id = ?',array ($gestion,$ue,$operativo));
        return $q->fetchArray();
    }
}