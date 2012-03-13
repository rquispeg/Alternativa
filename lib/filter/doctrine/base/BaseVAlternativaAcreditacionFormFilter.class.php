<?php

/**
 * VAlternativaAcreditacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVAlternativaAcreditacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue'   => new sfWidgetFormFilterInput(),
      'desc_ue'  => new sfWidgetFormFilterInput(),
      'nivel_id' => new sfWidgetFormFilterInput(),
      'ciclo'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'cod_ue'   => new sfValidatorPass(array('required' => false)),
      'desc_ue'  => new sfValidatorPass(array('required' => false)),
      'nivel_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('v_alternativa_acreditacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VAlternativaAcreditacion';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'cod_ue'   => 'Text',
      'desc_ue'  => 'Text',
      'nivel_id' => 'Number',
      'ciclo'    => 'Number',
    );
  }
}
