<?php

/**
 * especialeliminar actions.
 *
 * @package    alternativa
 * @subpackage especialeliminar
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class especialeliminarActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->historialestados=Doctrine::getTable('DatRdeInscripcionEspecial')->getListaInscritoEliminar('81730091201114309','2011',25);
  }

  public function executeHistorialestado(sfWebRequest $request) {
      
      $request = $this->getRequest();
      $this->a = $request->getParameter('dat_rde_estudiante');
      $this->datos = Doctrine::getTable('DatRdeEstudiante')->find($this->a['codigo_rude']);
      
      if ($this->datos){
   
          $this->historialestados=Doctrine::getTable('DatRdeInscripcionEspecial')->getListaInscritoEliminar($this->a['codigo_rude'],$this->getUser()->getAttribute('GESTION'),$this->getUser()->getAttribute('USUARIO_ID'));
          
              $this->getUser()->getAttributeHolder()->remove('notice7A');
      }
      else{
          $this->getUser()->setFlash('notice7A','RUDE NO EXISTE, NO TIENE INSCRIPCION PARA LA GESTION '.$this->getUser()->getAttribute('GESTION').' O NO ESTA REGISTRADO EN UNA UNIDAD EDUCATIVA QUE TIENE TUICION');
      }
      $this->getUser()->getAttributeHolder()->remove('notice7');
      $this->getUser()->getAttributeHolder()->remove('notice_error7');
  }

  /**
   * Permite la eliminacion de una inscripcion
   */
  public function executeBorrarInscripcion(sfWebRequest $request) {
    $idInscripcion  = $request->getParameter('id_inscripcion');
    $gestion  = $this->getUser()->getAttribute('GESTION');

    //print_r($idInscripcion); die;
    $conn = Doctrine_Manager::connection();
    $conn->beginTransaction();
    try {

        $inscripcion = Doctrine::getTable('DatRdeInscripcionEspecial')->find(array($idInscripcion, $gestion));

        //$inscripciones = Doctrine::getTable('DatRdeInscripcion')->findByCodigoRudeIdAndGestionId($codigoRude, $gestion);

        //  Guarda auditoria
        /*$ctr_inscripcion = new CtrRdeInscripcion();
        $ctr_inscripcion->setIdInscripcion($inscripcion->getIdInscripcion());
        $ctr_inscripcion->setGestionId($inscripcion->getGestionId());
        $ctr_inscripcion->setCodigoRudeId($inscripcion->getCodigoRudeId());
        $ctr_inscripcion->setNumMatricula($inscripcion->getNumMatricula());
        $ctr_inscripcion->setCodUeId($inscripcion->getCodUeId());
        $ctr_inscripcion->setPeriodoId($inscripcion->getPeriodoId());
        $ctr_inscripcion->setOperativoId($inscripcion->getOperativoId());
        $ctr_inscripcion->setSubCeaId($inscripcion->getSubCeaId());
        $ctr_inscripcion->setNivelId($inscripcion->getNivelId());
        $ctr_inscripcion->setGradoId($inscripcion->getGradoId());
        $ctr_inscripcion->setCicloId($inscripcion->getCicloId());
        $ctr_inscripcion->setParalelo($inscripcion->getParalelo());
        $ctr_inscripcion->setTurnoId($inscripcion->getTurnoId());
        $ctr_inscripcion->setEstadoMatriculaInicioId($inscripcion->getEstadoMatriculaInicioId());
        $ctr_inscripcion->setEstadoMatriculaFinId($inscripcion->getEstadoMatriculaFinId());
        $ctr_inscripcion->setCodUeProcedenciaId($inscripcion->getCodUeProcedenciaId());
        $ctr_inscripcion->setObservacionId($inscripcion->getObservacionId());
        $ctr_inscripcion->setObservacionControl("BORRADO");
        $ctr_inscripcion->setFechaControl(date('Y-m-d H:i:s'));
        $ctr_inscripcion->setFechaInscripcion($inscripcion->getFechaInscripcion());
        $ctr_inscripcion->setApreciacionFinal($inscripcion->getApreciacionFinal());
        $ctr_inscripcion->setUsuarioId($this->getUser()->getAttribute('USUARIO_ID'));
        $ctr_inscripcion->save();*/


        //  Borrar ctr_rde_extemporaneo
        $q = Doctrine_Query::create()
         ->delete('CtrRdeExtemporaneoEspecial')
         ->addWhere('inscripcion_id = ? AND gestion_id = ?',array($idInscripcion, $gestion));
         $deleted = $q->execute();


        //  Borrar la inscripción
        $inscripcion->delete();

        $conn->commit();
        $this->getUser()->setFlash('notice7',"LA ELIMINACION DE INSCRIPCION SE REALIZO CORRECTAMENTE");
        $this ->redirect('especialeliminar/index');
     } catch (Doctrine_Exception $e) {
        $conn->rollback();
        $this->getUser()->setFlash('notice_error7',"ERROR AL ELIMINAR LA INSCRIPCION");
        $this->redirect('especialeliminar/index');
     }
  }

}
