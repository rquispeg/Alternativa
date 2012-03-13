<?php

/**
 * ins_sin_rude actions.
 *
 * @package    alternativa
 * @subpackage ins_sin_rude
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ins_sin_rudeActions extends sfActions
{
  public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('INS_SIN_RUDE',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {	
	$this->estudiante = new DatRdeEstudianteForm();
	$this->acreditaciones = new ClaAcreditacionForm();
    //$this->forward('default', 'module');
  } 

  public function executeDepartamento(sfWebRequest $request)
  {
      $this->departamentos = Doctrine::getTable('ClaDepartamento')->findByPaisId($request->getParameter('pais_id'));
  }
  
  public function executeProvincia(sfWebRequest $request)
  {
      $this->provincias = Doctrine::getTable('ClaProvincia')->findByDepartamentoId($request->getParameter('departamento_id'));
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
  
  public function executeUnidadeducativa(sfWebRequest $request)
  {	  
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
		$this->estudiantes = doctrine::getTable('DatRdeEstudiante')->getPosiblesEstudiantes($this->a['paterno'], $this->a['materno'], $this->a['nombre'], $this->a['fecha_nacimiento']['year'].'-'.$this->a['fecha_nacimiento']['month'].'-'.$this->a['fecha_nacimiento']['day']);
		$this->subcentros = Doctrine::getTable('DatRueSubcentro')->findByCodUeId($this->codue);
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
	  $this->a = $request->getParameter('dat_rde_estudiante');	  
      try {          
          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array(sfConfig::get('app_gestion'),$this->a['unidad_educativa']));
          $mat = (int)$matricula->getNumeroMatricula()+1;
		  
		  $sw=0;
          ////si tiene se da de baja si tiene inscripciones
          if ($request->getParameter('rudes'))
          {
              if ($request->getParameter('rudes') != -999)
              {
                  ///Buscar inscripciones y dar estado de matricula fin RETIRADO ABANDONO (10)
                  /*$inscripciones = Doctrine::getTable('DatRdeInscripcion')->findByIdInscripcionAndGestionId($request->getParameter('rudes'),sfConfig::get('app_gestion'));
                  foreach ($inscripciones as $inscripcion) {
                        $inscripcion->setEstadoMatriculaFinId('10');
                        $inscripcion->save();
                  }*/
                  $rude = $request->getParameter('rudes');
                  $sw=0;
              }
              else{
                  ////generar RUDE
                  $rude = $this->a['unidad_educativa'].sfConfig::get('app_gestion').$mat.$this->gererarRude($this->a['unidad_educativa'].sfConfig::get('app_gestion').$mat);
                  $sw=1;
              }
          }
          else{
              /////no tiene rude generamos rude
              $rude = $this->a['unidad_educativa'].sfConfig::get('app_gestion').$mat.$this->gererarRude($this->a['unidad_educativa'].sfConfig::get('app_gestion').$mat);
              $sw=1;
          }

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($this->a['unidad_educativa'],sfConfig::get('app_gestion')))->getNumeroMatricula();
          ///si no tiene rude creamos estudiante
          if ($sw == 1)
          {
            $this->estudiante = new DatRdeEstudiante();
            $this->estudiante->setCodigoRude($rude);
            $this->estudiante->setCarnetIdentidad($this->a['carnet_identidad']);
            $this->estudiante->setPaterno($this->a['paterno']);
            $this->estudiante->setMaterno($this->a['materno']);
            $this->estudiante->setNombre($this->a['nombre']);
            $this->estudiante->setFechaNacimiento($this->a['fecha_nacimiento']);
            $this->estudiante->setGenero($this->a['genero']);
            if ($this->a['pais_nac_id']==1){
                $this->estudiante->setPaisNacId($this->a['pais_nac_id']);
                $this->estudiante->setDepartamentoNacId($this->a['departamento_nac_id']);
                $this->estudiante->setProvinciaNacId($this->a['provincia_nac_id']);
            }
            else {
                $this->estudiante->setPaisNacId($this->a['pais_nac_id']);
                $this->estudiante->setDepartamentoNacId('0');
                $this->estudiante->setProvinciaNacId('0');
            }
            $this->estudiante->setLocalidadNac($this->a['localidad_nac']);
            $this->estudiante->setOficialia($this->a['oficialia']);
            $this->estudiante->setLibro($this->a['libro']);
            $this->estudiante->setPartida($this->a['partida']);
            $this->estudiante->setFolio($this->a['folio']);
            $this->estudiante->save();
          }
		  
          ///Registrar la inscripcion
          $this->extemporaneo = new SdatRdeInscripcion();
          $this->extemporaneo->setInscripcionId($id);
          $this->extemporaneo->setCodigoRudeId($rude);
          $this->extemporaneo->setNumMatricula($mat);
          $this->extemporaneo->setCodUeId($this->a['unidad_educativa']);
          $this->extemporaneo->setSubCeaId($this->a['subcea_id']);
          $this->extemporaneo->setGestionId(sfConfig::get('app_gestion'));          
          $this->extemporaneo->setPeriodoId($this->a['periodo_id']);
          $this->extemporaneo->setNivelId($this->a['modalidad_id']);
          $this->extemporaneo->setCicloId($this->a['nivel_id']);
          $this->extemporaneo->setGradoId($this->a['grado_id']);
          $this->extemporaneo->setParalelo($this->a['paralelo']);
          $this->extemporaneo->setTurnoId($this->a['turno_id']);
          $this->extemporaneo->setEstadoMatriculaInicioId($this->a['estado_id']);
          $this->extemporaneo->setEstadoMatriculaFinId(4);
          $this->extemporaneo->setCodUeProcedenciaId($this->a['unidad_educativa']);
          $this->extemporaneo->setObservacionId(0);
          $this->extemporaneo->setFechaInscripcion(date('Y-m-d H:i:s'));
          $this->extemporaneo->save();                           
          
          
          $conn->commit();
          $this->getUser()->setFlash('notice',"LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO CON RUDE ".$request->getParameter('rude')." SE REALIZADO CORRECTAMENTE");
          $this ->redirect('ins_sin_rude/index');
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO");
          $this->redirect('ins_sin_rude/index');
      }
      
  }

	public function executeRegistrarinscripciontecnica(sfWebRequest $request){
      $this->a = $request->getParameter('dat_rde_estudiante');
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      try {
          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array(sfConfig::get('app_gestion'),$this->a['unidad_educativa']));
          $mat = (int)$matricula->getNumeroMatricula()+1;
          $sw=0;
          ////si tiene se da de baja si tiene inscripciones
          if ($request->getParameter('rudes'))
          {
              if ($request->getParameter('rudes') != -999)
              {
                  $rude = $request->getParameter('rudes');
                  $sw=0;
              }
              else{
                  ////generar RUDE
                  $rude = $this->a['unidad_educativa'].sfConfig::get('app_gestion').$mat.$this->gererarRude($this->a['unidad_educativa'].sfConfig::get('app_gestion').$mat);
                  $sw=1;
              }
          }
          else{
              /////no tiene rude generamos rude
              $rude = $this->a['unidad_educativa'].sfConfig::get('app_gestion').$mat.$this->gererarRude($this->a['unidad_educativa'].sfConfig::get('app_gestion').$mat);
              $sw=1;
          }

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($this->a['unidad_educativa'],sfConfig::get('app_gestion')))->getNumeroMatricula();

          ///si no tiene rude creamos estudiante
          if ($sw == 1)
          {
            $this->estudiante = new DatRdeEstudiante();
            $this->estudiante->setCodigoRude($rude);
            $this->estudiante->setCarnetIdentidad($this->a['carnet_identidad']);
            $this->estudiante->setPaterno($this->a['paterno']);
            $this->estudiante->setMaterno($this->a['materno']);
            $this->estudiante->setNombre($this->a['nombre']);
            $this->estudiante->setFechaNacimiento($this->a['fecha_nacimiento']);
            $this->estudiante->setGenero($this->a['genero']);
            if ($this->a['pais_nac_id']==1){
                $this->estudiante->setPaisNacId($this->a['pais_nac_id']);
                $this->estudiante->setDepartamentoNacId($this->a['departamento_nac_id']);
                $this->estudiante->setProvinciaNacId($this->a['provincia_nac_id']);
            }
            else {
                $this->estudiante->setPaisNacId($this->a['pais_nac_id']);
                $this->estudiante->setDepartamentoNacId('0');
                $this->estudiante->setProvinciaNacId('0');
            }
            $this->estudiante->setLocalidadNac($this->a['localidad_nac']);
            $this->estudiante->setOficialia($this->a['oficialia']);
            $this->estudiante->setLibro($this->a['libro']);
            $this->estudiante->setPartida($this->a['partida']);
            $this->estudiante->setFolio($this->a['folio']);
            $this->estudiante->save();
          }
          else {
              $this->estudiante = Doctrine::getTable('DatRdeEstudiante')->find($rude);
              ///eliminar de la tabla de duplicados si existe registros
          }

          ///Registrar la inscripcion

          $this->extemporaneo = new SdatRdeInscripcionTecnica();
          $this->extemporaneo->setInscripcionId($id);
          $this->extemporaneo->setGestionId($this->getUser()->getAttribute('GESTION'));
          $this->extemporaneo->setCodigoRudeId($rude);
          $this->extemporaneo->setNumMatricula($mat);
          $this->extemporaneo->setCodUeId($this->a['unidad_educativa']);
          $this->extemporaneo->setSubCeaId($this->a['subcea_id']);
          $this->extemporaneo->setPeriodoId($this->a['periodo_id']);
          $this->extemporaneo->setNivelId($this->a['modalidad_id']);
          $this->extemporaneo->setCicloId($this->a['nivel_id']);
          $this->extemporaneo->setGradoId($this->a['grado_id']);
          $this->extemporaneo->setParalelo($this->a['paralelo']);
          $this->extemporaneo->setTurnoId($this->a['turno_id']);
          $this->extemporaneo->setCursoOfertaId($this->a['curso_oferta_id']);
          $this->extemporaneo->setEstadoMatriculaInicioId($this->a['estado_id']);
          $this->extemporaneo->setEstadoMatriculaFinId(4);
          $this->extemporaneo->setFechaInscripcion(date('Y-m-d H:i:s'));
          $this->extemporaneo->save();          
          
          $conn->commit();
          $this->getUser()->setFlash('notice1',"LA INSCRIPCION DEL ESTUDIANTE SE REALIZADO CORRECTAMENTE");
          $this ->redirect('ins_sin_rude/index');
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
		  $this->getUser()->setFlash('notice_error',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE");
          $this ->redirect('ins_sin_rude/index');
      }
	}
	
	private function gererarRude($cadena)
	{
		$codigoRude = "";
		$codigoVerificacion = "123456789A0";
		$peso = 2;
		$sum = 0;
		$int = 0;
		while($int < strlen($cadena)){
			if($peso == 7)
				$peso = 2;
			$sum = $sum + ($peso * ord(substr($cadena, $int, 1)));
			$peso = $peso + 1;
		$int = $int + 1;
		}
		return substr($codigoVerificacion, 10 - ($sum % 11), 1);
	}
}
