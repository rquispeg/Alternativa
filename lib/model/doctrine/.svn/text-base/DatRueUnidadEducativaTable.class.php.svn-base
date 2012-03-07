<?php

class DatRueUnidadEducativaTable extends Doctrine_Table
{

    public function getUnidadesHumanisticaTecnica($ue,$usuario){
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->innerJoin('d.DatRueNivel f')
        ->innerJoin('f.ClaCicloAcreditacion g')
        ->innerJoin('g.ClaNivel h')
        ->innerJoin('h.ClaCiclo i')
        ->where('d.cod_ue like ? AND e.usuario_id = ? AND d.cod_org_curr_id = ?',array($ue.'%',$usuario,'2'))
        ->andWhere('i.id_ciclo in (11,12,13)');
        return $q->fetchArray();
    }

    public function getUnidadesHumanisticaAdultos($ue,$usuario){
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->innerJoin('d.DatRueNivel f')
        ->where('d.cod_ue like ? AND e.usuario_id = ? AND d.cod_org_curr_id = ?',array($ue.'%',$usuario,'2'))
        ->andWhere('f.nivel_id in (5,15)');
        return $q->fetchArray();
    }
    
    public function getCentroEducacion($usuario){
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')        
        ->where('e.usuario_id = ? AND d.cod_org_curr_id = ?',array($usuario,'2'));        
        return $q;
    }
    

    public function getUnidadesEspecial($ue,$usuario){
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->innerJoin('d.DatRueNivel f')
        ->where('d.cod_ue like ? AND e.usuario_id = ? AND d.cod_org_curr_id = ?',array($ue.'%',$usuario,'2'))
        ->andWhere('f.nivel_id in (6,16)');
        return $q->fetchArray();
    }



    public function getUnidadesEducativasAsignadasAlt($usuario,$gestion) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->where('e.usuario_id = ? AND e.cod_ue_id IN (SELECT f.cod_ue_id FROM DatSieCurso f WHERE f.gestion_id = ? AND f.nivel_id in (15,5))',array($usuario,$gestion))
        ->andWhere('d.cod_org_curr_id = ?', 2);
        return $q->execute();
    }

    public function getUnidadesEducativasAsignadasAdultos($usuario) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->where('e.usuario_id = ? ',array($usuario))
        ->andWhere('d.cod_org_curr_id = ?', 2);
        return $q->execute();
    }


    public function getUnidadesEducativasAsignadasSinRude($usuario,$gestion,$periodo) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->innerJoin('d.DatSieUnidadEducativa g')
        ->where('e.usuario_id = ? AND e.cod_ue_id IN (SELECT f.cod_ue_id FROM DatSieCurso f WHERE f.gestion_id = ? AND f.nivel_id in (15,5))',array($usuario,$gestion))
        ->andWhere('d.cod_org_curr_id = ?', 2)
        ->andWhere('g.periodo_id = ?', $periodo)
        ->andWhere('g.gestion_id = ?', $gestion);
        return $q->execute();
    }


    public function getUnidadesEducativasAsignadasTecnica($usuario,$gestion) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->where('e.usuario_id = ? AND e.cod_ue_id IN (SELECT f.cod_ue_id FROM DatAltCursoTecnica f WHERE f.gestion_id = ? AND f.nivel_id in (15,5))',array($usuario,$gestion))
        ->andWhere('d.cod_org_curr_id = ?', 2);
        return $q->execute();
    }

    public function getUnidadesEducativasAsignadasSinRudeTecnica($usuario,$gestion,$periodo) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->innerJoin('d.DatSieUnidadEducativa g')
        ->where('e.usuario_id = ? AND e.cod_ue_id IN (SELECT f.cod_ue_id FROM DatAltCursoTecnica f WHERE f.gestion_id = ? AND f.nivel_id in (15,5))',array($usuario,$gestion))
        ->andWhere('d.cod_org_curr_id = ?', 2)
        ->andWhere('g.periodo_id = ?', $periodo)
        ->andWhere('g.gestion_id = ?', $gestion);
        return $q->execute();
    }

    public function getUnidadesEducativasAsignadasEspecial($usuario,$gestion) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->where('e.usuario_id = ? AND e.cod_ue_id IN (SELECT f.cod_ue_id FROM DatEspCurso f WHERE f.gestion_id = ? AND f.nivel_id in (16,6))',array($usuario,$gestion))
        ->andWhere('d.cod_org_curr_id = ?', 2);
        return $q->execute();
    }



  /**
  * Lista de unidades educativas asignadas a un usuario
  *
  * @param $ue c�digo de la unidad educativa
  *        $usuario c�digo de usuario
  */
    public function getAsignacionUesUsuario($ue,$usuario) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->where('d.cod_ue like ? AND e.usuario_id = ? AND d.cod_org_curr_id = ?',array($ue.'%',$usuario,'2'));
        return $q->fetchArray();
    }

 /**
  * Lista de unidades educativas asignadas a un usuario
  *
  * @param $usuario c�digo de usuario
  */
    public function getUnidadesEducativasAsignadas($usuario,$gestion) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->where('e.usuario_id = ? AND e.cod_ue_id IN (SELECT f.cod_ue_id FROM DatSieCurso f WHERE f.gestion_id = ?)',array($usuario,$gestion));
        return $q->execute();
    }
    
    

  /**
  * Lista de unidades educativas para realizar el traslado de acuerdo al usuario
  * la gestion el nivel y grado
  *
  * @param $gestion gesti�n de la inscripci�n
  *        $usuario c�digo de usuario
  *        $nivel filtrar las unidades que solo tiene el nivel habilitado para el traslado
  *        $grado filtrar las unidades que solo tienen el grado habilitado para el traslado
  *        $ue para quitar la unidad educativa si el traslado es al mismo distrito
  */
    public function getUnidadesTraslados($gestion,$usuario,$nivel,$grado,$ue) {
        $q = $this->createQuery('d')
        ->innerJoin('d.RelUsuarioUe e')
        ->where('e.usuario_id = ?',array($usuario))
        ->andWhere('d.cod_ue IN (SELECT f.cod_ue_id FROM DatSieCurso f WHERE f.gestion_id = ? AND f.nivel_id = ? AND f.grado_id = ?)',array($gestion,$nivel,$grado))
        ->andWhere('d.cod_ue <> ? ',$ue)
        ->orderBy('d.cod_ue');
        return $q->execute();
    }
    
    public function getBuscaue($ue) {
        $q = $this->createQuery('d')
        ->where('d.desc_ue like ?', "%".$ue."%")
        ->orderBy('d.cod_ue');
        return $q->execute();
    }
    
    /**
    * Diplomas - Obtiene las Unidades de un Distrito
    */
    public function getUnidadesDistrito($codDistrito,$gestion) {
        $q = $this->createQuery('u')
        ->select('u.*')
        ->innerJoin('u.DatRueNivel n')
        ->where('n.cod_ue_id = u.cod_ue and n.nivel_id=3')
        ->andWhere('u.cod_le_id IN (SELECT j.cod_le_id FROM DatIfrJurisdiccionAdministrativa j WHERE  j.cod_distrito_id = ? AND j.gestion_id = ?)',array($codDistrito, $gestion))
        ->orderBy('u.cod_ue');
        return $q->execute();
    }
    
    
    /*Para paginacion*/
    public function getUnidadesDistrito2($codDistrito,$gestion) {
    $q = $this->createQuery('u')
        ->innerJoin('u.DatRueNivel n')
        ->where('n.cod_ue_id = u.cod_ue')
        ->andWhere('u.cod_le_id IN (SELECT j.cod_le_id FROM DatIfrJurisdiccionAdministrativa j WHERE  j.cod_distrito_id = ? AND j.gestion_id = ?)',array($codDistrito, $gestion))
        ->orderBy('u.cod_ue');
    return $q;
  	}
    
    /*Para obtener el departamento al que pertenece un usuario x (Diplomas))*/
    public function getUEUbicacionGeografica($codue) {
    $q = $this->createQuery('u')
        ->select('u.*, j.provincia_id AS provincia_id, j.departamento_id AS departamento_id')
        ->innerJoin('u.DatIfrJurisdiccionGeografica j')
        ->where('u.cod_ue = ?', $codue);
    return $q->execute();
  	}
/**
    *   Retorna Las Ues por usuario id 
    */
    public function getUesUsuario($id_usuario, $gestion) {
    
        
        $q = $this->createQuery('d')
        ->select('d.*')
        ->where('d.cod_ue IN (SELECT r.cod_ue_id from RelUsuarioUe r WHERE r.usuario_id = ?)', $id_usuario)
->orderBy('d.cod_ue');
        return $q;
    
    }
}
