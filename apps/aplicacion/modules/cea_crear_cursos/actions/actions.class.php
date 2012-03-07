<?php

/**
 * cea_crear_cursos actions.
 *
 * @package    alternativa
 * @subpackage cea_crear_cursos
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cea_crear_cursosActions extends sfActions
{
  public function preExecute(){
    //Si no existe un usuario logeado volver a la p?gina de inicio
    $c = new ControlSistema('CEA_CREAR_CURSOS',$this->getUser()->getAttribute('USUARIO_ID'));
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
}
