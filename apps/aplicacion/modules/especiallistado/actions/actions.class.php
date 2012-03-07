<?php

/**
 * especiallistado actions.
 *
 * @package    alternativa
 * @subpackage especiallistado
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class especiallistadoActions extends sfActions
{
  public function preExecute(){
   //Si no existe un usuario logeado volver a la p�gina de inicio
    $c = new ControlSistema('ESP-LIS',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');ESP-LIS
  }

  public function executeInscripcionefectivos(sfWebRequest $request){
    $this->a = $request->getParameter('dat_sie_operativos');
    $this->getUser()->setFlash('ue',$this->a['cod_ue_id']);
    $this->getUser()->setFlash('gestion',$this->a['gestion_id']);
    //verificamos si tiene permisos para la unidad educativa unidad educativa
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEspecial($this->a['cod_ue_id'],$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad){
        
        $this->cursos = Doctrine::getTable('DatRdeInscripcionEspecial')->getTotalInscritosEfectivos($this->a['gestion_id'],$this->a['cod_ue_id']);
    }
    else
        $this->notice = 'NO TIENE TUICION SOBRE EL CODIGO SIE DE LA UNIDAD EDUCATIVA O LA UNIDAD EDUCATIVA NO EXISTE';

    return sfView::SUCCESS;
    
  }

  public function executeListaestudiantes(sfWebRequest $request){
      //die($request->getParameter('cod_ue_id').'/'.$request->getParameter('gestion_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('ciclo').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo').'/'.$request->getParameter('turno_id').'/'.$request->getParameter('discapacidad_id'));
      $estudiantes = Doctrine::getTable('DatRdeInscripcionEspecial')->getInscritoPorCurso($request->getParameter('cod_ue_id'),$request->getParameter('gestion_id'),$request->getParameter('nivel_id'),$request->getParameter('ciclo'),$request->getParameter('grado_id'),$request->getParameter('paralelo'),$request->getParameter('turno_id'),$request->getParameter('discapacidad_id'));
      foreach ($estudiantes as $estudiante) {
          $rude[] = $estudiante['codigo_rude'];
      }
      
      $this->listas = Doctrine::getTable('DatRdeEstudiante')->getEstudiantesPorCurso($rude);
  }
  /**
  * Executes el método para el reporte de la lista de estudiantes por curso de una unidad educativa otro layout para poder
  * bajarlo en pdf
  *
  * @param none
  */
  public function executeReporteunidad(sfWebRequest $request){
    $this->ue = $request->getParameter('ue');
    $this->gestion = $request->getParameter('gestion_id');
    $this->setLayout('reporte');
    return sfView::SUCCESS;
  }

  /**
  * Executes el método para el reporte de la lista de estudiantes por curso de una unidad educativa otro layout para poder
  * bajarlo en pdf
  *
  * @param none
  */
  public function executeReporteporcurso(sfWebRequest $request){
    $this->setLayout('reporte');
    return sfView::SUCCESS;
  }

  public function executeReporteporestado(sfWebRequest $request){
    $this->getUser()->setFlash('ue',$this->getUser()->getFlash('ue'));
    $this->getUser()->setFlash('gestion',$this->getUser()->getFlash('gestion'));
    $this->setLayout('reporte');
    return sfView::SUCCESS;
  }

}
