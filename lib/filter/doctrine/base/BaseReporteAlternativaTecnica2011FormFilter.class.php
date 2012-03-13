<?php

/**
 * ReporteAlternativaTecnica2011 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseReporteAlternativaTecnica2011FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'periodo'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_departamento'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_nivel'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_nivel'         => new sfWidgetFormFilterInput(),
      'id_ciclo'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ciclo'         => new sfWidgetFormFilterInput(),
      'id_grado'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_grado'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genero'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calculated_column1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'periodo'            => new sfValidatorPass(array('required' => false)),
      'desc_departamento'  => new sfValidatorPass(array('required' => false)),
      'cod_distrito'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'           => new sfValidatorPass(array('required' => false)),
      'id_nivel'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue'             => new sfValidatorPass(array('required' => false)),
      'desc_ue'            => new sfValidatorPass(array('required' => false)),
      'desc_nivel'         => new sfValidatorPass(array('required' => false)),
      'id_ciclo'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_ciclo'         => new sfValidatorPass(array('required' => false)),
      'id_grado'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_grado'         => new sfValidatorPass(array('required' => false)),
      'genero'             => new sfValidatorPass(array('required' => false)),
      'calculated_column1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reporte_alternativa_tecnica2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ReporteAlternativaTecnica2011';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'gestion_id'         => 'Number',
      'periodo'            => 'Text',
      'desc_departamento'  => 'Text',
      'cod_distrito'       => 'Number',
      'distrito'           => 'Text',
      'id_nivel'           => 'Number',
      'cod_ue'             => 'Text',
      'desc_ue'            => 'Text',
      'desc_nivel'         => 'Text',
      'id_ciclo'           => 'Number',
      'desc_ciclo'         => 'Text',
      'id_grado'           => 'Number',
      'desc_grado'         => 'Text',
      'genero'             => 'Text',
      'calculated_column1' => 'Number',
    );
  }
}
