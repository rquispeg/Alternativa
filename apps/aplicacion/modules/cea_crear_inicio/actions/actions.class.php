<?php

/**
 * cea_crear_inicio actions.
 *
 * @package    alternativa
 * @subpackage cea_crear_inicio
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cea_crear_inicioActions extends sfActions
{
  public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('CEA_CREAR_INICIO',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {	
	// sfContext::getInstance()->getUser()->getAttribute('USUARIO_USERNAME')
	//$this->subcentros = new DatRueSubcentroForm();
	/*
	$gestion = sfConfig::get('app_gestion');
	$periodo = sfConfig::get('app_periodo');
	*/
    //$this->forward('default', 'module');	
  }
  
  public function executeCrear(sfWebRequest $request)
  {		
	$this->gestion = sfConfig::get('app_gestion');        
	// Este periodo esta definido por default por Semestre, para configurar revisar app.yml
	$this->periodo = $this->getUser()->getAttribute('PERIODO');
	// Buscando Unidad Educativa
	$buscar_ue = Doctrine::getTable('RelUsuarioUe')->getCodUE($this->getUser()->getAttribute('USUARIO_ID'));
	// Asignado Codigo de Unidad Educativa
	$this->codue = $buscar_ue['cod_ue'];

	// Recuperando variable de subcentro
	$param_subcentro = $request->getParameter('dat_rue_subcentro');
	// Asignando variable de subcentro
	$this->subcea = $param_subcentro['subcentro_id'];
	
    //verificamos si tiene permisos para la Centro de Educacion Alternativa
	
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getAsignacionUesUsuario($this->codue,$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad)
    {       
        $this->getUser()->setFlash('ue',$this->codue);
        $this->getUser()->setFlash('gestion',$this->gestion);
        $this->unidad_educativa = Doctrine::getTable('SdatRueUnidadEducativa')->find(array($this->codue,$this->subcea,$this->periodo));
 		$this->turnos = Doctrine::getTable('ClaTurno')->findAll();
        if (!$this->unidad_educativa)		
        {
            // Ejecutando Procedimiento Almacenedao que inserta en la tabla sdat_rue_unidad_Educativa los datos 
			$proc_inicio_gestion_alternativa = Doctrine_Manager::getInstance()->getCurrentConnection()->execute("CALL proc_inicio_gestion_alt(".$this->gestion.",".$this->periodo.",'".$this->codue."',".$this->subcea.")"); 
			$this->unidad_educativa = Doctrine::getTable('SdatRueUnidadEducativa')->find(array($this->codue,$this->subcea,$this->periodo));
        }		
    }
    else
    {
        $this->notice = 'NO TIENE TUICION SOBRE EL C.E.A. O EL C.E.A NO SE ENCUENTRA REGISTRADO';
    }	
    return sfView::SUCCESS;
  }
  
  public function executeGuardar(sfWebRequest $request)
  {
      $this->datos = $request->getParameter('datos');	  
      $unidadeducativa = Doctrine::getTable('SdatRueUnidadEducativa')->find(array($this->datos['codue'],$this->datos['subcea'],$this->datos['periodo']));
      if($unidadeducativa)
      {
        $conn = Doctrine_Manager::connection();
        $conn->beginTransaction();
        try{              
              $unidadeducativa->setTelefono1($this->datos['telefono1']);
              $unidadeducativa->setTelefono2($this->datos['telefono2']);
              $unidadeducativa->setReferenciaTelefono2($this->datos['referenciatelefono2']);
              $unidadeducativa->setFax($this->datos['fax']);
              $unidadeducativa->setEmail($this->datos['email']);
              $unidadeducativa->setCasilla($this->datos['casilla']);
              $unidadeducativa->setCiDirector($this->datos['cidirector']);
              $unidadeducativa->setDirector($this->datos['director']);
              $unidadeducativa->setItemDirector($this->datos['itemdirector']);
              $unidadeducativa->setCodCerradaId($this->datos['cerrada']);
			  if($this->datos['turno'] == '-999')
				$unidadeducativa->setTurnoId('0');
			  else
				$unidadeducativa->setTurnoId($this->datos['turno']);
              $unidadeducativa->setFechaConsolidacion(date('Y-m-d H:i:s'));              
              $unidadeducativa->save();
              $conn->commit();
              $this->getUser()->setFlash('notice_error',"SE CREO CORRECTAMENTE");
              $this->redirect('cea_crear_inicio/index');
        } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR AL CREAR INICIO DE GESTION DEL CEA");
          $this->redirect('cea_crear_inicio/index');
		  
		}          
      }
  }
}
