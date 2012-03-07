<?php

/**
 * DatSlnEstudios form base class.
 *
 * @method DatSlnEstudios getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSlnEstudiosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'         => new sfWidgetFormInputHidden(),
      'nivel_id'          => new sfWidgetFormInputHidden(),
      'cod_asignatura_id' => new sfWidgetFormInputHidden(),
      'plan_estudios_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnPlanestudios_4'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_ue_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'nivel_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'cod_asignatura_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_asignatura_id', 'required' => false)),
      'plan_estudios_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnPlanestudios_4'))),
    ));

    $this->widgetSchema->setNameFormat('dat_sln_estudios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSlnEstudios';
  }

}
