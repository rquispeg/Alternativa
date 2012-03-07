<?php

/**
 * cea_create actions.
 *
 * @package    alternativa
 * @subpackage cea_create
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cea_createActions extends sfActions
{
    public function preExecute(){
    //Si no existe un usuario logeado volver a la p�gina de inicio
    $c = new ControlSistema('CEA_CREATE',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->ue = Doctrine::getTable('DatUsuUsuario')->find($this->getUser()->getAttribute('USUARIO_ID'))->getUsername(); 
    $this->gestion = '2012';
    $this->periodo = '2';
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getAsignacionUesUsuario($this->ue,$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad)
    {        
        /* Aqui se debe incorpar la gestion */
        /* Llamar al procedimiento almacenado donde se Crea el Inicio de Gestion*/   
        $datosproc = Doctrine_Manager::getInstance()->getCurrentConnection()->execute("CALL proc_inicio_gestion_alt(".$this->gestion.",".$this->periodo.",'".$this->ue."',0)"); 
        /* Buscando la Unidad Educativa y recupreando los datos */
        $this->identificacion = Doctrine::getTable('SdatRueUnidadEducativa')->find($this->ue,0,$this->periodo);
    }
    else
    {
        $this->notice = 'NO TIENE TUICION SOBRE EL C.E.A. O EL C.E.A NO SE ENCUENTRA REGISTRADO';
    }
    return sfView::SUCCESS;  
  }
}
