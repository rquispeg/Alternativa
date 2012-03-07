<?php

/**
 * DatEdaDocentes form base class.
 *
 * @method DatEdaDocentes getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEdaDocentesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'evento_id'  => new sfWidgetFormInputHidden(),
      'cod_ue_id'  => new sfWidgetFormInputHidden(),
      'gestion_id' => new sfWidgetFormInputHidden(),
      'estado_id'  => new sfWidgetFormInputHidden(),
      'varones'    => new sfWidgetFormInputText(),
      'mujeres'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'evento_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'evento_id', 'required' => false)),
      'cod_ue_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'gestion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'estado_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'estado_id', 'required' => false)),
      'varones'    => new sfValidatorInteger(),
      'mujeres'    => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('dat_eda_docentes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEdaDocentes';
  }

}
