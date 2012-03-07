<?php

/**
 * adultostecnicacambiar actions.
 *
 * @package    alternativa
 * @subpackage adultostecnicacambiar
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultostecnicacambiarActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }

  public function executeBuscarestudiante()
  {
    $request = $this->getRequest();
    $this->a = $request->getParameter('dat_rde_estudiante');
    $this->estudiante = doctrine::gettable('DatRdeEstudiante')->find($this->a['codigo_rude']);
    if ($this->estudiante){
        $this->inscripcion = doctrine::gettable('DatRdeInscripcionTecnica')->getBuscarInscripcionModificarCurso($this->estudiante->getCodigoRude(),$this->getUser()->getAttribute('GESTION'),$this->getUser()->getAttribute('USUARIO_ID'),$this->a['periodo']);
        if ($this->inscripcion)
            ///mostrar los niveles
            $this->modalidades = doctrine::gettable('DatAltCursoTecnica')->getModalidad($this->inscripcion->getCodUeId(),$this->getUser()->getAttribute('GESTION'),$this->inscripcion->getPeriodoId(),$this->inscripcion->getSubCeaId());
        else
            $this->notice = 'LA INSCRIPCION NO EXISTE O NO TIENE TUICION SOBRE LA UNIDAD EN LA QUE ESTA INSCRITO EL ESTUDIANTE';
    }
    else
        $this->notice = 'CODIGO RUDE NO EXISTE';
  }

   public function executeGuardarmodificarcurso(sfWebRequest $request){
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      try {
          //guardar en el log de modificacion de grado
          
          $inscripcion = Doctrine::getTable('DatRdeInscripcionTecnica')->find(array($request->getParameter('id'),$this->getUser()->getAttribute('GESTION')));
              /*$control = new CtrRdeCambioGrado();
              $control->setFechaCambio(date('Y-m-d H:i:s'));
              $control->setIdInscripcion($request->getParameter('id'));
              $control->setGestionId($this->getUser()->getAttribute('GESTION'));
              $control->setNivelId($inscripcion->getNivelId());
              $control->setCicloId($inscripcion->getCicloId());
              $control->setGradoId($inscripcion->getGradoId());
              $control->setParalelo($inscripcion->getParalelo());
              $control->setTurnoId($inscripcion->getTurnoId());
              $control->setUserId($this->getUser()->getAttribute('USUARIO_ID'));
              $control->save();*/
              $inscripcion->setNivelId($request->getParameter('modalidad_id'));
              $inscripcion->setCicloId($request->getParameter('nivel_id'));
              $inscripcion->setGradoId($request->getParameter('grado_id'));
              $inscripcion->setCursoOfertaId($request->getParameter('curso_oferta_id'));
              $inscripcion->setParalelo($request->getParameter('paralelo_id'));
              $inscripcion->setTurnoId($request->getParameter('turno_id'));
              $inscripcion->save();
          $conn->commit();
          $this->getUser()->setFlash('notice_curso',"LA MODIFICACION SE REALIZADO CORRECTAMENTE");
          $this ->redirect('adultostecnicacambiar/index');
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_curso_error',"ERROR EN LA MODIFICACION DEL GRADO");
          $this->redirect('adultostecnicacambiar/index');
      }
  }
}
