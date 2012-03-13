<?php

/**
 * DatSlnEstudios filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSlnEstudiosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'plan_estudios_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnPlanestudios_4'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'plan_estudios_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSlnPlanestudios_4'), 'column' => 'cod_asignatura_id')),
    ));

    $this->widgetSchema->setNameFormat('dat_sln_estudios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSlnEstudios';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'         => 'Text',
      'nivel_id'          => 'Number',
      'cod_asignatura_id' => 'Number',
      'plan_estudios_id'  => 'ForeignKey',
    );
  }
}
