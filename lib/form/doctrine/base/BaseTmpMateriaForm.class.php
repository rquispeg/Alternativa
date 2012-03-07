<?php

/**
 * TmpMateria form base class.
 *
 * @method TmpMateria getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpMateriaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numero' => new sfWidgetFormInputHidden(),
      'num'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'numero' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'numero', 'required' => false)),
      'num'    => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tmp_materia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpMateria';
  }

}
