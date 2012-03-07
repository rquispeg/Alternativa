<?php

/**
 * adultoshumanisticalistado actions.
 *
 * @package    alternativa
 * @subpackage adultoshumanisticalistado
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultoshumanisticalistadoActions extends sfActions
{
  public function preExecute(){
    //Si no existe un usuario logeado volver a la p�gina de inicio
    $c = new ControlSistema('HUM_LIS',$this->getUser()->getAttribute('USUARIO_ID'));
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
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesHumanisticaAdultos($this->a['ue'],$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad){
        $this->cursos = Doctrine::getTable('DatRdeInscripcion')->getTotalInscritosEfectivosHumanistico($this->a['ue'],$this->a['subcea'],$this->a['gestion_id'],$this->a['periodo_id']);
		
		$this->getUser()->setFlash('ue',$this->a['ue']);
		$this->getUser()->setFlash('gestion',$this->a['gestion_id']);
		$this->getUser()->setFlash('subcea',$this->a['subcea']);
		$this->getUser()->setFlash('periodo',$this->a['periodo_id']);		
    }
    else
        $this->notice = 'NO TIENE TUICION SOBRE CEA O EL CEA NO CUENTA CON REGISTRO';
    return sfView::SUCCESS;
  }

/* Listado de Estudiantes
*/

  public function executeListaestudiantes(){
      $request = $this->getRequest();
      $this->getUser()->setFlash('ue',$request->getParameter('cod_ue_id'));
      $this->getUser()->setFlash('gestion',$request->getParameter('gestion_id'));
      //die($request->getParameter('cod_ue_id').'/'.$request->getParameter('gestion_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('ciclo').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo').'/'.$request->getParameter('turno_id').'/'.$request->getParameter('sub_cea_id').'/'.$request->getParameter('periodo_id'));
      $estudiantes = Doctrine::getTable('DatRdeInscripcion')->getInscritoPorCursoHumanistico($request->getParameter('cod_ue_id'),$request->getParameter('gestion_id'),$request->getParameter('nivel_id'),$request->getParameter('ciclo'),$request->getParameter('grado_id'),$request->getParameter('paralelo'),$request->getParameter('turno_id'),$request->getParameter('sub_cea_id'),$request->getParameter('periodo_id'));
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
  public function executeReporteunidad(){
	$this->getUser()->setFlash('ue',$this->getUser()->getFlash('ue'));
	$this->getUser()->setFlash('gestion',$this->getUser()->getFlash('gestion'));
	$this->getUser()->setFlash('periodo',$this->getUser()->getFlash('periodo'));
	$this->getUser()->setFlash('subcea',$this->getUser()->getFlash('subcea'));
	
	if($this->getUser()->getFlash('gestion') > "2010")
		{	$this->getUser()->setFlash('nivel',15); }
	else
		{	$this->getUser()->setFlash('nivel',5); }	
		
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
	$this->getUser()->setFlash('periodo',$this->getUser()->getFlash('periodo'));
	$this->getUser()->setFlash('subcea',$this->getUser()->getFlash('subcea'));
	
	if($this->getUser()->getFlash('gestion') > "2010")
		{	$this->getUser()->setFlash('nivel',15); }
	else
		{	$this->getUser()->setFlash('nivel',5); }		
	
	//print_r($this->getUser()->getFlash('nivel')); die;
	$this->setLayout('reporte');
    return sfView::SUCCESS;
  }
}
