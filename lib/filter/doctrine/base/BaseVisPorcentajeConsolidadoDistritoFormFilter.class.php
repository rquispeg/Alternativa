<?php

/**
 * VisPorcentajeConsolidadoDistrito filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisPorcentajeConsolidadoDistritoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'departamento_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'consolidado'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departamento_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_distrito'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'        => new sfValidatorPass(array('required' => false)),
      'consolidado'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vis_porcentaje_consolidado_distrito_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisPorcentajeConsolidadoDistrito';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'departamento_id' => 'Number',
      'cod_distrito'    => 'Number',
      'distrito'        => 'Text',
      'consolidado'     => 'Number',
    );
  }
}
