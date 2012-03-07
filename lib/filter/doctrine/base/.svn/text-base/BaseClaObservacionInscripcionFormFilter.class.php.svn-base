<?php

/**
 * ClaObservacionInscripcion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaObservacionInscripcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_observacion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_observacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_observacion_inscripcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaObservacionInscripcion';
  }

  public function getFields()
  {
    return array(
      'id_observacion'   => 'Number',
      'desc_observacion' => 'Text',
    );
  }
}
