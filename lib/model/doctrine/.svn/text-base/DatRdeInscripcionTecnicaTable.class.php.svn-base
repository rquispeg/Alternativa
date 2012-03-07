<?php

class DatRdeInscripcionTecnicaTable extends Doctrine_Table
{
     /**
    *	Lista historial de inscripciones de un estudiante ordenados por gestiï¿½n
    *
    */
    public function getListainscripciones($codigoRude) {
    	$s = $this->createQuery('d')
      ->Where('d.codigo_rude_id = ?', $codigoRude)
      ->orderBy('d.gestion_id desc');
      return $s->fetchArray();
    }

      /**
  * Total de inscritos en una unidad educativa
  *
  * @param $gestion la gestion de la inscripci�n
  *        $ue la unidad educativa
  */
    public function getTotalInscritosEfectivosTecnica($ue,$subcea,$gestion,$periodo) {
        $q = $this->createQuery('d')
        ->select('d.gestion_id AS gestion_id,d.periodo_id AS periodo_id, d.sub_cea_id AS sub_cea_id,d.nivel_id AS nivel_id, d.ciclo_id AS ciclo_id, d.grado_id as grado_id, d.paralelo as paralelo, d.turno_id as turno_id, d.curso_oferta_id as curso_oferta_id, count(d.cod_ue_id) as total')
        ->where('d.cod_ue_id = ? AND d.sub_cea_id = ? AND d.gestion_id = ? AND d.periodo_id = ?',array ($ue, $subcea, $gestion, $periodo))
        ->orderBy('d.nivel_id,d.ciclo_id,d.grado_id,d.paralelo')
        ->groupBy('d.nivel_id')
        ->addGroupBy('d.grado_id')
        ->addGroupBy('d.paralelo')
        ->addGroupBy('d.ciclo_id')
        ->addGroupBy('d.turno_id')
        ->addGroupBy('d.curso_oferta_id');
        return $q->fetchArray();
    }

    /**
  * Los c�digos rudes de una determinada unidad educativa
  *
  * @param $gestion la gestion de la inscripci�n
  *        $ue la unidad educativa
  */
    public function getInscritoPorCurso($cod_ue_id,$gestion_id,$nivel_id,$ciclo,$grado_id,$paralelo,$turno,$oferta) {
        $q = $this->createQuery('d')
        ->select('d.codigo_rude_id as codigo_rude')
        ->where('d.cod_ue_id = ? AND d.gestion_id = ? AND d.nivel_id = ? AND d.ciclo_id = ? AND d.grado_id = ? AND d.paralelo = ? AND d.turno_id = ? AND d.curso_oferta_id = ?',array($cod_ue_id,$gestion_id,$nivel_id,$ciclo,$grado_id,$paralelo,$turno,$oferta));
        return $q->fetchArray();
    }

    public function getListaInscritoEliminar($rude,$gestion,$usuario){
        $q = $this->createQuery('d')
        ->where('d.codigo_rude_id = ? AND d.gestion_id = ? ',array($rude,$gestion))
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario);
        return $q->execute();
    }

    public function getBuscarInscripcionModificarCurso($rude,$gestion,$usuario,$periodo){
        $q = $this->createQuery('d')
        ->where('d.codigo_rude_id = ? AND d.gestion_id = ? AND d.estado_matricula_fin_id = 4 AND d.periodo_id = ?',array($rude,$gestion,$periodo))
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario);
        return $q->fetchOne();
    }



}