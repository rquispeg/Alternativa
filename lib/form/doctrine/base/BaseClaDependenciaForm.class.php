<?php

/**
 * ClaDependencia form base class.
 *
 * @method ClaDependencia getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDependenciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_dependencia'            => new sfWidgetFormInputHidden(),
      'desc_dependencia'           => new sfWidgetFormInputText(),
      'cod_tipo_administracion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoAdministracion'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_dependencia'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_dependencia', 'required' => false)),
      'desc_dependencia'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_tipo_administracion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoAdministracion'))),
    ));

    $this->widgetSchema->setNameFormat('cla_dependencia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDependencia';
  }

}
