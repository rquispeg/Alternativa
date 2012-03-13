<?php

/**
 * DatSlnAlternativa2 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSlnAlternativa2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'participacion'   => new sfWidgetFormFilterInput(),
      'aplicacion'      => new sfWidgetFormFilterInput(),
      'conocimientos'   => new sfWidgetFormFilterInput(),
      'promedio_anual'  => new sfWidgetFormFilterInput(),
      'observacion'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'participacion'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aplicacion'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'conocimientos'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_anual'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'observacion'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_sln_alternativa2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSlnAlternativa2';
  }

  public function getFields()
  {
    return array(
      'gestion_id'      => 'Number',
      'cod_ue_id'       => 'Text',
      'curso_oferta_id' => 'Number',
      'inscripcion_id'  => 'Number',
      'participacion'   => 'Number',
      'aplicacion'      => 'Number',
      'conocimientos'   => 'Number',
      'promedio_anual'  => 'Number',
      'observacion'     => 'Number',
    );
  }
}
