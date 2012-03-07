<?php

/**
 * ceaasignarespecialidad actions.
 *
 * @package    alternativa
 * @subpackage ceaasignarespecialidad
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ceaasignarespecialidadActions extends sfActions
{
    public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('CEA_ASIGN',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
    }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      //$this->form = new DatAltCursoofertaForm();
      //$this->forward('default', 'module');
  }
  
  public function executeEspecialidades(sfWebRequest $request)
  {
    $request = $this->getRequest();
    $a = $request->getParameter('dat_alt_cursooferta');
    $this->ue = $a['cod_ue_id'];
    $this->especialidades = Doctrine::getTable('DatAltCursooferta')->getEspecialidades($this->ue);    
    $this->ofertas = new ClaCursoOfertaForm();
      //$this->form = new DatAltCursoofertaForm();
      //$this->forward('default', 'module');
  }
  
  public function executeGuardar(sfWebRequest $request)
  {
    $request = $this->getRequest();
    $ue = $request->getParameter('cod_ue_id');
    $a = $request->getParameter('cla_curso_oferta');
    $curso_oferta = $a['curso_oferta_id'];
    
    $this->curso_oferta = Doctrine::getTable('DatAltCursooferta')->find(array($curso_oferta, $ue));
      if(!$this->curso_oferta)
      {
          $conn = Doctrine_Manager::connection();
          $conn->beginTransaction();
          try{
              $new_curso_oferta = new DatAltCursooferta();              
              $new_curso_oferta->setCursoOfertaId($curso_oferta);
              $new_curso_oferta->setCodUeId($ue);
              $new_curso_oferta->setResolucionAdministrativa('0');
              $new_curso_oferta->setFechaVigencia('2012-01-01');
              $new_curso_oferta->setVigente('1');              
              $new_curso_oferta->save();
              $conn->commit();
              $this->getUser()->setFlash('notice_error',"SE CREO CORRECTAMENTE");
              $this->redirect('ceaasignarespecialidad/index');
          } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR AL CREAR INICIO DE GESTION DEL CEA");
          $this->redirect('ceaasignarespecialidad/index');                
          }
    
    }
  }
  
}
