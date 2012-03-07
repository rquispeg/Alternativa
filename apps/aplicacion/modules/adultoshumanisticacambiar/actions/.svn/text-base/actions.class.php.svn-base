<?php

/**
 * adultoshumanisticacambiar actions.
 *
 * @package    alternativa
 * @subpackage adultoshumanisticacambiar
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultoshumanisticacambiarActions extends sfActions
{

  public function preExecute()
  {
    $c = new ControlSistema('HUM-CC',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }

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
        $this->inscripcion = doctrine::gettable('DatRdeInscripcion')->getBuscarInscripcionModificarCurso($this->estudiante->getCodigoRude(),$this->getUser()->getAttribute('GESTION'),$this->getUser()->getAttribute('USUARIO_ID'),$this->a['periodo']);
        
        if ($this->inscripcion)
            ///mostrar los niveles
            $this->modalidades = doctrine::gettable('DatSieCurso')->getModalidad($this->inscripcion->getCodUeId(),$this->getUser()->getAttribute('GESTION'),$this->inscripcion->getPeriodoId(),$this->inscripcion->getSubCeaId());
        else
            $this->notice = 'LA INSCRIPCION NO EXISTE O NO TIENE TUICION SOBRE LA UNIDAD EN LA QUE ESTA INSCRITO EL ESTUDIANTE';
    }
    else
        $this->notice = 'CODIGO RUDE NO EXISTE';
  }

  public function executeNivel(sfWebRequest $request)
  {
    //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('modalidad_id'));
    $this->ciclos = doctrine::getTable('DatSieCurso')->getNiveles($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'));
  }

  public function executeCiclo(sfWebRequest $request)
  {
    $this->nivel = $request->getParameter('modalidad_id');
    $this->ciclo = $request->getParameter('nivel_id');
    $this->grados = doctrine::getTable('DatSieCurso')->getGrados($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'));
  }

  public function executeParalelo(sfWebRequest $request)
  {
    $this->paralelos = doctrine::gettable('DatSieCurso')->getParalelo($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'));
  }



  public function executeGuardarmodificarcurso(sfWebRequest $request){
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      try {
          //guardar en el log de modificacion de grado
          $inscripcion = Doctrine::getTable('DatRdeInscripcion')->find(array($request->getParameter('id'),$this->getUser()->getAttribute('GESTION')));
              $control = new CtrRdeCambioGrado();
              $control->setFechaCambio(date('Y-m-d H:i:s'));
              $control->setIdInscripcion($request->getParameter('id'));
              $control->setGestionId($this->getUser()->getAttribute('GESTION'));
              $control->setNivelId($inscripcion->getNivelId());
              $control->setCicloId($inscripcion->getCicloId());
              $control->setGradoId($inscripcion->getGradoId());
              $control->setParalelo($inscripcion->getParalelo());
              $control->setTurnoId($inscripcion->getTurnoId());
              $control->setUserId($this->getUser()->getAttribute('USUARIO_ID'));
              $control->save();

              $inscripcion->setNivelId($request->getParameter('modalidad_id'));
              $inscripcion->setCicloId($request->getParameter('nivel_id'));
              $inscripcion->setGradoId($request->getParameter('grado_id'));
              $inscripcion->setParalelo($request->getParameter('paralelo_id'));
              $inscripcion->setTurnoId($request->getParameter('turno_id'));
              $inscripcion->save();
          $conn->commit();
          $this->getUser()->setFlash('notice_curso',"LA MODIFICACION SE REALIZADO CORRECTAMENTE");
          $this ->redirect('adultoshumanisticacambiar/index');
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_curso_error',"ERROR EN LA MODIFICACION DEL GRADO");
          $this->redirect('adultoshumanisticacambiar/index');
      }
  }

}
