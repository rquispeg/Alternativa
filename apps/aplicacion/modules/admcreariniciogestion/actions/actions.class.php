<?php

/**
 * creariniciogestion actions.
 *
 * @package    alternativa
 * @subpackage creariniciogestion
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class admcreariniciogestionActions extends sfActions
{
    public function preExecute(){
    //Si no existe un usuario logeado volver a la p�gina de inicio
    $c = new ControlSistema('ADM_INI',$this->getUser()->getAttribute('USUARIO_ID'));
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
  
    public function executeCrear(){
    $request = $this->getRequest();
    $this->a = $request->getParameter('dat_sie_operativos');
    $this->ue = $this->a['ue'];    
    //verificamos si tiene permisos para la unidad educativa unidad educativa
    $unidad = Doctrine::getTable('DatRueUnidadEducativa')->getAsignacionUesUsuario($this->a['ue'],$this->getUser()->getAttribute('USUARIO_ID'));
    if ($unidad)
    {
        $this->identificacion = Doctrine::getTable('DatRueUnidadEducativa')->find($this->ue);
        $this->getUser()->setFlash('ue',$this->a['ue']);
        $this->getUser()->setFlash('gestion',$this->a['gestion_id']);
        $this->director = Doctrine::getTable('DatSieUnidadEducativa')->find(array($this->ue,$this->a['subcea'],$this->a['gestion_id'],$this->a['operativo_id'],$this->a['periodo_id']));
        if ($this->director)
        {
            $this->notice = 'LA UNIDAD EDUCATIVA YA FUE CREADA';           
        }
        else
        {
            $this->nucleo = Doctrine::getTable('DatNlcLocalEducativo')->getNucleo($this->identificacion->getCodLeId(),$this->a['gestion_id']);
            $this->distrito = Doctrine::getTable('DatIfrJurisdiccionAdministrativa')->getDistritos($this->identificacion->getCodLeId(),$this->a['gestion_id']);
            $this->descDistrito = Doctrine::getTable('DatSieDistrito')->find(array($this->distrito->getCodDistritoId(),$this->distrito->getGestionId())); 
            $this->turnos = Doctrine::getTable('ClaTurno')->findAll();
        
    }   }
    else
    {
        $this->notice = 'NO TIENE TUICION SOBRE EL C.E.A. O EL C.E.A NO SE ENCUENTRA REGISTRADO';
    }
    return sfView::SUCCESS;
  }
  
  public function executeGuardar(sfWebRequest $request)
  {
      $this->datos = $request->getParameter('datos');
      $this->unidadeducativa = Doctrine::getTable('DatSieUnidadEducativa')->find(array($this->datos['codue'],$this->datos['subcea'],$this->datos['gestion'],'1',$this->datos['periodo']));
      if(!$this->unidadeducativa)
      {
          $conn = Doctrine_Manager::connection();
          $conn->beginTransaction();
          try{
              $unidadeducativa = new DatSieUnidadEducativa();              
              $unidadeducativa->setCodUeId($this->datos['codue']);
              $unidadeducativa->setSubCea($this->datos['subcea']);
              $unidadeducativa->setGestionId($this->datos['gestion']);
              $unidadeducativa->setOperativoId('1');
              $unidadeducativa->setPeriodoId($this->datos['periodo']);
              $unidadeducativa->setNombreSubcea($this->datos['nombre_subcea']);
              $unidadeducativa->setMultigrado('0');
              $unidadeducativa->setTelefono1($this->datos['telefono1']);
              $unidadeducativa->setTelefono2($this->datos['telefono2']);
              $unidadeducativa->setReferenciaTelefono2($this->datos['refrenciatelefono2']);
              $unidadeducativa->setFax($this->datos['fax']);
              $unidadeducativa->setEmail($this->datos['email']);
              $unidadeducativa->setCasilla($this->datos['casilla']);
              $unidadeducativa->setCiDirector($this->datos['cidirector']);
              $unidadeducativa->setDirector($this->datos['director']);
              $unidadeducativa->setItemDirector($this->datos['itemdirector']);
              $unidadeducativa->setCodCerradaId($this->datos['cerrada']);
              $unidadeducativa->setTurnoId($this->datos['turno']);
              $unidadeducativa->setFechaConsolidacion(date('Y-m-d H:i:s'));
              $unidadeducativa->setCodLeId('0');
              $unidadeducativa->save();
              $conn->commit();
              $this->getUser()->setFlash('notice_error',"SE CREO CORRECTAMENTE");
              $this->redirect('adultoshumanisticacrear/index');
          } catch (Doctrine_Exception $e) {
          $conn->rollback();
          $this->getUser()->setFlash('notice_error',"ERROR AL CREAR INICIO DE GESTION DEL CEA");
          $this->redirect('admcreariniciogestion/index');
      }
          
      }
  }
  
}
