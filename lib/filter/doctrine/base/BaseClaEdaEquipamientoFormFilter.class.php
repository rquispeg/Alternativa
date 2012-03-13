<?php

/**
 * ClaEdaEquipamiento filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaEquipamientoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_equipamiento' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_equipamiento' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_equipamiento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaEquipamiento';
  }

  public function getFields()
  {
    return array(
      'id_equipamiento'   => 'Number',
      'desc_equipamiento' => 'Text',
    );
  }
}
