<?php

/**
 * adultoshumanisticaextemporanea actions.
 *
 * @package    alternativa
 * @subpackage adultoshumanisticaextemporanea
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultoshumanisticaextemporaneaActions extends sfActions
{
  public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('HUM-EXT',$this->getUser()->getAttribute('USUARIO_ID'));
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
    //$this->unidades = doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadas('25');
    //$this->unidades = doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadas('25','2011');

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
        $this->inscripcion = doctrine::getTable('DatRdeInscripcion')->getBuscarInscripcionEstudianteExtemporaneo($this->estudiante->getCodigoRude(),$this->getUser()->getAttribute('GESTION'));        
        if ($this->inscripcion)
            $this->notice1 = 0;
        $this->unidades = doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasAlt($this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
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
      $this->subcentros = doctrine::getTable('DatSieCurso')->getSubcentros($this->getUser()->getAttribute('GESTION'),$request->getParameter('ue_id'),$request->getParameter('periodo_id'));
  }

  public function executeModalidad(sfWebRequest $request){
      //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo'));
      $this->modalidades = doctrine::getTable('DatSieCurso')->getModalidad($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'));
  }

  public function executeNivel(sfWebRequest $request)
  {
    $this->ciclos = doctrine::getTable('DatSieCurso')->getNiveles($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'));
  }

  public function executeCiclo(sfWebRequest $request)
  {
    $this->nivel = $request->getParameter('modalidad_id');
    $this->ciclo = $request->getParameter('nivel_id');
    $this->grados = doctrine::getTable('DatSieCurso')->getGrados($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'));
  }

  public function executeParalelo(sfWebRequest $request)
  {
    $this->paralelos = doctrine::gettable('DatSieCurso')->getParalelo($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'));
  }

  public function executeTurno(sfWebRequest $request){
      //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo'));
      $this->turnos = doctrine::getTable('DatSieCurso')->getTurno($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'),$request->getParameter('subcea_id'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('paralelo'));
  }

  public function executeRegistrarinscripcion(sfWebRequest $request){
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      try {
          ///Buscar inscripciones y dar estado de matricula fin RETIRADO ABANDONO
          $inscripciones = Doctrine::getTable('DatRdeInscripcion')->getInscripcionPorGestionPeriodo($request->getParameter('rude'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('periodo_id'));
          foreach ($inscripciones as $inscripcion) {
              if($inscripcion->getEstadoMatriculaFinId()=='4')
              {
                $inscripcion->setEstadoMatriculaFinId('6');
                $inscripcion->setObservacionId('0');
                $inscripcion->save();
              }
          }

          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array($this->getUser()->getAttribute('GESTION'),$request->getParameter('ue_id')));
          $mat = (int)$matricula->getNumeroMatricula()+1;

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION')))->getNumeroMatricula();
          
          ///Registrar la inscripcion inscripcion
          $extemporaneo = new DatRdeInscripcion();
          $extemporaneo->setIdInscripcion($id);
          $extemporaneo->setCodigoRudeId($request->getParameter('rude'));
          $extemporaneo->setNumMatricula($mat);
          $extemporaneo->setCodUeId($request->getParameter('ue_id'));
          $extemporaneo->setSubCeaId($request->getParameter('subcea_id'));
          $extemporaneo->setGestionId($this->getUser()->getAttribute('GESTION'));
          $extemporaneo->setOperativoId(1);          
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
          
          //guardar en el log de inscripcion extempor?neo
          $control = new CtrRdeExtemporaneo();
          $control->setFechaExtemporaneo(date('Y-m-d H:i:s'));
          $control->setInscripcionId($id);
          $control->setGestionId($this->getUser()->getAttribute('GESTION'));
          $control->setUsuarioId($this->getUser()->getAttribute('USUARIO_ID'));
          /////inscripcion con RUDE alternativa extemporáneo
          $control->setRdeBool('15');
          $control->save();
          
          $conn->commit();
          $this->getUser()->setFlash('notice',"LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO CON RUDE ".$request->getParameter('rude')." SE REALIZADO CORRECTAMENTE");
          $this ->redirect('adultoshumanisticaextemporanea/index');
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO");
          $this->redirect('adultoshumanisticaextemporanea/index');
      }
      
  }
  
  
  
  public function executeReporte(){
      $this->setLayout('reporte');
    return sfView::SUCCESS;
  }
}
