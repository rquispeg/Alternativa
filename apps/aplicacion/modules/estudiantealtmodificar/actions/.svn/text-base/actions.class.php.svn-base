<?php

/**
 * estudiantealtmodificar actions.
 *
 * @package    alternativa
 * @subpackage estudiantealtmodificar
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estudiantealtmodificarActions extends sfActions
{
  public function preExecute()
  {
    $c = new ControlSistema('EST-AMOD',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  } 

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      //$this->datos = Doctrine::getTable('DatRdeEstudiante')->getEstudianteModificarDatoAdultos('20680003201129A','25','2011');
  }

  public function executeBuscarestudiante(sfWebRequest $request)
  {
    $this->a = $request->getParameter('dat_rde_estudiante');
    $this->datos = Doctrine::getTable('DatRdeEstudiante')->getEstudianteModificarDatoEspecial($this->a['codigo_rude'],$this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
    if ($this->datos)
    {
        $this->estudiante = new DatRdeEstudianteForm($this->datos);
        $this->departamentos = Doctrine::getTable('ClaDepartamento')->findAll();
        $this->provincias = Doctrine::getTable('ClaProvincia')->findByDepartamentoId($this->datos->getDepartamentoNacId());
    }
    else{
        $this->datos = Doctrine::getTable('DatRdeEstudiante')->getEstudianteModificarDatoTecnica($this->a['codigo_rude'],$this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
        if ($this->datos)
        {
            $this->estudiante = new DatRdeEstudianteForm($this->datos);
            $this->departamentos = Doctrine::getTable('ClaDepartamento')->findAll();
            $this->provincias = Doctrine::getTable('ClaProvincia')->findByDepartamentoId($this->datos->getDepartamentoNacId());
        }
        else{
            $this->datos = Doctrine::getTable('DatRdeEstudiante')->getEstudianteModificarDatoAdultos($this->a['codigo_rude'],$this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
            if ($this->datos)
            {
                $this->estudiante = new DatRdeEstudianteForm($this->datos);
                $this->departamentos = Doctrine::getTable('ClaDepartamento')->findAll();
                $this->provincias = Doctrine::getTable('ClaProvincia')->findByDepartamentoId($this->datos->getDepartamentoNacId());
            }
            else{
                $this->notice = 'RUDE NO EXISTE, NO TIENE INSCRIPCION PARA LA GESTION '.$this->getUser()->getAttribute('GESTION').' O NO ESTA REGISTRADO EN UNA UNIDAD EDUCATIVA QUE TIENE TUICION';
            }
        }
    }
        
  }

  public function executeDepartamento(sfWebRequest $request)
  {
      $this->departamentos = Doctrine::getTable('ClaDepartamento')->findByPaisId($request->getParameter('pais_id'));
  }
  public function executeProvincia(sfWebRequest $request)
  {
      $this->provincias = Doctrine::getTable('ClaProvincia')->findByDepartamentoId($request->getParameter('departamento_id'));
  }

  public function executeModificardatos(sfWebRequest $request)
  {
     $request = $this->getRequest();
     $a = $request->getParameter('dat_rde_estudiante');
     if (Doctrine::getTable('CtrRdeEstudiante')->find(array($a['codigo_rude'],$this->getUser()->getAttribute('GESTION'))))
     $this->getUser()->setFlash('notice_error6', "YA FUERON MODIFICADOS LOS DATOS DEL ESTUDIANTE");
     else
     {
     $conn = Doctrine_Manager::connection();
     $conn->beginTransaction();
     try {
          //Modificar los datos de estudiante
          $estudiante = Doctrine::getTable('DatRdeEstudiante')->find($a['codigo_rude']);
          $control = new CtrRdeEstudiante();
          $control->setCodigoRude($a['codigo_rude']);
          $control->setGestionId($this->getUser()->getAttribute('GESTION'));
          $control->setCarnetIdentidad($estudiante->getCarnetIdentidad());
          $control->setPaterno($estudiante->getPaterno());
          $control->setMaterno($estudiante->getMaterno());
          $control->setNombre($estudiante->getNombre());
          $control->setGenero($estudiante->getGenero());
          $control->setFechaNacimiento($estudiante->getFechaNacimiento());
          $control->setPaisNacId($estudiante->getPaisNacId());
          if ($estudiante->getPaisNacId()==1) {
            $control->setDepartamentoNacId($estudiante->getDepartamentoNacId());
            $control->setProvinciaNacId($estudiante->getProvinciaNacId());
            $control->setLocalidadNac($estudiante->getLocalidadNac());
          }
          else{
            $control->setDepartamentoNacId('0');
            $control->setProvinciaNacId('0');
            $control->setLocalidadNac('');
          }
          $control->setOficialia($estudiante->getOficialia());
          $control->setLibro($estudiante->getLibro());
          $control->setFolio($estudiante->getFolio());
          $control->setPartida($estudiante->getPartida());
          $control->setUsuarioId($this->getUser()->getAttribute('USUARIO_ID'));
          $control->setFechaModificacion(date('Y-m-d H:i:s'));
          $control->setCodUeId($a['cod_ue_id']);
          $control->save();

          $estudiante->setCarnetIdentidad(strtoupper($a['carnet_identidad']));
          $estudiante->setPaterno(strtoupper($a['paterno']));
          $estudiante->setMaterno(strtoupper($a['materno']));
          $estudiante->setNombre(strtoupper($a['nombre']));
          $estudiante->setGenero(strtoupper($a['genero']));
          $estudiante->setFechaNacimiento($a['fecha_nacimiento']['year'].'-'.$a['fecha_nacimiento']['month'].'-'.$a['fecha_nacimiento']['day']);
          $estudiante->setPaisNacId($a['pais_nac_id']);
          if ($estudiante->getPaisNacId()==1) {
            $estudiante->setDepartamentoNacId($a['departamento_nac_id']);
            $estudiante->setProvinciaNacId($a['provincia_nac_id']);
            $estudiante->setLocalidadNac(strtoupper($a['localidad_nac']));
          }
          else{
            $estudiante->setDepartamentoNacId('0');
            $estudiante->setProvinciaNacId('0');
            $estudiante->setLocalidadNac('');
          }

          $estudiante->setOficialia($a['oficialia']);
          $estudiante->setLibro($a['libro']);
          $estudiante->setPartida($a['partida']);
          $estudiante->setFolio($a['folio']);
          $estudiante->save();

          $this->getUser()->setFlash('notice6',"LA MODIFICACION DE LOS DATOS DEL ESTUDIANTE SE REALIZO EXISTOSAMENTE");
          $conn->commit();
      } catch (Doctrine_Exception $e) {
          $conn->rollback();
         $this->getUser()->setFlash('notice_error6', "HUBO UN ERROR EN LA MODIFICACION DE LOS DATOS DEL ESTUDIANTE");
      }
     }
  }

}
