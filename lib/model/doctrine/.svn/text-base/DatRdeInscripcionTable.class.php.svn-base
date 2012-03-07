<?php

class DatRdeInscripcionTable extends Doctrine_Table
{

    /**
  * Total de inscritos en una unidad educativa
  *
  * @param $gestion la gestion de la inscripci�n
  *        $ue la unidad educativa
  */
    public function getTotalInscritosEfectivosHumanistico($ue,$subcea,$gestion,$periodo) {
        $q = $this->createQuery('d')
        ->select('d.cod_ue_id AS cod_ue_id,d.gestion_id AS gestion_id,d.nivel_id AS nivel_id, d.ciclo_id AS ciclo_id, d.grado_id as grado_id, d.paralelo as paralelo, d.periodo_id as periodo_id,d.sub_cea_id as sub_cea_id,d.turno_id as turno_id, count(d.cod_ue_id) as total')
        ->where('d.cod_ue_id = ? AND d.sub_cea_id = ? AND d.gestion_id = ? AND d.periodo_id = ?',array ($ue, $subcea, $gestion, $periodo))
        ->orderBy('d.nivel_id,d.ciclo_id,d.grado_id,d.paralelo')
        ->groupBy('d.nivel_id')
        ->addGroupBy('d.grado_id')
        ->addGroupBy('d.paralelo')
        ->addGroupBy('d.ciclo_id')
        ->addGroupBy('d.turno_id');
        return $q->fetchArray();
    }

  /**
  * Los c�digos rudes de una determinada unidad educativa
  *
  * @param $gestion la gestion de la inscripci�n
  *        $ue la unidad educativa
  */
    public function getInscritoPorCurso($cod_ue_id,$gestion_id,$nivel_id,$ciclo,$grado_id,$paralelo,$turno) {
        $q = $this->createQuery('d')
        ->select('d.codigo_rude_id as codigo_rude')
        ->where('d.cod_ue_id = ? AND d.gestion_id = ? AND d.nivel_id = ? AND d.ciclo_id = ? AND d.grado_id = ? AND d.paralelo = ? AND d.turno_id = ?',array($cod_ue_id,$gestion_id,$nivel_id,$ciclo,$grado_id,$paralelo,$turno));
        return $q->fetchArray();
    }

    public function getInscritoPorCursoHumanistico($cod_ue_id,$gestion_id,$nivel_id,$ciclo,$grado_id,$paralelo,$turno,$subcea,$periodo) {
        $q = $this->createQuery('d')
        ->select('d.codigo_rude_id as codigo_rude')
        ->where('d.cod_ue_id = ? AND d.gestion_id = ? AND d.nivel_id = ? AND d.ciclo_id = ? AND d.grado_id = ? AND d.paralelo = ? AND d.turno_id = ? AND d.sub_cea_id = ? AND d.periodo_id = ?',array($cod_ue_id,$gestion_id,$nivel_id,$ciclo,$grado_id,$paralelo,$turno,$subcea,$periodo));
        return $q->fetchArray();
    }

    public function getBuscarInscripcionEstudianteExtemporaneo($rude,$gestion) {
        $q = $this->createQuery('d')
        ->where('d.codigo_rude_id = ? AND d.gestion_id = ? AND d.estado_matricula_fin_id = 4',array($rude,$gestion));
        return $q->fetchOne();
    }

    public function getListaInscritoEliminar($rude,$gestion,$usuario){
        $q = $this->createQuery('d')
        ->where('d.codigo_rude_id = ? AND d.gestion_id = ? ',array($rude,$gestion))
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario)
        ->andWhere('d.nivel_id in (5,15)');
        return $q->execute();
    }

    public function getInscripcionPorGestionPeriodo($codigorude,$gestion,$periodo) {
    	$s = $this->createQuery('d')
        ->Where('d.codigo_rude_id = ? AND d.gestion_id = ? AND periodo_id = ?', array ($codigorude,$gestion, $periodo));
        return $s->execute();
    }


    public function getBuscarInscripcionModificarCurso($rude,$gestion,$usuario,$periodo){
        $q = $this->createQuery('d')
        ->where('d.codigo_rude_id = ? AND d.gestion_id = ? AND d.estado_matricula_fin_id = 4 AND d.periodo_id = ?',array($rude,$gestion,$periodo))
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario)
        ->andWhere('d.nivel_id in (5,15)');
        return $q->fetchOne();
    }
    
    public function getListainscripcionesparacambio($codigoRude,$gestion,$usuario) {
    	$s = $this->createQuery('d')
      ->Where('d.codigo_rude_id = ?',array($codigoRude))
      ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario)
      ->orderBy('d.gestion_id desc');
      return $s->execute();
    }

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
    *	Lista historial de inscripciones de un estudiante ordenados por gestiï¿½n
    *
    */
    public function getListainscripcionesadultos($codigoRude) {
    	$s = $this->createQuery('d')

      ->Where('d.codigo_rude_id = ?', $codigoRude)
      ->andWhere('d.nivel_id in (5,15)')
      ->orderBy('d.gestion_id desc');
      return $s->fetchArray();
    }
    
    public function getListaBachilleresAlternativa($ue, $gestion){
        $q = $this->createQuery('d')
        ->leftJoin('d.DatRdeEstudiante c')
        ->where('d.cod_ue_id = ? and d.gestion_id = ?',array ($ue,$gestion))
        ->andWhere('(d.nivel_id = 5 AND d.grado_id = 2 AND d.ciclo_id = 2) OR (d.nivel_id = 15 AND d.grado_id = 3 AND d.ciclo_id = 2)')
        ->andWhere('d.estado_matricula_fin_id IN (4,5,11)')
        ->orderBy('c.paterno,c.materno,c.nombre');
        return $q;
    }
}
