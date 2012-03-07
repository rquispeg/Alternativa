<?php

/**
 * adultostecnicaextemporanea actions.
 *
 * @package    alternativa
 * @subpackage adultostecnicaextemporanea
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultostecnicaextemporaneaActions extends sfActions
{
  public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('TEC-EXT',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  } 

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->especialidades = doctrine::getTable('DatAltCursoTecnica')->getEspecialidades('30610026','2011','2','0','15','11','1');
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
    $this->estudiante = doctrine::gettable('DatRdeEstudiante')->find($this->a['codigo_rude']);
    if ($this->estudiante){
        $this->unidades = doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasTecnica($this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
        $this->periodo = $this->a['periodo'];
    }
    else
        $this->notice = 'CODIGO RUDE NO EXISTE';
  }

  public function executeSubcentro(sfWebRequest $request)
  {
      $this->ue = $request->getParameter('ue_id');
      $this->gestion = $this->getUser()->getAttribute('GESTION');
      $this->periodo = $request->getParameter('periodo_id');
      $this->subcentros = doctrine::getTable('DatAltCursoTecnica')->getSubcentros($this->getUser()->getAttribute('GESTION'),$request->getParameter('ue_id'),$request->getParameter('periodo_id'));
  }

  public function executeModalidad(sfWebRequest $request){
      //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo'));
      $this->modalidades = doctrine::getTable('DatAltCursoTecnica')->getModalidad($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'));
  }

  public function executeNivel(sfWebRequest $request)
  {
    $this->ciclos = doctrine::getTable('DatAltCursoTecnica')->getNiveles($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'));
  }

  public function executeCiclo(sfWebRequest $request)
  {
    $this->nivel = $request->getParameter('modalidad_id');
    $this->ciclo = $request->getParameter('nivel_id');
    $this->grados = doctrine::getTable('DatAltCursoTecnica')->getGrados($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'));
  }

  public function executeEspecialidad(sfWebRequest $request)
  {
    $this->especialidades = doctrine::getTable('DatAltCursoTecnica')->getEspecialidades($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'));
  }

  public function executeParalelo(sfWebRequest $request)
  {
    $this->paralelos = doctrine::gettable('DatAltCursoTecnica')->getParalelo($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('curso_oferta_id'));
  }

  public function executeTurno(sfWebRequest $request){
      //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('modalidad_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('curso_oferta_id').'/'.$request->getParameter('paralelo'));
      $this->turnos = doctrine::getTable('DatAltCursoTecnica')->getTurno($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('curso_oferta_id'),$request->getParameter('paralelo'));
  }

  public function executeRegistrarinscripcion(sfWebRequest $request){
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      try {
          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array($this->getUser()->getAttribute('GESTION'),$request->getParameter('ue_id')));
          $mat = (int)$matricula->getNumeroMatricula()+1;

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION')))->getNumeroMatricula();

          ///Registrar la inscripcion inscripcion
          $extemporaneo = new DatRdeInscripcionTecnica();
          $extemporaneo->setIdInscripcion($id);
          $extemporaneo->setGestionId($this->getUser()->getAttribute('GESTION'));
          $extemporaneo->setCodigoRudeId($request->getParameter('rude'));
          $extemporaneo->setNumMatricula($mat);
          $extemporaneo->setCodUeId($request->getParameter('ue_id'));
          $extemporaneo->setPeriodoId($request->getParameter('periodo_id'));
          $extemporaneo->setOperativoId(1);
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
          $extemporaneo->setPostulaAcreditacionNId($request->getParameter('modalidad_id'));
          $extemporaneo->setPostulaAcreditacionCId($request->getParameter('nivel_id'));
          $extemporaneo->save();

          //guardar en el log de inscripcion extempor?neo
          $control = new CtrRdeExtemporaneoTecnica();
          $control->setFechaExtemporaneo(date('Y-m-d H:i:s'));
          $control->setInscripcionId($id);
          $control->setGestionId($this->getUser()->getAttribute('GESTION'));
          $control->setUsuarioId($this->getUser()->getAttribute('USUARIO_ID'));
          /////inscripcion con RUDE alternativa extemporáneo
          $control->setRdeBool('17');
          $control->save();

          $conn->commit();
          $this->getUser()->setFlash('notice',"LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO CON RUDE ".$request->getParameter('rude')." SE REALIZADO CORRECTAMENTE");
          $this ->redirect('adultostecnicaextemporanea/index');
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO");
          $this->redirect('adultostecnicaextemporanea/index');
      }

  }


  
}
