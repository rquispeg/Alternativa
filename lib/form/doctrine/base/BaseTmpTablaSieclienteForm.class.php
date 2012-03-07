<?php

/**
 * TmpTablaSiecliente form base class.
 *
 * @method TmpTablaSiecliente getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpTablaSieclienteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'    => new sfWidgetFormInputHidden(),
      'tabla' => new sfWidgetFormInputText(),
      'order' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'tabla' => new sfValidatorString(array('max_length' => 45)),
      'order' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tmp_tabla_siecliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpTablaSiecliente';
  }

}
