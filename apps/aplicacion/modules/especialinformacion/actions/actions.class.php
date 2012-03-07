<?php

/**
 * especialinformacion actions.
 *
 * @package    alternativa
 * @subpackage especialinformacion
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class especialinformacionActions extends sfActions
{

  public function preExecute(){
   //Si no existe un usuario logeado volver a la p�gina de inicio
    $c = new ControlSistema('ESP-INF',$this->getUser()->getAttribute('USUARIO_ID'));
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
    $items = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEspecial($q,$this->getUser()->getAttribute('USUARIO_ID'));
    foreach($items as $item){
       $response .= sprintf("%s|%s\n",$item['cod_ue'],$item['desc_ue']);
    }
    return $this->renderText($response);
  }

  public function executeSie100(){
    $request = $this->getRequest();
    $a = $request->getParameter('dat_sie_operativos');
    $this->ue = $a['cod_ue_id'];
    //verificamos si tiene permisos para la unidad educativa unidad educativadie('aqui');

    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEspecial($a['cod_ue_id'],$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad)
    {
        $this->identificacion = Doctrine::getTable('DatRueUnidadEducativa')->find($this->ue);
        $this->getUser()->setFlash('ue',$a['cod_ue_id']);
        $this->getUser()->setFlash('gestion',$a['gestion_id']);
        $this->distrito = Doctrine::getTable('DatIfrJurisdiccionAdministrativa')->getDistritos($this->identificacion->getCodLeId(),$a['gestion_id']);
        
        $this->descDistrito = Doctrine::getTable('DatSieDistrito')->find(array($this->distrito->getCodDistritoId(),$this->distrito->getGestionId()));
        $this->director = Doctrine::getTable('DatSieUnidadEducativa')->findOneByCodUeIdAndGestionIdAndOperativoId($this->ue,$a['gestion_id'],$a['operativo_id']);
        if ($this->director)
           $this->nucleo = Doctrine::getTable('DatNlcLocalEducativo')->getNucleo($this->identificacion->getCodLeId(),$a['gestion_id']);
    }
    else
    {
        $this->notice = 'NO TIENE TUICION SOBRE EL CODIGO SIE DE LA UNIDAD EDUCATIVA O LA UNIDAD EDUCATIVA NO EXISTE';
    }
    
    return sfView::SUCCESS;
  }

}
