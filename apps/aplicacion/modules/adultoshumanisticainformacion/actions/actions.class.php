<?php

/**
 * adultoshumanisticainformacion actions.
 *
 * @package    alternativa
 * @subpackage adultoshumanisticainformacion
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultoshumanisticainformacionActions extends sfActions
{
   public function preExecute(){
    //Si no existe un usuario logeado volver a la p�gina de inicio
    $c = new ControlSistema('HUM_INF',$this->getUser()->getAttribute('USUARIO_ID'));
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

  public function executeAutocompleteData(sfWebRequest $request){
    $this->forward404If(!$request->isXmlHttpRequest());
    $q = $request->getParameter('q');
    $response = '';
    $items = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesHumanisticaAdultos($q,$this->getUser()->getAttribute('USUARIO_ID'));
    foreach($items as $item){
       $response .= sprintf("%s|%s\n",$item['cod_ue'],$item['desc_ue']);
    }
    return $this->renderText($response);
  }

  public function executeSie100(){
    $request = $this->getRequest();
    $a = $request->getParameter('dat_sie_operativos');
    $this->ue = $a['ue'];
    //verificamos si tiene permisos para la unidad educativa unidad educativa
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getAsignacionUesUsuario($a['ue'],$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad)
    {
        $this->identificacion = Doctrine::getTable('DatRueUnidadEducativa')->find($this->ue);
        $this->getUser()->setFlash('ue',$a['ue']);
        $this->getUser()->setFlash('gestion',$a['gestion_id']);
        $this->director = Doctrine::getTable('DatSieUnidadEducativa')->find(array($this->ue,$a['subcea'],$a['gestion_id'],$a['operativo_id'],$a['periodo_id']));
        if ($this->director)
        {
            $this->nucleo = Doctrine::getTable('DatNlcLocalEducativo')->getNucleo($this->identificacion->getCodLeId(),$a['gestion_id']);
            $this->distrito = Doctrine::getTable('DatIfrJurisdiccionAdministrativa')->getDistritos($this->identificacion->getCodLeId(),$a['gestion_id']);
            $this->descDistrito = Doctrine::getTable('DatSieDistrito')->find(array($this->distrito->getCodDistritoId(),$this->distrito->getGestionId()));
        }
    }
    else
    {
        $this->notice = 'NO TIENE TUICION SOBRE EL C.E.A. O EL C.E.A NO SE ENCUENTRA REGISTRADO';
    }
    return sfView::SUCCESS;
  }

  /**
  * Executes el mï¿½todo para el reporte del sie-100 utilizando otro layout para poder
  * bajarlo en pdf
  *
  * @param none
  */
  public function executeReporte(){
    $this->getUser()->setFlash('ue',$this->getUser()->getFlash('ue'));
    $this->getUser()->setFlash('gestion',$this->getUser()->getFlash('gestion'));
    $this->setLayout('reporte');
    return sfView::SUCCESS;
  }

}
