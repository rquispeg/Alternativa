<?php

/**
 * Login form base class.
 *
 * @package    proyecto
 * @subpackage form
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */

class LoginForm extends BaseDatUsuUsuarioForm
{
  public function configure()
  {
      unset($this['id'],$this['nombre'],$this['paterno'],$this['materno'],
            $this['email'],$this['telefono'],$this['celular'],$this['direccion'],
            $this['estado_id'],$this['created_at'],$this['updated_at']);
      
      $this->setWidget('password', new sfWidgetFormInputPassword());

      $this->validatorSchema['password']->setOption('min_length', 5);
      $this->validatorSchema['username']->setMessage('required',utf8_encode('Ingrese el nombre de usuario'));
      $this->validatorSchema['password']->setMessage('min_length',utf8_encode('El password debe contener como mínimo 5 caracteres'));
      $this->validatorSchema['password']->setMessage('max_length',utf8_encode('El password debe contener como máximo 30 caracteres'));
      $this->validatorSchema['password']->setMessage('required',utf8_encode('Ingrese su password'));
  }
}