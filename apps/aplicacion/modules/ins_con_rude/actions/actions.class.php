<?php

/**
 * ins_con_rude actions.
 *
 * @package    alternativa
 * @subpackage ins_con_rude
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ins_con_rudeActions extends sfActions
{
	public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('INS_CON_RUDE',$this->getUser()->getAttribute('USUARIO_ID'));
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
  
  public function executeNivel(sfWebRequest $request)
  {	
	if($request->getParameter('subsistema_id') == '21'){
		$this->ciclos = doctrine::getTable('SdatSieCurso')->getNiveles($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'));	
	}
	elseif($request->getParameter('subsistema_id') == '22')
	{
		$this->ciclos = doctrine::getTable('SdatSieCursotecnica')->getNiveles($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'));	
	}
  }
  
  public function executeCiclo(sfWebRequest $request)
  {
    $this->nivel = $request->getParameter('modalidad_id');
    $this->ciclo = $request->getParameter('nivel_id');
	$this->acreditacion = $request->getParameter('subsistema_id');
	if($request->getParameter('subsistema_id') == '21'){
		$this->grados = doctrine::getTable('SdatSieCurso')->getGrados($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'));
	}
	elseif($request->getParameter('subsistema_id') == '22')
	{
		$this->grados = doctrine::getTable('SdatSieCursotecnica')->getGrados($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'));
	}
  }
  
  public function executeEspecialidad(sfWebRequest $request)
  {
    $this->especialidades = doctrine::getTable('SdatSieCursotecnica')->getEspecialidades($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'));
  }
  
  public function executeParalelo(sfWebRequest $request)
  {	
	$this->acreditacion = $request->getParameter('subsistema_id');		
	if($request->getParameter('subsistema_id') == '21'){
		$this->paralelos = doctrine::gettable('SdatSieCurso')->getParalelo($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'));
	}
	elseif($request->getParameter('subsistema_id') == '22'){		
		$this->paralelos = doctrine::gettable('SdatSieCursotecnica')->getParalelo($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('curso_oferta_id'));
	}
  }
  
  public function executeTurno(sfWebRequest $request){
      //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo'));	  	  
	  if($request->getParameter('subsistema_id') == '21'){
		$this->turnos = doctrine::getTable('SdatSieCurso')->getTurno($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('paralelo'));
	  }elseif($request->getParameter('subsistema_id') == '22'){		
		$this->turnos = doctrine::getTable('SdatSieCursotecnica')->getTurno($request->getParameter('ue_id'),sfConfig::get('app_gestion'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('curso_oferta_id'),$request->getParameter('paralelo'));	  
	  }
  } 

  
   /**
  * Executes buscar los datos del estudiante de acuerdo al c?digo RUDE
  *
  * @param sfRequest $request el c?digo RUDE
  */
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
		$this->estudiante = doctrine::gettable('DatRdeEstudiante')->find($this->a['codigo_rude']);        
		if ($this->estudiante){        
			//$this->inscripcion = doctrine::getTable('DatRdeInscripcion')->getBuscarInscripcionEstudianteExtemporaneo($this->estudiante->getCodigoRude(),$this->getUser()->getAttribute('GESTION'));        
			//if ($this->inscripcion) $this->notice1 = 0;
			$this->subcentros = Doctrine::getTable('DatRueSubcentro')->findByCodUeId($this->codue);
		}else
			$this->notice = 'CODIGO RUDE NO EXISTE';
	}
    else
    {
        $this->notice = 'NO TIENE TUICION SOBRE EL C.E.A. O EL C.E.A NO SE ENCUENTRA REGISTRADO';
    }	
    return sfView::SUCCESS;	
  }

  public function executeRegistrarinscripcionhumanistica(sfWebRequest $request){
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      //try {
          ///Buscar inscripciones y dar estado de matricula fin RETIRADO ABANDONO
		  /*
          $inscripciones = Doctrine::getTable('DdatRdeInscripcion')->getInscripcionPorGestionPeriodo($request->getParameter('rude'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'));
          foreach ($inscripciones as $inscripcion) {
              if($inscripcion->getEstadoMatriculaFinId()=='4')
              {
                $inscripcion->setEstadoMatriculaFinId('6');
                $inscripcion->setObservacionId('0');
                $inscripcion->save();
              }
          }
		  */
          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array(sfConfig::get('app_gestion'),$request->getParameter('ue_id')));
          $mat = (int)$matricula->getNumeroMatricula()+1;

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($request->getParameter('ue_id'),sfConfig::get('app_gestion')))->getNumeroMatricula();
          
          ///Registrar la inscripcion inscripcion
          $extemporaneo = new SdatRdeInscripcion();
          $extemporaneo->setInscripcionId($id);
          $extemporaneo->setCodigoRudeId($request->getParameter('rude'));
          $extemporaneo->setNumMatricula($mat);
          $extemporaneo->setCodUeId($request->getParameter('ue_id'));
          $extemporaneo->setSubCeaId($request->getParameter('subcea_id'));
          $extemporaneo->setGestionId(sfConfig::get('app_gestion'));
          //$extemporaneo->setOperativoId(1);          
          $extemporaneo->setPeriodoId($request->getParameter('periodo_id'));
          $extemporaneo->setNivelId($request->getParameter('modalidad_id'));
          $extemporaneo->setCicloId($request->getParameter('nivel_id'));
          $extemporaneo->setGradoId($request->getParameter('grado_id'));
          $extemporaneo->setParalelo($request->getParameter('paralelo_id'));
          $extemporaneo->setTurnoId($request->getParameter('turno_id'));
          $extemporaneo->setEstadoMatriculaInicioId($request->getParameter('estado_id'));          
          $extemporaneo->setEstadoMatriculaFinId(4);
          $extemporaneo->setCodUeProcedenciaId($request->getParameter('ue_id'));
          $extemporaneo->setObservacionId(0);
          $extemporaneo->setFechaInscripcion(date('Y-m-d H:i:s'));
          $extemporaneo->save();                   
          
          //$control->save();
          
          $conn->commit();
          $this->getUser()->setFlash('notice',"LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO CON RUDE ".$request->getParameter('rude')." SE REALIZADO CORRECTAMENTE");
          $this ->redirect('ins_con_rude/index');
      /*} catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO");
          $this->redirect('ins_con_rude/index');
      }*/
      
  }

	public function executeRegistrarinscripciontecnica(sfWebRequest $request){
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      //try {
          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array(sfConfig::get('app_gestion'),$request->getParameter('ue_id')));
          $mat = (int)$matricula->getNumeroMatricula()+1;

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($request->getParameter('ue_id'),sfConfig::get('app_gestion')))->getNumeroMatricula();

          ///Registrar la inscripcion inscripcion
          $extemporaneo = new SdatRdeInscripcionTecnica();
          $extemporaneo->setInscripcionId($id);
          $extemporaneo->setGestionId(sfConfig::get('app_gestion'));
          $extemporaneo->setCodigoRudeId($request->getParameter('rude'));
          $extemporaneo->setNumMatricula($mat);
          $extemporaneo->setCodUeId($request->getParameter('ue_id'));
          $extemporaneo->setPeriodoId($request->getParameter('periodo_id'));          
          $extemporaneo->setSubCeaId($request->getParameter('subcea_id'));          
          $extemporaneo->setNivelId($request->getParameter('modalidad_id'));
          $extemporaneo->setCicloId($request->getParameter('nivel_id'));
          $extemporaneo->setGradoId($request->getParameter('grado_id'));
          $extemporaneo->setParalelo($request->getParameter('paralelo_id'));
          $extemporaneo->setTurnoId($request->getParameter('turno_id'));
          $extemporaneo->setCursoOfertaId($request->getParameter('curso_oferta_id'));
          $extemporaneo->setEstadoMatriculaInicioId($request->getParameter('estado_id'));
          $extemporaneo->setEstadoMatriculaFinId(4);
          $extemporaneo->setFechaInscripcion(date('Y-m-d H:i:s'));
           $extemporaneo->save();

          $conn->commit();
          $this->getUser()->setFlash('notice',"LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO CON RUDE ".$request->getParameter('rude')." SE REALIZADO CORRECTAMENTE");
          $this ->redirect('ins_con_rude/index');
      /*} catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO");
          $this->redirect('ins_con_rude/index');
      }*/

	}  
}
