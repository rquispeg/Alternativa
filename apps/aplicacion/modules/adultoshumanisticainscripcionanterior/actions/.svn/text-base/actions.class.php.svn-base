<?php

/**
 * adultoshumanisticainscripcionanterior actions.
 *
 * @package    alternativa
 * @subpackage adultoshumanisticainscripcionanterior
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultoshumanisticainscripcionanteriorActions extends sfActions
{
    
     public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('HUM-ANT',$this->getUser()->getAttribute('USUARIO_ID'));
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

  public function executeUnidadeducativa(sfWebRequest $request)
  {
      
      $this->a = $request->getParameter('dat_rde_estudiante');
      //echo $a['paterno'];echo $a['materno'];echo $a['nombre'];echo $a['fecha_nacimiento']['day'];die;
      //$this->unidades = doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasAlt($this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
      $this->estudiantes = doctrine::getTable('DatRdeEstudiante')->getPosiblesEstudiantes($this->a['paterno'], $this->a['materno'], $this->a['nombre'], $this->a['fecha_nacimiento']['year'].'-'.$this->a['fecha_nacimiento']['month'].'-'.$this->a['fecha_nacimiento']['day']);
  }

  public function executePeriodo(sfWebRequest $request)
  {      
      $this->unidades = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasSinRude($this->getUser()->getAttribute('USUARIO_ID'),$request->getParameter('gestion_id'),$request->getParameter('periodo_id'));
  }

  public function executeSubcentro(sfWebRequest $request)
  {
      $this->ue = $request->getParameter('ue_id');
      $this->gestion = $request->getParameter('gestion_id');
      $this->periodo = $request->getParameter('periodo_id');
      $this->subcentros = doctrine::getTable('DatSieCurso')->getSubcentros($request->getParameter('gestion_id'),$request->getParameter('ue_id'),$request->getParameter('periodo_id'));
  }
  
  public function executeModalidad(sfWebRequest $request){      
      //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo'));
      $this->modalidades = doctrine::getTable('DatSieCurso')->getModalidad($request->getParameter('ue_id'),$request->getParameter('gestion_id'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'));
  }
  
  public function executeNivel(sfWebRequest $request)
  {    
    $this->nivel = $request->getParameter('modalidad_id');
    $this->ciclos = doctrine::getTable('DatSieCurso')->getNiveles($request->getParameter('ue_id'),$request->getParameter('gestion_id'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'));
  }
  
  public function executeCiclo(sfWebRequest $request)
  {
    $this->nivel = $request->getParameter('modalidad_id');
    $this->ciclo = $request->getParameter('nivel_id');
    $this->grados = doctrine::getTable('DatSieCurso')->getGrados($request->getParameter('ue_id'),$request->getParameter('gestion_id'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'));
  }
  
  public function executeParalelo(sfWebRequest $request)
  {
    $this->paralelos = doctrine::gettable('DatSieCurso')->getParalelo($request->getParameter('ue_id'),$request->getParameter('gestion_id'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'));
  }
  
  public function executeTurno(sfWebRequest $request){
      //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo'));
      $this->turnos = doctrine::getTable('DatSieCurso')->getTurno($request->getParameter('ue_id'),$request->getParameter('gestion_id'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('paralelo'));
  }

  public function executeInscribirestudiante(sfWebRequest $request)
  {
      $this->a = $request->getParameter('dat_rde_estudiante');
      
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      try {
          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array($this->a['gestion_id'],$this->a['unidad_educativa']));
          $mat = (int)$matricula->getNumeroMatricula()+1;
          $sw=0;
          ////si tiene se da de baja si tiene inscripciones
          if ($request->getParameter('rudes'))
          {
              if ($request->getParameter('rudes') != -999)
              {
                  ///Buscar inscripciones y dar estado de matricula fin RETIRADO ABANDONO (10)
                  $inscripciones = Doctrine::getTable('DatRdeInscripcion')->findByIdInscripcionAndGestionId($request->getParameter('rudes'),$this->a['gestion_id']);
                  foreach ($inscripciones as $inscripcion) {
                        $inscripcion->setEstadoMatriculaFinId('10');
                        $inscripcion->save();
                  }
                  $rude = $request->getParameter('rudes');
                  $sw=0;
              }
              else{
                  ////generar RUDE
                  $rude = $this->a['unidad_educativa'].$this->a['gestion_id'].$mat.$this->gererarRude($this->a['unidad_educativa'].$this->a['gestion_id'].$mat);
                  $sw=1;
              }
          }
          else{
              /////no tiene rude generamos rude
              $rude = $this->a['unidad_educativa'].$this->a['gestion_id'].$mat.$this->gererarRude($this->a['unidad_educativa'].$this->a['gestion_id'].$mat);
              $sw=1;
          }

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($this->a['unidad_educativa'],$this->a['gestion_id']))->getNumeroMatricula();

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
              $q = Doctrine_Query::create()
                ->delete('CtrRdeDuplicados')
                ->addWhere('codigo_rude_id = ? ',$rude);
                $deleted = $q->execute();
          }

          ///Registrar la inscripcion
          $this->extemporaneo = new DatRdeInscripcion();
          $this->extemporaneo->setIdInscripcion($id);
          $this->extemporaneo->setCodigoRudeId($rude);
          $this->extemporaneo->setNumMatricula($mat);
          $this->extemporaneo->setCodUeId($this->a['unidad_educativa']);
          $this->extemporaneo->setSubCeaId($this->a['subcea_id']);
          $this->extemporaneo->setGestionId($this->a['gestion_id']);
          $this->extemporaneo->setOperativoId(1);
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

          //guardar en el log de inscripcion extemporáneo
          $control = new CtrRdeExtemporaneo();
          $control->setFechaExtemporaneo(date('Y-m-d H:i:s'));
          $control->setInscripcionId($id);
          $control->setGestionId($this->a['gestion_id']);
          $control->setUsuarioId($this->getUser()->getAttribute('USUARIO_ID'));
          /////inscripcion sin RUDE
          $control->setRdeBool('17');
          $control->save();
          $conn->commit();
          $this->getUser()->setFlash('notice1',"LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO SE REALIZADO CORRECTAMENTE");
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error1',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO");
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
