<?php

/**
 * VisDplImpresos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisDplImpresosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'total'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impresos'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'total'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'impresos'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vis_dpl_impresos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisDplImpresos';
  }

  public function getFields()
  {
    return array(
      'gestion_id'      => 'Number',
      'departamento_id' => 'Number',
      'cod_org_curr_id' => 'Number',
      'total'           => 'Number',
      'impresos'        => 'Number',
    );
  }
}
