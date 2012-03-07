<?php

/**
 * ErrOpeArchivos form base class.
 *
 * @method ErrOpeArchivos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseErrOpeArchivosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'cod_ue' => new sfWidgetFormInputText(),
      'query'  => new sfWidgetFormTextarea(),
      'err0'   => new sfWidgetFormInputText(),
      'err1'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'cod_ue' => new sfValidatorString(array('max_length' => 8)),
      'query'  => new sfValidatorString(array('max_length' => 550)),
      'err0'   => new sfValidatorString(array('max_length' => 200)),
      'err1'   => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('err_ope_archivos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ErrOpeArchivos';
  }

}
