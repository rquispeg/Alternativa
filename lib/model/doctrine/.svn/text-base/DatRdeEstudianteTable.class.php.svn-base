<?php

class DatRdeEstudianteTable extends Doctrine_Table
{
    /*
     * Lista de estudiantes de un determinado curso
     * params $rude vector con los rudes de los estudiantes 
     */
    public function getEstudiantesPorCurso($rude) {
        $q = $this->createQuery('c')
        ->whereIN('c.codigo_rude',$rude)
        ->orderBy('c.paterno,c.materno,c.nombre');
        return $q->execute();
    }

    public function getEstudianteModificarDato($rude,$usuario,$gestion){
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.codigo_rude AS codigo_rude, c.carnet_identidad AS carnet_identidad, c.paterno AS paterno, c.materno AS materno, c.nombre AS nombre, c.fecha_nacimiento AS fecha_nacimiento, c.genero AS genero, c.pais_nac_id AS pais_nac_id, c.departamento_nac_id AS departamento_nac_id, c.provincia_nac_id AS provincia_nac_id, c.localidad_nac AS localidad_nac')
        ->leftJoin('c.DatRdeInscripcion d')
        ->where('c.codigo_rude = ?',$rude)
        ->andWhere('d.gestion_id = ?',$gestion)
        ->andWhere('d.nivel_id in (5,15)')
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario);
        return $q->fetchOne();
    }

    public function getEstudiantes($paterno, $materno, $nombre) {
        $q = $this->createQuery('e')
        ->where('e.paterno LIKE ?', $paterno."%")
        ->andWhere('e.materno LIKE ?', $materno."%")
        ->andWhere('e.nombre LIKE ?', $nombre."%")
        ->orderBy('e.paterno,e.materno,e.nombre');
        return $q->execute();
    }

    public function getEstudianteModificarDatoEspecial($rude,$usuario,$gestion){
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.codigo_rude AS codigo_rude, c.carnet_identidad AS carnet_identidad, c.paterno AS paterno, c.materno AS materno, c.nombre AS nombre, c.fecha_nacimiento AS fecha_nacimiento, c.genero AS genero, c.pais_nac_id AS pais_nac_id, c.departamento_nac_id AS departamento_nac_id, c.provincia_nac_id AS provincia_nac_id, c.localidad_nac AS localidad_nac, d.cod_ue_id AS cod_ue_id')
        ->leftJoin('c.DatRdeInscripcionEspecial d')
        ->where('c.codigo_rude = ?',$rude)
        ->andWhere('d.gestion_id = ?',$gestion)
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario);
        return $q->fetchOne();
    }

    public function getEstudianteModificarDatoTecnica($rude,$usuario,$gestion){
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.codigo_rude AS codigo_rude, c.carnet_identidad AS carnet_identidad, c.paterno AS paterno, c.materno AS materno, c.nombre AS nombre, c.fecha_nacimiento AS fecha_nacimiento, c.genero AS genero, c.pais_nac_id AS pais_nac_id, c.departamento_nac_id AS departamento_nac_id, c.provincia_nac_id AS provincia_nac_id, c.localidad_nac AS localidad_nac, d.cod_ue_id AS cod_ue_id')
        ->leftJoin('c.DatRdeInscripcionTecnica d')
        ->where('c.codigo_rude = ?',$rude)
        ->andWhere('d.gestion_id = ?',$gestion)
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario);
        return $q->fetchOne();
    }

    public function getEstudianteModificarDatoAdultos($rude,$usuario,$gestion){
        $q = $this->createQuery('c')
        ->distinct(true)
        ->select('c.codigo_rude AS codigo_rude, c.carnet_identidad AS carnet_identidad, c.paterno AS paterno, c.materno AS materno, c.nombre AS nombre, c.fecha_nacimiento AS fecha_nacimiento, c.genero AS genero, c.pais_nac_id AS pais_nac_id, c.departamento_nac_id AS departamento_nac_id, c.provincia_nac_id AS provincia_nac_id, c.localidad_nac AS localidad_nac, d.cod_ue_id AS cod_ue_id')
        ->leftJoin('c.DatRdeInscripcion d')
        ->where('c.codigo_rude = ?',$rude)
        //->andWhere('d.gestion_id = ?',$gestion)
        ->andWhere('d.nivel_id IN (5,15)')
        ->andWhere('d.cod_ue_id IN (SELECT g.cod_ue_id FROM RelUsuarioUe g WHERE g.usuario_id = ?)',$usuario);
        return $q->fetchOne();
    }

    public function getPosiblesEstudiantes($paterno, $materno, $nombre, $fecha_nac) {
        $q = $this->createQuery('e')
        ->where('e.paterno = ? AND e.materno = ? AND e.nombre = ? AND e.fecha_nacimiento = ?',array($paterno,$materno,$nombre,$fecha_nac))
        ->orWhere('e.paterno = ? AND e.materno = ? AND e.nombre = ?',array($paterno,$materno,$nombre))
        ->orWhere('e.materno = ? AND e.nombre = ? AND e.fecha_nacimiento = ?',array($materno,$nombre,$fecha_nac))
        ->orWhere('e.paterno = ? AND e.nombre = ? AND e.fecha_nacimiento = ?',array($paterno,$nombre,$fecha_nac));
        return $q->execute();
    }



}