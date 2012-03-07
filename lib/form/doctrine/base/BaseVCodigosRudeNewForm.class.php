<?php

/**
 * VCodigosRudeNew form base class.
 *
 * @method VCodigosRudeNew getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVCodigosRudeNewForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'codigo_rude'     => new sfWidgetFormInputText(),
      'codigo_rude_new' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo_rude'     => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'codigo_rude_new' => new sfValidatorString(array('max_length' => 21, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_codigos_rude_new[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VCodigosRudeNew';
  }

}
