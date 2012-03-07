<?php

/**
 * estudiantealtddjj actions.
 *
 * @package    alternativa
 * @subpackage estudiantealtddjj
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estudiantealtddjjActions extends sfActions
{
  public function preExecute()
  {
    $c = new ControlSistema('EST_DJ',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    
  }
  
    public function executeListaestudiantes(sfWebRequest $request)
  {
    
    ////Verificar si es unidad educativa es regular...
    if ($request->getParameter('dat_sie_operativos')){
        $this->a = $request->getParameter('dat_sie_operativos');
        $this->ue = $this->a['ue'];
        $this->gestion = $this->a['gestion_id'];
    }
    else{
        $this->ue = $request->getParameter('ue');
        $this->gestion = $request->getParameter('gestion_id');
    }
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->find($this->ue);
    if ($unidad){
        if($unidad->getCodOrgCurrId()!=1){
            $this->pager = new sfDoctrinePager('DatRdeInscripcion',15);
            $this->pager->setQuery(Doctrine::getTable('DatRdeInscripcion')->getListaBachilleresAlternativa($this->ue,$this->gestion));
            $this->pager->setPage($request->getParameter('page', 1));
            $this->pager->init();
        }
        else
            $this->getUser()->setFlash('error_ue', "LA UNIDAD EDUCATIVA PERTENECE A EDUCACION ".Doctrine::getTable('ClaOrgCurricular')->find($unidad->getCodOrgCurrId())->getDescModalidad()." BAJAR DESDE LA OPCION UNIDAD EDUCATIVA");
    }
    else
       $this->getUser()->setFlash('error_ue', "UNIDAD DE EDUCATIVA NO EXISTE");
  }

  public function executeReporteunidad(sfWebRequest $request){

    $this->ue = $request->getParameter('ue');
    $this->gestion = $request->getParameter('gestion');
    $this->setLayout('reporte');
    return sfView::SUCCESS;
  }

  public function executeReportelista(sfWebRequest $request){

    $this->ue = $request->getParameter('ue');
    $this->gestion = $request->getParameter('gestion');
    $this->setLayout('reporte');
    return sfView::SUCCESS;
  }
  public function executeReporteindividual(sfWebRequest $request){

    $this->ue = $request->getParameter('ue');
    $this->gestion = $request->getParameter('gestion');
    $this->rude = $request->getParameter('rude');
    $this->setLayout('reporte');
    return sfView::SUCCESS;
  }
}
