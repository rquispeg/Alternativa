<?php

/**
 * CeaEstudiantesPrimer filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCeaEstudiantesPrimerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_departamento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'periodo_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_nivel'        => new sfWidgetFormFilterInput(),
      'desc_ciclo'        => new sfWidgetFormFilterInput(),
      'desc_grado'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_departamento' => new sfValidatorPass(array('required' => false)),
      'cod_distrito'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'          => new sfValidatorPass(array('required' => false)),
      'cod_ue'            => new sfValidatorPass(array('required' => false)),
      'desc_ue'           => new sfValidatorPass(array('required' => false)),
      'periodo_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_nivel'        => new sfValidatorPass(array('required' => false)),
      'desc_ciclo'        => new sfValidatorPass(array('required' => false)),
      'desc_grado'        => new sfValidatorPass(array('required' => false)),
      'codigo_rude'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cea_estudiantes_primer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CeaEstudiantesPrimer';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'desc_departamento' => 'Text',
      'cod_distrito'      => 'Number',
      'gestion_id'        => 'Number',
      'distrito'          => 'Text',
      'cod_ue'            => 'Text',
      'desc_ue'           => 'Text',
      'periodo_id'        => 'Number',
      'desc_nivel'        => 'Text',
      'desc_ciclo'        => 'Text',
      'desc_grado'        => 'Text',
      'codigo_rude'       => 'Text',
    );
  }
}
