<?php

/**
 * ClaComponente form base class.
 *
 * @method ClaComponente getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaComponenteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_componente'   => new sfWidgetFormInputHidden(),
      'desc_componente' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_componente'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_componente', 'required' => false)),
      'desc_componente' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_componente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaComponente';
  }

}
