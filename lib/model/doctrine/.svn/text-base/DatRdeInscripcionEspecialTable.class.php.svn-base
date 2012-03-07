<?php

class DatRdeInscripcionEspecialTable extends Doctrine_Table
{
    public function getTotalInscritosEfectivos($gestion,$ue) {
        $q = $this->createQuery('d')
        ->select('d.gestion_id AS gestion_id,d.nivel_id AS nivel_id, d.ciclo_id AS ciclo_id, d.grado_id as grado_id, d.paralelo as paralelo,d.ciclo_id as ciclo,d.turno_id as turno_id,d.discapacidad_id as discapacidad_id, count(d.cod_ue_id) as total')
        ->where('d.gestion_id = ? and d.cod_ue_id = ?',array ($gestion,$ue))
        ->orderBy('d.nivel_id,d.ciclo_id,d.grado_id,d.paralelo')
        ->groupBy('d.nivel_id')
        ->addGroupBy('d.grado_id')
        ->addGroupBy('d.paralelo')
        ->addGroupBy('d.ciclo_id')
        ->addGroupBy('d.turno_id')
        ->addGroupBy('d.discapacidad_id');
        return $q->fetchArray();
    }

    public function getBuscarInscripcionEstudianteExtemporaneo($rude,$gestion) {
        $q = $this->createQuery('d')
        ->where('d.codigo_rude_id = ? AND d.gestion_id = ? AND d.estado_matricula_fin_id = 4',array($rude,$gestion));
        return $q->fetchOne();
    }

    public function getInscripcionPorGestion($codigorude,$gestion) {
    	$s = $this->createQuery('d')
        ->Where('d.codigo_rude_id = ? AND d.gestion_id = ?', array ($codigorude,$gestion));
        return $s->execute();
    }

    public function getListaInscritoEliminar($rude,$gestion,$usuario){
        $q = $this->createQuery('d')
        ->where('d.codigo_rude_id = ? AND d.gestion_id = ? ',array($rude,$gestion))
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario);
        return $q->execute();
    }

    public function getBuscarInscripcionModificarCurso($rude,$gestion,$usuario){
        $q = $this->createQuery('d')
        ->where('d.codigo_rude_id = ? AND d.gestion_id = ? AND d.estado_matricula_fin_id = 4 ',array($rude,$gestion))
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario);
        return $q->fetchOne();
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
  * Los cï¿½digos rudes de una determinada unidad educativa
  *
  * @param $gestion la gestion de la inscripciï¿½n
  *        $ue la unidad educativa
  */
    public function getInscritoPorCurso($cod_ue_id,$gestion_id,$nivel_id,$ciclo,$grado_id,$paralelo,$turno,$discapacidad) {
        $q = $this->createQuery('d')
        ->select('d.codigo_rude_id as codigo_rude')
        ->where('d.cod_ue_id = ? AND d.gestion_id = ? AND d.nivel_id = ? AND d.ciclo_id = ? AND d.grado_id = ? AND d.paralelo = ? AND d.turno_id = ? AND d.discapacidad_id = ?',array($cod_ue_id,$gestion_id,$nivel_id,$ciclo,$grado_id,$paralelo,$turno,$discapacidad));
        return $q->fetchArray();
    }

}