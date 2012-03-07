<?php

/**
 * especialextemporanea actions.
 *
 * @package    alternativa
 * @subpackage especialextemporanea
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class especialextemporaneaActions extends sfActions
{
  public function preExecute()
  {
    $c = new ControlSistema('ESP-EXT',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->paralelos = Doctrine::getTable('DatEspCurso')->getParalelo('81730091','2011','1','1','1');
    //die(print_r($this->niveles[0]));
  }

  public function executeBuscarestudiante()
  {
    $request = $this->getRequest();
    $this->a = $request->getParameter('dat_rde_estudiante');
    $this->estudiante = Doctrine::getTable('DatRdeEstudiante')->find($this->a['codigo_rude']);
    if ($this->estudiante){
        $this->inscripcion = Doctrine::getTable('DatRdeInscripcionEspecial')->getBuscarInscripcionEstudianteExtemporaneo($this->estudiante->getCodigoRude(),$this->getUser()->getAttribute('GESTION'));
        if ($this->inscripcion)
            $this->notice1 = 0;
        $this->unidades = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasEspecial($this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
    }
    else
        $this->notice = 'CODIGO RUDE NO EXISTE';
  }

  public function executeNivel(sfWebRequest $request)
  {
    $this->niveles = Doctrine::getTable('DatEspCurso')->getNiveles($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'));
  }

  public function executeGrado(sfWebRequest $request)
  {
    $this->ciclo = $request->getParameter('nivel_id');
    $this->grados = doctrine::getTable('DatEspCurso')->getGrados($request->getParameter('ue_id'),$request->getParameter('nivel_id'),$this->getUser()->getAttribute('GESTION'));
  }

  public function executeDiscapacidad(sfWebRequest $request)
  {
    //die($request->getParameter('ue_id').'/'.$request->getParameter('nivel_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('grado_id')
    $this->discapacidades = Doctrine::getTable('DatEspCurso')->getDiscapacidad($request->getParameter('ue_id'),$request->getParameter('nivel_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('grado_id'));
  }

  public function executeParalelo(sfWebRequest $request)
  {
    $this->paralelos = Doctrine::getTable('DatEspCurso')->getParalelo($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('discapacidad_id'));

  }

  public function executeTurno(sfWebRequest $request){
      $this->turnos = doctrine::getTable('DatEspCurso')->getTurno($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('nivel_id'),$request->getParameter('grado_id'),$request->getParameter('discapacidad_id'),$request->getParameter('paralelo'));
  }

  public function executeRegistrarinscripcion(sfWebRequest $request){

      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      try {
          ///Buscar inscripciones y dar estado de matricula fin RETIRADO ABANDONO (10)
          $inscripciones = Doctrine::getTable('DatRdeInscripcionEspecial')->getInscripcionPorGestion($request->getParameter('rude'),$this->getUser()->getAttribute('GESTION'));
          foreach ($inscripciones as $inscripcion) {
              if($inscripcion->getEstadoMatriculaFinId()=='4')
              {
                $inscripcion->setEstadoMatriculaFinId('6');
                $inscripcion->save();
              }
          }
          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array($this->getUser()->getAttribute('GESTION'),$request->getParameter('ue_id')));
          $mat = (int)$matricula->getNumeroMatricula()+1;

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION')))->getNumeroMatricula();

          ///Registrar la inscripcion inscripcion
          $extemporaneo = new DatRdeInscripcionEspecial();
          $extemporaneo->setIdInscripcion($id);
          $extemporaneo->setCodigoRudeId($request->getParameter('rude'));
          $extemporaneo->setNumMatricula($mat);
          $extemporaneo->setCodUeId($request->getParameter('ue_id'));
          $extemporaneo->setSubCeaId(0);
          $extemporaneo->setGestionId($this->getUser()->getAttribute('GESTION'));
          $extemporaneo->setOperativoId(1);
          $extemporaneo->setPeriodoId(1);
          $extemporaneo->setNivelId(16);
          $extemporaneo->setCicloId($request->getParameter('nivel_id'));
          $extemporaneo->setGradoId($request->getParameter('grado_id'));
          $extemporaneo->setParalelo($request->getParameter('paralelo_id'));
          $extemporaneo->setTurnoId($request->getParameter('turno_id'));
          $extemporaneo->setDiscapacidadId($request->getParameter('discapacidad_id'));
          $extemporaneo->setEstadoMatriculaInicioId($request->getParameter('estado_id'));
          $extemporaneo->setEstadoMatriculaFinId(4);
          $extemporaneo->setFechaInscripcion(date('Y-m-d H:i:s'));
          $extemporaneo->save();

          //guardar en el log de inscripcion extemporáneo
          $control = new CtrRdeExtemporaneoEspecial();
          $control->setFechaExtemporaneo(date('Y-m-d H:i:s'));
          $control->setInscripcionId($id);
          $control->setGestionId($this->getUser()->getAttribute('GESTION'));
          $control->setUsuarioId($this->getUser()->getAttribute('USUARIO_ID'));
          /////inscripcion con RUDE
          $control->setRdeBool('16');
          $control->save();
          
          $conn->commit();
          $this->getUser()->setFlash('notice',"LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO CON RUDE ".$request->getParameter('rude')." SE REALIZADO CORRECTAMENTE");
          $this ->redirect('especialextemporanea/index');
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO");
          $this->redirect('especialextemporanea/index');
      }
  }



}
