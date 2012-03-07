<?php

/**
 * AuxCurso filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxCursoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'consolidado' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'consolidado' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('aux_curso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuxCurso';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'   => 'Text',
      'gestion_id'  => 'Number',
      'nivel_id'    => 'Number',
      'ciclo_id'    => 'Number',
      'grado_id'    => 'Number',
      'paralelo'    => 'Text',
      'turno_id'    => 'Number',
      'consolidado' => 'Number',
    );
  }
}
