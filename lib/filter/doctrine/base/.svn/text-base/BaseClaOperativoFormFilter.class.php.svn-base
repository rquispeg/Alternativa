<?php

/**
 * ClaOperativo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaOperativoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_operativo'  => new sfWidgetFormFilterInput(),
      'cod_org_curr_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_operativo'  => new sfValidatorPass(array('required' => false)),
      'cod_org_curr_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaOrgCurricular'), 'column' => 'cod_org_curr')),
    ));

    $this->widgetSchema->setNameFormat('cla_operativo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaOperativo';
  }

  public function getFields()
  {
    return array(
      'id_operativo'    => 'Number',
      'desc_operativo'  => 'Text',
      'cod_org_curr_id' => 'ForeignKey',
    );
  }
}
