<?php

/**
 * DatRdeEstudianteNewRude form base class.
 *
 * @method DatRdeEstudianteNewRude getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeEstudianteNewRudeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'codigo_rude' => new sfWidgetFormInputText(),
      'cod_ue'      => new sfWidgetFormInputText(),
      'numero'      => new sfWidgetFormInputText(),
      'base'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo_rude' => new sfValidatorString(array('max_length' => 18)),
      'cod_ue'      => new sfValidatorString(array('max_length' => 8)),
      'numero'      => new sfValidatorInteger(),
      'base'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_estudiante_new_rude[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeEstudianteNewRude';
  }

}
