<?php

/**
 * DatEspDiscapacidad filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEspDiscapacidadFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'discapacidad'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_area_esp'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaAreaEspecial'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'discapacidad'    => new sfValidatorPass(array('required' => false)),
      'id_area_esp'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaAreaEspecial'), 'column' => 'id_area_esp')),
    ));

    $this->widgetSchema->setNameFormat('dat_esp_discapacidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEspDiscapacidad';
  }

  public function getFields()
  {
    return array(
      'discapacidad_id' => 'Number',
      'discapacidad'    => 'Text',
      'id_area_esp'     => 'ForeignKey',
    );
  }
}
