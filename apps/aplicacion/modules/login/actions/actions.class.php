<?php

/**
 * login actions.
 *
 * @package    alternativa
 * @subpackage login
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
public function preExecute()
  {
    //Limpiar todas las variables de Session
    $this->getUser()->getAttributeHolder()->clear();
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //utilizamos el layout de login
    $this->setLayout('layout_login');
    //creamos el formulario LOGIN
    $this->form = new LoginForm();
    if ($request->isMethod('post'))
    {
        $this->form->bind($request->getParameter('dat_usu_usuario'));
        if ($this->form->isValid())
        {
            $values = $this->form->getValues();
            //Verificar el usuario, contrase�a y si esta activo
            $dat_usu_usuario = Doctrine::getTable('DatUsuUsuario')->findOneByUsernameAndPasswordAndEstadoId($values['username'],md5($values['password']),'0');
            if ($dat_usu_usuario) {
				$this->getUser()->setAttribute('USUARIO_ID',$dat_usu_usuario->getId());
				$this->getUser()->setAttribute('USUARIO_USERNAME',$dat_usu_usuario->getUsername());
				//Buscar gestion activa
				$gestion = Doctrine::getTable('ClaGestion')->findOneByCerrada('1');
				$this->getUser()->setAttribute('GESTION',$gestion->getIdGestion());
				// Buscar el periodo 
				// El periodo de reporte depende de la Acreditacion
				// 1. Anual para Educacion Especial
				// 2 y 3 (Primer y Segundo Semestre) para Educacion de Adultos
				// 4 Convocatoria para Postalfabetizacion y Permanente
				// Buscando de acuerdo al usuario asignado
				$q = Doctrine::getTable('DatRueAcreditacion')->getAcreditacion($dat_usu_usuario->getId());				
				$acreditacion = $q->fetchOne();
				if(($acreditacion->getAcreditacionId() == '21') || ($acreditacion->getAcreditacionId() == '22')){
					$this->getUser()->setAttribute('PERIODO',sfConfig::get('app_periodo'));
					$this->getUser()->setAttribute('MODALIDAD',sfConfig::get('app_modalidad'));
				}
				elseif($acreditacion->getAcreditacionId() == '23'){
					$this->getUser()->setAttribute('PERIODO','1');
					$this->getUser()->setAttribute('MODALIDAD','16');
				}
				else{
					$this->getUser()->setAttribute('PERIODO','4');
				}						
				//Crear el control de usuario
				$parametros = new CtrUsuLogin();
				$parametros->setUsuarioId($dat_usu_usuario->getId());
				$parametros->setIp($_SERVER["REMOTE_ADDR"]);
				$parametros->setFechaIngreso(date("Y-m-d H:i:s"));
				$parametros->setSistemaId('3');
				$parametros->save();

               $rol = Doctrine::getTable('DatUsuGrupo')->getGrupoRol($dat_usu_usuario->getId());
               if($rol)
                    $this->getUser()->setAttribute('ROL',$rol->getRolId());
                //Buscar el Grupo y el rol
               $this->redirect('usuario/index');
            }
            else
                $this->getUser()->setFlash('notice', 'Usuario y/o Password Incorrecto');
        }
    }
  }
}
