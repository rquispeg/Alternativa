<?php

/**
 * DatUsuSistema form base class.
 *
 * @method DatUsuSistema getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatUsuSistemaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_sistema' => new sfWidgetFormInputHidden(),
      'sistema'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_sistema' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_sistema', 'required' => false)),
      'sistema'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('dat_usu_sistema[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatUsuSistema';
  }

}
