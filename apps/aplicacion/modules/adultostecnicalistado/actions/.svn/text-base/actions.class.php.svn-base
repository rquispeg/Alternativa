<?php

/**
 * adultostecnicalistado actions.
 *
 * @package    alternativa
 * @subpackage adultostecnicalistado
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultostecnicalistadoActions extends sfActions
{
    public function preExecute(){
        $c = new ControlSistema('TEC-LIS',$this->getUser()->getAttribute('USUARIO_ID'));
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

  public function executeInscripcionefectivos(){
    $request = $this->getRequest();
    $this->a = $request->getParameter('dat_sie_operativos');
    //verificamos si tiene permisos para la unidad educativa unidad educativa
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getAsignacionUesUsuario($this->a['ue'],$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad)
        $this->cursos = Doctrine::getTable('DatRdeInscripcionTecnica')->getTotalInscritosEfectivosTecnica($this->a['ue'],$this->a['subcea'],$this->a['gestion_id'],$this->a['periodo_id']);
    else
        $this->notice = 'NO TIENE TUICION SOBRE UNIDAD TECNICA O LA UNIDAD TECNICA NO CUENTA CON REGISTRO';
    return sfView::SUCCESS;
  }

/* Listado de Estudiantes
*/

  public function executeListaestudiantes(){
      $request = $this->getRequest();
      $estudiantes = Doctrine::getTable('DatRdeInscripcionTecnica')->getInscritoPorCurso($request->getParameter('cod_ue_id'),$request->getParameter('gestion_id'),$request->getParameter('nivel_id'),$request->getParameter('ciclo'),$request->getParameter('grado_id'),$request->getParameter('paralelo'),$request->getParameter('turno_id'),$request->getParameter('curso_oferta_id'));
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
    $this->subcea = $request->getParameter('sub_cea_id');
    $this->periodo = $request->getParameter('periodo_id');
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
