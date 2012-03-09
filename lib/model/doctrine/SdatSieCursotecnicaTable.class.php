<?php

class SdatSieCursotecnicaTable extends Doctrine_Table
{
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
	
	public function getParalelo($ue,$gestion,$periodo,$subcea,$nivel,$ciclo,$grado,$especialidad) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.paralelo AS paralelo')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ? and c.sub_cea_id = ? and c.nivel_id = ? and c.ciclo_id = ? and c.grado_id = ? and c.curso_oferta_id = ? ',array ($gestion,$ue,$periodo,$subcea,$nivel,$ciclo,$grado,$especialidad));
        return $q->execute();
    }
	
	public function getEspecialidades($ue,$gestion,$periodo,$subcea,$nivel,$ciclo,$grado) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.curso_oferta_id AS curso_oferta_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ? and c.sub_cea_id = ? and c.nivel_id = ? and c.ciclo_id = ? and c.grado_id = ?',array ($gestion,$ue,$periodo,$subcea,$nivel,$ciclo,$grado));
        return $q->execute();
    }
	
	public function getTurno($ue,$gestion,$periodo,$subcea,$nivel,$ciclo,$grado,$especialidad,$paralelo) {
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.turno_id AS turno_id')
        ->where('c.gestion_id = ? and c.cod_ue_id = ? and c.periodo_id = ? and c.sub_cea_id = ? and c.nivel_id = ? and c.ciclo_id = ? and c.grado_id = ? and c.curso_oferta_id = ? and c.paralelo = ?',array ($gestion,$ue,$periodo,$subcea,$nivel,$ciclo,$grado,$especialidad,$paralelo));
        return $q->execute();
    }
}