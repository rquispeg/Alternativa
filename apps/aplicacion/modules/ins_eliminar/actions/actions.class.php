<?php

/**
 * ins_eliminar actions.
 *
 * @package    alternativa
 * @subpackage ins_eliminar
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ins_eliminarActions extends sfActions
{
	public function preExecute(){
		//Si no existe un usuario logeado volver a la p?gina de inicio
		$c = new ControlSistema('INS_ELIMINAR',$this->getUser()->getAttribute('USUARIO_ID'));
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
    $this->a = $request->getParameter('dat_rde_estudiante'); 
	
	$this->gestion = sfConfig::get('app_gestion');        
	$this->periodo = sfConfig::get('app_periodo');
	$this->modalidad = sfConfig::get('app_modalidad');
	
	// Buscando Unidad Educativa
	$buscar_ue = Doctrine::getTable('RelUsuarioUe')->getCodUE($this->getUser()->getAttribute('USUARIO_ID'));
	// Asignado Codigo de Unidad Educativa
	$this->codue = $buscar_ue['cod_ue'];   
	
	// Recuperando variable de modalidad
	$param_acreditacion = $request->getParameter('cla_acreditacion');
	// Asignando variable de modalidad
	$this->acreditacion = $param_acreditacion['acreditacion_id'];
	
	$unidad = Doctrine::getTable('DatRueUnidadEducativa')->getAsignacionUesUsuario($this->codue,$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad)
    {        
		$this->estudiante = Doctrine::getTable('DatRdeEstudiante')->find($this->a['codigo_rude']);        
		if ($this->estudiante){  			
			// Aqui debemos preguntar por la acreditacion
			if($this->acreditacion == '21'){
				$this->inscripciones = Doctrine::getTable('SdatRdeInscripcion')->getInscripcion($this->estudiante->getCodigoRude(),$this->codue);							
			}elseif($this->acreditacion == '22')
			{
				$this->inscripciones = Doctrine::getTable('SdatRdeInscripcionTecnica')->getInscripcion($this->estudiante->getCodigoRude(),$this->codue);			
			}
		}else
			$this->notice = 'CODIGO RUDE NO EXISTE';
	}
    else
    {
        $this->notice = 'NO TIENE TUICION SOBRE EL C.E.A. O EL C.E.A NO SE ENCUENTRA REGISTRADO';
    }
	$this->getUser()->setFlash('notice',$this->notice);	
    return sfView::SUCCESS;	
  }
  
  public function executeBorrarInscripcion(sfWebRequest $request) {
    $idInscripcion  = $request->getParameter('id_inscripcion');
	$acreditacion  = $request->getParameter('acreditacion');
    $gestion  = sfConfig::get('app_gestion');

    //print_r($idInscripcion); die;
    $conn = Doctrine_Manager::connection();
    $conn->beginTransaction();
    try {
		if($acreditacion == '21'):
			$inscripcion = Doctrine::getTable('SdatRdeInscripcion')->findOneByInscripcionIdAndGestionId($idInscripcion, $gestion);			
		elseif($acreditacion == '22'):
			$inscripcion = Doctrine::getTable('SdatRdeInscripcionTecnica')->findOneByInscripcionIdAndGestionId($idInscripcion, $gestion);
		endif;
		//  Borrar la inscripción
		$inscripcion->delete();
        $conn->commit();
        $this->getUser()->setFlash('notice',"LA ELIMINACION DE INSCRIPCION SE REALIZO CORRECTAMENTE");
        $this ->redirect('ins_eliminar/index');
    } catch (Doctrine_Exception $e) {
        $conn->rollback();
        $this->getUser()->setFlash('notice_error',"ERROR AL ELIMINAR LA INSCRIPCION");
        $this->redirect('ins_eliminar/index');
    }
  }

}
