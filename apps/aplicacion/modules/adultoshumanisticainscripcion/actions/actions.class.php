<?php

/**
 * adultoshumanisticainscripcion actions.
 *
 * @package    alternativa
 * @subpackage adultoshumanisticainscripcion
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultoshumanisticainscripcionActions extends sfActions
{
 public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('HUM_INS',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
}
  public function executeIndex(sfWebRequest $request)
  {      
      $this->unidades = doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasAlt($this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));      
  }
 /**
  * Executes buscar los datos del estudiante de acuerdo al c?digo RUDE
  *
  * @param sfRequest $request el c?digo RUDE
  */

  
  public function executeSubcentro(sfWebRequest $request)
  {   
      $request = $this->getRequest();
      $this->ue = $request->getParameter('ue_id');
      $this->gestion = ($this->getUser()->getAttribute('GESTION'));
      $this->subcentros = doctrine::gettable('DatSieCurso')->getSubcentros($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'));
  }

  public function executeModalidad(sfWebRequest $request)
  {    
    $this->niveles = doctrine::gettable('DatSieCurso')->getNiveles($request->getParameter('ue_id'),$this->getUser()->getAttribute('GESTION'),'2',$request->getParameter('subcea_id'));
  }
  
  public function executeNivel(sfWebRequest $request)
  {      
    $this->nivel = $request->getParameter('modalidad_id');    
    //print($request->getParameter('modalidad_id')); die;
    $this->ciclos = doctrine::gettable('DatSieCurso')->getCiclos($request->getParameter('ue_id'),$request->getParameter('modalidad_id'),$this->getUser()->getAttribute('GESTION'),'2',$request->getParameter('subcea_id'));        
  }

  public function executeCiclo(sfWebRequest $request)
  {    
    $this->nivel = $request->getParameter('modalidad_id');
    $this->ciclo = $request->getParameter('nivel_id');    
    $this->grados = doctrine::gettable('DatSieCurso')->getGradosAlt($request->getParameter('ue_id'),$request->getParameter('modalidad_id'), $request->getParameter('nivel_id'),$this->getUser()->getAttribute('GESTION'),'2',$request->getParameter('subcea_id'));    
  }

  public function executeParalelo(sfWebRequest $request)
  {
    $this->nivel = $request->getParameter('modalidad_id');
    $this->ciclo = $request->getParameter('nivel_id');
    $this->grado = $request->getParameter('ciclo_id');
    $this->paralelos = doctrine::gettable('DatSieCurso')->getParaleloAlt($request->getParameter('ue_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('ciclo_id'),$this->getUser()->getAttribute('GESTION'),'2',$request->getParameter('subcea_id'));
  }

  public function executeTurno(sfWebRequest $request){            
      $this->turnos = doctrine::getTable('DatSieCurso')->getTurnoAlt($request->getParameter('ue_id'),$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('ciclo_id'),$this->getUser()->getAttribute('GESTION'),$request->getParameter('paralelo_id'),'2',$request->getParameter('subcea_id'));
  }
  
  public function  executeListaestudiantes(sfWebRequest $request)
  {
      $this->ue_id = $request->getParameter('ue_id');
      $this->subcea_id = $request->getParameter('subcea_id');      
      $this->modalidad_id = $request->getParameter('modalidad_id');
      $this->nivel_id = $request->getParameter('nivel_id');
      $this->ciclo_id = $request->getParameter('ciclo_id');
      $this->paralelo_id = $request->getParameter('paralelo_id');
      $this->turno_id = $request->getParameter('turno_id');      
      //echo $request->getParameter('ue_id'); die;
      
      $this->pager = new sfDoctrinePager('DatRdeInscripcion',10);
      $this->pager->setQuery(Doctrine::getTable('DatRdeInscripcion')->getEstudiantePorCurso($request->getParameter('ue_id'),$request->getParameter('subcea_id'),$this->getUser()->getAttribute('GESTION'),'2',$request->getParameter('modalidad_id'),$request->getParameter('nivel_id'),$request->getParameter('ciclo_id'),$request->getParameter('paralelo_id'),$request->getParameter('turno_id')));
      $this->pager->setPage($request->getParameter('page', 1));
      $this->pager->init();            
  }

  public function executeInscribir(sfWebRequest $request){
    $request = $this->getRequest();
    $this->ue_id = $request->getParameter('ue_id');
    $this->subcea_id = $request->getParameter('subcea_id');      
    $this->modalidad_id = $request->getParameter('modalidad_id');
    $this->nivel_id = $request->getParameter('nivel_id');
    $this->ciclo_id = $request->getParameter('ciclo_id');
    $this->paralelo_id = $request->getParameter('paralelo_id');
    $this->turno_id = $request->getParameter('turno_id');
    
    //print_r($this->getUser()->getFlash('bachillerato')); die;
    if (!$ids = $request->getParameter('ids'))
        {
           $this->getUser()->setFlash('error', 'Debe seleccionar por lo menos un elemento');
           //$this->redirect('@dat_usu_permiso_asignarpermiso');
        }
        else
        {     
            // 
            $conn = Doctrine_Manager::connection();
            $conn->beginTransaction();
            $date_time = date('Y-m-d H:i:s');    
            //try 
            //{  
                /* GUARDANDO LOS DATOS QUE SE SELECCIONARON EN UNA TABLA AUXILIAR / ESTA TABLA ES TEMPORAL
                 * 
                */
                
                $id_inscripcion = Doctrine::getTable('SeqInscripcionUeRango')->getIdInscripcion($this->ue_id,$this->getUser()->getAttribute('GESTION'));
                $numero_matricula = Doctrine::getTable('SeqInscripcionUe')->getIdNumeroMatricula($this->ue_id,$this->getUser()->getAttribute('GESTION'));
                
                $curso = Doctrine::getTable('DatSieCurso')->findOneByGestionIdAndCodUeIdAndPeriodoIdAndOperativoIdAndSubCeaIdAndNivelIdAndCicloIdAndGradoIdAndParaleloAndTurnoId(
                                                                            $this->getUser()->getAttribute('GESTION'),                                                                            
                                                                            $this->ue_id,
                                                                            '3',
                                                                            '1',
                                                                            $this->subcea_id,
                                                                            $this->modalidad_id,
                                                                            $this->nivel_id,
                                                                            $this->ciclo_id,
                                                                            $this->paralelo_id,
                                                                            $this->turno_id);
                if(!$curso)
                {                    
                    $curso = new DatSieCurso();
                    $curso->setCodUeId($this->ue_id);
                    $curso->setGestionId($this->getUser()->getAttribute('GESTION'));
                    $curso->setSubCeaId($this->subcea_id);
                    $curso->setPeriodoId('3');
                    $curso->setOperativoId('1');
                    $curso->setNivelId($this->modalidad_id);
                    $curso->setCicloId($this->nivel_id);
                    $curso->setGradoId($this->ciclo_id);
                    $curso->setParalelo($this->paralelo_id);
                    $curso->setTurnoId($this->turno_id);
                    $curso->save();
                }                
                $id = $id_inscripcion->getNumeroMatricula();
                $num = $numero_matricula->getNumeroMatricula();
                for($i=0;$i<count($ids);$i++)
                {                       
                     // si ya esta autorizado solo darle update            
                    $inscribir = Doctrine::getTable('DatRdeInscripcion')->findOneByGestionIdAndCodigoRudeIdAndCodUeIdAndPeriodoIdAndOperativoIdAndSubCeaIdAndNivelIdAndCicloIdAndGradoIdAndParaleloAndTurnoId(
                                                                            $this->getUser()->getAttribute('GESTION'),
                                                                            $ids[$i],
                                                                            $this->ue_id,
                                                                            '3',
                                                                            '1',
                                                                            $this->subcea_id,
                                                                            $this->modalidad_id,
                                                                            $this->nivel_id,
                                                                            $this->ciclo_id,
                                                                            $this->paralelo_id,
                                                                            $this->turno_id);
                    if(!$inscribir) {
                        $inscribir = new DatRdeInscripcion();
                        $inscribir->setIdInscripcion($id);
                        $inscribir->setGestionId($this->getUser()->getAttribute('GESTION'));
                        $inscribir->setCodigoRudeId($ids[$i]);
                        $inscribir->setNumMatricula($num);
                        $inscribir->setCodUeId($this->ue_id);
                        $inscribir->setPeriodoId('3');
                        $inscribir->setOperativoId('1');
                        $inscribir->setSubCeaId($this->subcea_id);
                        $inscribir->setNivelId($this->modalidad_id);
                        $inscribir->setCicloId($this->nivel_id);
                        $inscribir->setGradoId($this->ciclo_id);
                        $inscribir->setParalelo($this->paralelo_id);
                        $inscribir->setTurnoId($this->turno_id);
                        $inscribir->setEstadoMatriculaInicioId('1');
                        $inscribir->setEstadoMatriculaFinId('4');
                        $inscribir->setCodUeProcedenciaId($this->ue_id);
                        $inscribir->setObservacionId('0');
                        $inscribir->setObservacion('');
                        $inscribir->setFechaInscripcion($date_time);
                        $inscribir->setApreciacionFinal('');
                        $inscribir->save();
                        $id++;
                        $num++;
                    }
                    else
                    {                        
                        //$this->getUser()->setFlash('notice8', "LA INSCRIPCION SE REALIZO ANTERIORMENTE");
                        //$this->redirect('adultoshumanisticainscripcion/index');
                    }
                }
                $this->getUser()->setFlash('notice8',"SE REALIZO LA INSCRIPCION CORRECTAMENTE");
                $conn->commit();         
            /*} catch (Doctrine_Exception $e) {          
              $conn->rollback();          
              $this->getUser()->setFlash('notice8', "HUBO UN ERROR EN LA INSCRIPCION");
              $this->redirect('adultoshumanisticainscripcion/index');
            }
             * 
             */
         }               
      }  
}
