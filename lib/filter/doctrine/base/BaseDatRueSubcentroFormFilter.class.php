<?php

/**
 * DatRueSubcentro filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueSubcentroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'subcentro'           => new sfWidgetFormFilterInput(),
      'cod_subcentro_le_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'subcentro'           => new sfValidatorPass(array('required' => false)),
      'cod_subcentro_le_id' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_subcentro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueSubcentro';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'           => 'Text',
      'sub_cea'             => 'Number',
      'subcentro'           => 'Text',
      'cod_subcentro_le_id' => 'Text',
    );
  }
}
