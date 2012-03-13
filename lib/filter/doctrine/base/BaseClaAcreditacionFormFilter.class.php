<?php

/**
 * ClaAcreditacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAcreditacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_acreditacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_org_curr_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_acreditacion' => new sfValidatorPass(array('required' => false)),
      'cod_org_curr_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaOrgCurricular'), 'column' => 'cod_org_curr')),
    ));

    $this->widgetSchema->setNameFormat('cla_acreditacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaAcreditacion';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'desc_acreditacion' => 'Text',
      'cod_org_curr_id'   => 'ForeignKey',
    );
  }
}
