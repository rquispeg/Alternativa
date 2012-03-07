<?php

/**
 * adultostecnicacrear actions.
 *
 * @package    alternativa
 * @subpackage adultostecnicacrear
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultostecnicacrearActions extends sfActions
{

  public function preExecute()
  {
    $c = new ControlSistema('TEC-CRC',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  }

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->unidades = doctrine::getTable('DatRueUnidadEducativa')->getUnidadesEducativasAsignadasAdultos($this->getUser()->getAttribute('USUARIO_ID'));
  }


  public function executeSubcentro(sfWebRequest $request)
  {
      $this->subcentros = doctrine::getTable('DatSieUnidadEducativa')->getSubcentros($this->getUser()->getAttribute('GESTION'),$request->getParameter('ue_id'),$request->getParameter('periodo_id'));
  }

  public function executeModalidad(sfWebRequest $request){
      //die($request->getParameter('ue_id').'/'.$this->getUser()->getAttribute('GESTION').'/'.$request->getParameter('periodo_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('nivel_id').'/'.$request->getParameter('grado_id').'/'.$request->getParameter('paralelo'));
      $this->modalidades = doctrine::getTable('ClaNivel')->findByIdNivel('15');
  }

  public function executeNivel(sfWebRequest $request)
  {
    $this->ciclos = doctrine::getTable('ClaCiclo')->findByNivelId($request->getParameter('modalidad_id'));
  }

  public function executeCiclo(sfWebRequest $request)
  {
    $this->grados = doctrine::getTable('ClaGrado')->findByNivelIdAndCicloId($request->getParameter('modalidad_id'),$request->getParameter('nivel_id'));
  }

  public function executeEspecialidad(sfWebRequest $request)
  {
    $this->especialidades = doctrine::getTable('DatAltCursooferta')->findByCodUeId($request->getParameter('ue_id'));
  }

  public function executeGuardarcurso(sfWebRequest $request)
  {
     $conn = Doctrine_Manager::connection();
     $conn->beginTransaction();
     try {
         //die($request->getParameter('ue_id').'/'.$request->getParameter('subcea_id').'/'.$request->getParameter('periodo_id'));
         $curso = new DatAltCursoTecnica();
         $curso->setCodUeId($request->getParameter('ue_id'));
         $curso->setSubCeaId($request->getParameter('subcea_id'));
         $curso->setGestionId($this->getUser()->getAttribute('GESTION'));
         $curso->setOperativoId('1');
         $curso->setPeriodoId($request->getParameter('periodo_id'));
         $curso->setNivelId($request->getParameter('modalidad_id'));
         $curso->setCicloId($request->getParameter('nivel_id'));
         $curso->setGradoId($request->getParameter('grado_id'));
         $curso->setParalelo($request->getParameter('paralelo_id'));
         $curso->setCursoOfertaId($request->getParameter('curso_oferta_id'));
         $curso->setTurnoId($request->getParameter('turno_id'));
         $curso->setModalidadEnsenanzaId('1');
         $curso->save();

         /*$control = new CtrSieCurso();
         $control->setCodUeId($request->getParameter('ue_id'));
         $control->setSubCeaId($request->getParameter('subcea_id'));
         $control->setGestionId($this->getUser()->getAttribute('GESTION'));
         $control->setOperativoId('1');
         $control->setPeriodoId($request->getParameter('periodo_id'));
         $control->setNivelId($request->getParameter('modalidad_id'));
         $control->setCicloId($request->getParameter('nivel_id'));
         $control->setGradoId($request->getParameter('grado_id'));
         $control->setParalelo($request->getParameter('paralelo_id'));
         $control->setTurnoId($request->getParameter('turno_id'));
         $control->setFechaCreacion(date('Y-m-d H:i:s'));
         $control->setUserId($this->getUser()->getAttribute('USUARIO_ID'));
         $control->save();*/

         $this->getUser()->setFlash('notice',"EL CURSO SE CREO SATISFACTORIAMENTE");
         $conn->commit();

      } catch (Doctrine_Exception $e) {
         $conn->rollback();
         $this->getUser()->setFlash('notice_error', "HUBO UN ERROR AL CREAR EL CURSO");
      }
      $this->redirect('adultostecnicacrear/listadecursos?cod_ue_id='.$request->getParameter('ue_id').'&sub_cea_id='.$request->getParameter('subcea_id').'&gestion_id='.$this->getUser()->getAttribute('GESTION').'&periodo_id='.$request->getParameter('periodo_id'));
  }

  public function executeListadecursos(sfWebRequest $request)
  {
    $this->cursos = doctrine::getTable('DatAltCursoTecnica')->findByCodUeIdAndSubCeaIdAndGestionIdAndPeriodoId($request->getParameter('cod_ue_id'),$request->getParameter('sub_cea_id'),$request->getParameter('gestion_id'),$request->getParameter('periodo_id'));
  }


}
