<?php

/**
 * cea_crear_cursos actions.
 *
 * @package    alternativa
 * @subpackage cea_crear_cursos
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cea_crear_cursosActions extends sfActions
{
  public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('CEA_CREAR_CURSOS',$this->getUser()->getAttribute('USUARIO_ID'));
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
  
   public function executeCiclo(sfWebRequest $request)
  {
	$this->modalidad = sfConfig::get('app_modalidad');
    $this->ciclos = doctrine::getTable('ClaGrado')->findByNivelIdAndCicloId($this->modalidad,$request->getParameter('nivel_id'));
  }  

  
  public function executeCrear(sfWebRequest $request)
  {
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
	
	//verificamos si tiene permisos para la Centro de Educacion Alternativa	
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getAsignacionUesUsuario($this->codue,$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad)
    {       
        $this->getUser()->setFlash('ue',$this->codue);
        $this->getUser()->setFlash('gestion',$this->gestion);
        // Consulta de todos los Subcentros habilitados
		$this->subcentros = Doctrine::getTable('DatRueSubcentro')->findByCodUeId($this->codue);
		$this->niveles = doctrine::getTable('ClaCiclo')->findByNivelId($this->modalidad);
		$this->especialidades = doctrine::getTable('DatAltCursooferta')->findByCodUeId($this->codue);
    }
    else
    {
        $this->notice = 'NO TIENE TUICION SOBRE EL C.E.A. O EL C.E.A NO SE ENCUENTRA REGISTRADO';
    }	
    return sfView::SUCCESS;	
  }
  
  public function executeGuardarcursohumanistica(sfWebRequest $request)
  {	
	if($request->getParameter('subsistema_id') == '21'){		
		$conn = Doctrine_Manager::connection();
		$conn->beginTransaction();
		try {
			 //die($request->getParameter('ue_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('periodo_id'));
			$curso = new SdatSieCurso();
			$curso->setCodUeId($request->getParameter('ue_id'));
			$curso->setSubCeaId($request->getParameter('subcea_id'));
			$curso->setGestionId(sfConfig::get('app_gestion'));
			$curso->setOperativoId('1');
			$curso->setPeriodoId($request->getParameter('periodo_id'));
			$curso->setNivelId($request->getParameter('modalidad_id'));
			$curso->setCicloId($request->getParameter('nivel_id'));
			$curso->setGradoId($request->getParameter('grado_id'));
			$curso->setParalelo($request->getParameter('paralelo_id'));
			$curso->setMultigrado('0');
			$curso->setTurnoId($request->getParameter('turno_id'));
			if($request->getParameter('paralelo_id') == 'Y' ){
				$curso->setModalidadEnsenanzaId('3');
			}elseif($request->getParameter('paralelo_id') == 'Z'){
				$curso->setModalidadEnsenanzaId('2');
			}else{$curso->setModalidadEnsenanzaId('1');}
			$curso->save();
			 
			$this->getUser()->setFlash('notice',"EL CURSO SE CREO SATISFACTORIAMENTE");
			$conn->commit();

		} catch (Doctrine_Exception $e) {
			$conn->rollback();
			$this->getUser()->setFlash('notice_error', "HUBO UN ERROR AL CREAR EL CURSO");
		}
		//$this->redirect('cea_listado_cursos/listadecursos?cod_ue_id='.$request->getParameter('ue_id').'&sub_cea_id='.$request->getParameter('subcea_id').'&gestion_id='.$this->getUser()->getAttribute('GESTION').'&periodo_id='.$request->getParameter('periodo_id'));
	}
  }
  
  public function executeGuardarcursotecnica(sfWebRequest $request)
  {		
	if($request->getParameter('subsistema_id') == '22'){		
		$conn = Doctrine_Manager::connection();
		$conn->beginTransaction();
		try {
			 //die($request->getParameter('ue_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('periodo_id'));
			$curso = new SdatSieCursotecnica();
			$curso->setCodUeId($request->getParameter('ue_id'));
			$curso->setSubCeaId($request->getParameter('subcea_id'));
			$curso->setGestionId(sfConfig::get('app_gestion'));
			$curso->setOperativoId('1');
			$curso->setPeriodoId($request->getParameter('periodo_id'));
			$curso->setNivelId($request->getParameter('modalidad_id'));
			$curso->setCicloId($request->getParameter('nivel_id'));
			$curso->setGradoId($request->getParameter('grado_id'));
			$curso->setParalelo($request->getParameter('paralelo_id'));
			$curso->setMultigrado('0');
			$curso->setTurnoId($request->getParameter('turno_id'));
			$curso->setModalidadEnsenanzaId('1');
			$curso->setCursoOfertaId($request->getParameter('curso_oferta_id'));
			$curso->save();
			 
			$this->getUser()->setFlash('notice',"EL CURSO SE CREO SATISFACTORIAMENTE");
			$conn->commit();

		} catch (Doctrine_Exception $e) {
			$conn->rollback();
			$this->getUser()->setFlash('notice_error', "HUBO UN ERROR AL CREAR EL CURSO");
		}
		//$this->redirect('cea_listado_cursos/listadecursos?cod_ue_id='.$request->getParameter('ue_id').'&sub_cea_id='.$request->getParameter('subcea_id').'&gestion_id='.$this->getUser()->getAttribute('GESTION').'&periodo_id='.$request->getParameter('periodo_id'));
	}
  }
}
