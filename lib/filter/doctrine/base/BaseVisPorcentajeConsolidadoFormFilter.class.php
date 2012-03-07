<?php

/**
 * VisPorcentajeConsolidado filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisPorcentajeConsolidadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormFilterInput(),
      'departamento_id'   => new sfWidgetFormFilterInput(),
      'gestion_id'        => new sfWidgetFormFilterInput(),
      'distrito'          => new sfWidgetFormFilterInput(),
      'total_cursos'      => new sfWidgetFormFilterInput(),
      'total_consolidado' => new sfWidgetFormFilterInput(),
      'porcentaje'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departamento_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'          => new sfValidatorPass(array('required' => false)),
      'total_cursos'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_consolidado' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'porcentaje'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
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
      'id'                => 'Number',
      'departamento_id'   => 'Number',
      'gestion_id'        => 'Number',
      'distrito'          => 'Text',
      'total_cursos'      => 'Number',
      'total_consolidado' => 'Number',
      'porcentaje'        => 'Number',
    );
  }
}
