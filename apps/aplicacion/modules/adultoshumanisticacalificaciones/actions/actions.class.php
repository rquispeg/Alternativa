<?php

/**
 * adultoshumanisticacalificaciones actions.
 *
 * @package    alternativa
 * @subpackage adultoshumanisticacalificaciones
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultoshumanisticacalificacionesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //Doctrine::getTable('DatSieCurso')->find(array('81930018','0','2010','1','1','5','2','2','$curso['turno_id']'));
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

  public function executeReporte(sfWebRequest $request){

    $this->setLayout('reporte');
    return sfView::SUCCESS;
  }


}
