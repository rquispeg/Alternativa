<?php

/**
 * DatAltCursoofertaPeriodo_ filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatAltCursoofertaPeriodo_FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'modalidad_ensenanza_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_materias'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'consolidado'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'modalidad_ensenanza_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nro_materias'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'consolidado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_alt_cursooferta_periodo__filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatAltCursoofertaPeriodo_';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'              => 'Text',
      'periodo_id'             => 'Number',
      'operativo_id'           => 'Number',
      'gestion_id'             => 'Number',
      'sub_cea'                => 'Number',
      'curso_oferta_id'        => 'Number',
      'nivel_id'               => 'Number',
      'ciclo_id'               => 'Number',
      'grado_id'               => 'Number',
      'paralelo'               => 'Text',
      'turno_id'               => 'Number',
      'modalidad_ensenanza_id' => 'Number',
      'nro_materias'           => 'Number',
      'consolidado'            => 'Number',
    );
  }
}
