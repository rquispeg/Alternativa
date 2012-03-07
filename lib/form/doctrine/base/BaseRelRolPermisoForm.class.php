<?php

/**
 * RelRolPermiso form base class.
 *
 * @method RelRolPermiso getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelRolPermisoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rol_id'     => new sfWidgetFormInputHidden(),
      'permiso_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'rol_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'rol_id', 'required' => false)),
      'permiso_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'permiso_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_rol_permiso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelRolPermiso';
  }

}
