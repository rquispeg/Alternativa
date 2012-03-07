<?php

/**
 * ClaTipoBachillerato form base class.
 *
 * @method ClaTipoBachillerato getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoBachilleratoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_bachillerato'   => new sfWidgetFormInputHidden(),
      'desc_bachillerato' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_bachillerato'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_bachillerato', 'required' => false)),
      'desc_bachillerato' => new sfValidatorString(array('max_length' => 65)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_bachillerato[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoBachillerato';
  }

}
