<?php

/**
 * especialinscripcionsinrude actions.
 *
 * @package    alternativa
 * @subpackage especialinscripcionsinrude
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class especialinscripcionsinrudeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
      $this->estudiante = new DatRdeEstudianteForm();

  }

  public function executeUnidadeducativa(sfWebRequest $request)
  {
      $this->a = $request->getParameter('dat_rde_estudiante');
      $this->estudiantes = Doctrine::getTable('DatRdeEstudiante')->getPosiblesEstudiantes($this->a['paterno'], $this->a['materno'], $this->a['nombre'], $this->a['fecha_nacimiento']['year'].'-'.$this->a['fecha_nacimiento']['month'].'-'.$this->a['fecha_nacimiento']['day']);
      $this->unidades = Doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasEspecial($this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
  }

  public function executeInscribirestudiante(sfWebRequest $request)
  {
      $this->a = $request->getParameter('dat_rde_estudiante');
      $conn = Doctrine_Manager::connection();
      $conn->beginTransaction();
      try {
          ///Obtener la matricula de la unidad
          $matricula = Doctrine::getTable('SeqInscripcionUe')->find(array($this->getUser()->getAttribute('GESTION'),$this->a['unidad_educativa']));
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
                  $rude = $this->a['unidad_educativa'].$this->getUser()->getAttribute('GESTION').$mat.$this->gererarRude($this->a['unidad_educativa'].$this->getUser()->getAttribute('GESTION').$mat);
                  $sw=1;
              }
          }
          else{
              /////no tiene rude generamos rude
              $rude = $this->a['unidad_educativa'].$this->getUser()->getAttribute('GESTION').$mat.$this->gererarRude($this->a['unidad_educativa'].$this->getUser()->getAttribute('GESTION').$mat);
              $sw=1;
          }

          //Obtener el Id de inscripcion
          $id = Doctrine::getTable('SeqInscripcionUeRango')->find(array($this->a['unidad_educativa'],$this->getUser()->getAttribute('GESTION')))->getNumeroMatricula();

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

          $this->extemporaneo = new DatRdeInscripcionEspecial();
          $this->extemporaneo->setIdInscripcion($id);
          $this->extemporaneo->setGestionId($this->getUser()->getAttribute('GESTION'));
          $this->extemporaneo->setCodigoRudeId($rude);
          $this->extemporaneo->setNumMatricula($mat);
          $this->extemporaneo->setCodUeId($this->a['unidad_educativa']);
          $this->extemporaneo->setSubCeaId(0);
          $this->extemporaneo->setOperativoId(1);
          $this->extemporaneo->setPeriodoId(1);
          $this->extemporaneo->setNivelId(16);
          $this->extemporaneo->setCicloId($this->a['nivel_id']);
          $this->extemporaneo->setGradoId($this->a['grado_id']);
          $this->extemporaneo->setParalelo($this->a['paralelo']);
          $this->extemporaneo->setTurnoId($this->a['turno_id']);
          $this->extemporaneo->setDiscapacidadId($this->a['discapacidad_id']);
          $this->extemporaneo->setEstadoMatriculaInicioId($this->a['estado_id']);
          $this->extemporaneo->setEstadoMatriculaFinId(4);
          $this->extemporaneo->setFechaInscripcion(date('Y-m-d H:i:s'));
          $this->extemporaneo->save();

          //guardar en el log de inscripcion extemporáneo
          $control = new CtrRdeExtemporaneoEspecial();
          $control->setFechaExtemporaneo(date('Y-m-d H:i:s'));
          $control->setInscripcionId($id);
          $control->setGestionId($this->getUser()->getAttribute('GESTION'));
          $control->setUsuarioId($this->getUser()->getAttribute('USUARIO_ID'));
          /////inscripcion con RUDE
          $control->setRdeBool('17');
          $control->save();

          $conn->commit();
          $this->getUser()->setFlash('notice1',"LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO SE REALIZADO CORRECTAMENTE");
          
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error1',"ERROR EN LA INSCRIPCION DEL ESTUDIANTE EXTEMPORANEO");
      };
      $this ->redirect('especialinscripcionsinrude/datosinscripcion?id='.$this->extemporaneo->getIdInscripcion().'&gestion_id='.$this->extemporaneo->getGestionId());
  }

  public function executeDatosinscripcion(sfWebRequest $request)
  {
      $this->inscripcion = Doctrine::getTable('DatRdeInscripcionEspecial')->find(array($request->getParameter('id'),$request->getParameter('gestion_id')));
      $this->estudiante = Doctrine::getTable('DatRdeEstudiante')->find($this->inscripcion->getCodigoRudeId());
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
