<?php

/**
 * estudiantealtbusqueda actions.
 *
 * @package    alternativa
 * @subpackage estudiantealtbusqueda
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estudiantealtbusquedaActions extends sfActions
{
  public function preExecute()
  {
    $c = new ControlSistema('EST-ABUS',$this->getUser()->getAttribute('USUARIO_ID'));
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
    $this->getUser()->setFlash('idUsuario',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->getUser()->setFlash('gestion',$this->getUser()->getAttribute('GESTION'));
    $this->a = $request->getParameter('datos_estudiante');
    $this->estudiantes = Doctrine::getTable('DatRdeEstudiante')->getEstudiantes($this->a['paterno'], $this->a['materno'], $this->a['nombre']);
    return sfView::SUCCESS;
  }

  public function executeListainscripciones(sfWebRequest $request)
  {
    $this->rude = $request->getParameter('codigo_rude') ;
    $this->ins_especiales = Doctrine::getTable('DatRdeInscripcionEspecial')->getListainscripciones($request->getParameter('codigo_rude'));
    $this->ins_tecnicas = Doctrine::getTable('DatRdeInscripcionTecnica')->getListainscripciones($request->getParameter('codigo_rude'));
    $this->ins_adultos = Doctrine::getTable('DatRdeInscripcion')->getListainscripcionesadultos($request->getParameter('codigo_rude'));
    return sfView::SUCCESS;
  }

}
