<?php

/**
 * adultostecnicaeliminar actions.
 *
 * @package    alternativa
 * @subpackage adultostecnicaeliminar
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultostecnicaeliminarActions extends sfActions
{
  public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('TEC-DEL',$this->getUser()->getAttribute('USUARIO_ID'));
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
  }

  public function executeHistorialestado(sfWebRequest $request) {
      $this->a = $request->getParameter('dat_rde_estudiante');
      $this->datos = Doctrine::getTable('DatRdeEstudiante')->getEstudianteModificarDatoTecnica($this->a['codigo_rude'],$this->getUser()->getAttribute('USUARIO_ID'),$this->getUser()->getAttribute('GESTION'));
      if ($this->datos){
          
          $this->historialestados=Doctrine::getTable('DatRdeInscripcionTecnica')->getListaInscritoEliminar($this->a['codigo_rude'],$this->getUser()->getAttribute('GESTION'),$this->getUser()->getAttribute('USUARIO_ID'));
              $this->getUser()->getAttributeHolder()->remove('notice7A');
      }
      else{
          $this->getUser()->setFlash('notice7A','RUDE NO EXISTE, NO TIENE INSCRIPCION PARA LA GESTION '.$this->getUser()->getAttribute('GESTION').' O NO ESTA REGISTRADO EN UNA UNIDAD EDUCATIVA QUE TIENE TUICION');
      }
  }

  /**
   * Permite la eliminacion de una inscripcion
   */
  public function executeBorrarInscripcion(sfWebRequest $request) {
    $idInscripcion  = $request->getParameter('id_inscripcion');
    $gestion  = $this->getUser()->getAttribute('GESTION');

    //print_r($idInscripcion); die;
    $conn = Doctrine_Manager::connection();
    $conn->beginTransaction();
    try {
        //  Borrar ctr_rde_extemporaneo
        $q = Doctrine_Query::create()
         ->delete('CtrRdeExtemporaneoTecnica')
         ->addWhere('inscripcion_id = ? AND gestion_id = ?',array($idInscripcion, $gestion));
         $deleted = $q->execute();
         
        $inscripcion = Doctrine::getTable('DatRdeInscripcionTecnica')->findOneByIdInscripcionAndGestionId($idInscripcion, $gestion);
        $inscripcion->delete();

        $conn->commit();
        $this->getUser()->setFlash('notice7',"LA ELIMINACION DE INSCRIPCION SE REALIZO CORRECTAMENTE");
        $this ->redirect('adultostecnicaeliminar/index');
     } catch (Doctrine_Exception $e) {
        $conn->rollback();
        $this->getUser()->setFlash('notice_error7',"ERROR AL ELIMINAR LA INSCRIPCION");
        $this->redirect('adultostecnicaeliminar/index');
     }
  }



}
