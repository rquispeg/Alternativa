<?php

/**
 * estudiantemodificarestado actions.
 *
 * @package    alternativa
 * @subpackage estudiantemodificarestado
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estudiantealtmodificarestadoActions extends sfActions
{
    public function preExecute()
  {
    $c = new ControlSistema('EST_ESMOD',$this->getUser()->getAttribute('USUARIO_ID'));
    $this->forwardUnless($c->control(),'login','index');
  } 
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->fo = Doctrine::getTable('ClaEstadoMatricula')->getListaEstadoMatricula();
    //$this->forward('default', 'module');
  }
  
  public function executeHistorialestado(sfWebRequest $request) {
      $request = $this->getRequest();      
      $this->a = $request->getParameter('dat_rde_estudiante');    
      $this->getUser()->getAttributeHolder()->remove('notice7');
      $this->getUser()->getAttributeHolder()->remove('notice_error7'); 
      $this->historialestados=Doctrine::getTable('DatRdeInscripcion')->getListainscripcionesparacambio($this->a['codigo_rude'],$this->getUser()->getAttribute('GESTION'),$this->getUser()->getAttribute('USUARIO_ID'));                 
  }
  
  public function executeCambiarestado(sfWebRequest $request)
  {
    $conn = Doctrine_Manager::connection();
    $conn->beginTransaction();
    try {
            //die($request->getParameter('gestion').' '.$request->getParameter('id').' '.$request->getParameter('mat'));
            $ins = Doctrine::getTable('DatRdeInscripcion')->find(array($request->getParameter('id'), $request->getParameter('gestion')));
            ///Verificar si tiene notas para cambiar a promovido
            $mat_ant = $ins->getEstadoMatriculaFinId();
            $ins->setEstadoMatriculaFinId($request->getParameter('mat'));
            $ins->save();
            $control = new CtrSlnCambioEstado();
            $control->setInscripcionId($request->getParameter('id'));
            $control->setGestionId($request->getParameter('gestion'));
            $control->setEstadoAnterior($mat_ant);
            $control->setEstadoActual($request->getParameter('mat'));
            $control->setUsuarioId($this->getUser()->getAttribute('USUARIO_ID'));
            $control->setFechaModificacion(date('Y-m-d H:i:s'));
            $control->save();
            $conn->commit();
            $this->getUser()->setFlash('notice7', "SE MODIFICO CORRECTAMENTE EL ESTADO FIN DE GESTION");

            $this->redirect('estudiantealtmodificarestado/index');
        } catch (Doctrine_Exception $e) {
            $conn->rollback();
            $this->getUser()->setFlash('notice_error7', "ERROR AL MODIFICAR EL ESTADO FIN DE GESTION");
            $this->redirect('estudiantealtmodificarestado/index');
        }
  }
}
