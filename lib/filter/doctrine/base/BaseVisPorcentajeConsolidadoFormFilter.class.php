<?php

/**
 * VisPorcentajeConsolidado filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisPorcentajeConsolidadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'departamento_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'consolidado'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departamento_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'consolidado'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vis_porcentaje_consolidado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisPorcentajeConsolidado';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'departamento_id' => 'Number',
      'consolidado'     => 'Number',
    );
  }
}
