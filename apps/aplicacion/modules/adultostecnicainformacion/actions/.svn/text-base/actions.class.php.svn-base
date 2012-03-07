<?php

/**
 * adultostecnicainformacion actions.
 *
 * @package    alternativa
 * @subpackage adultostecnicainformacion
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultostecnicainformacionActions extends sfActions
{
    public function preExecute(){
        $c = new ControlSistema('TEC-INF',$this->getUser()->getAttribute('USUARIO_ID'));
        $this->forwardUnless($c->control(),'login','index');
    }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->cursos = Doctrine::getTable('DatRdeInscripcion')->getTotalInscritosEfectivos('2009','51230001');
    //Doctrine::getTable('DatRdeInscripcionTecnica')->getTotalInscritos('2010','30610026');
   //Doctrine::getTable('DatAltCursoofertaPeriodo')->getTotalInscritos($this->a['gestion_id'],$this->a['ue']);
    //Doctrine::getTable('DatRdeInscripcionTecnica')->getTotalInscritos('2010','30610026');
  }

  public function executeAutocompleteData(sfWebRequest $request){
    $this->forward404If(!$request->isXmlHttpRequest());
    $q = $request->getParameter('q');
    $response = '';
    $items = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesHumanisticaTecnica($q,$this->getUser()->getAttribute('USUARIO_ID'));
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
        $this->notice = 'NO TIENE TUICION SOBRE LA UNIDAD TECNICA O NO TIENE TUICION';
    }
    return sfView::SUCCESS;
  }
  
}
