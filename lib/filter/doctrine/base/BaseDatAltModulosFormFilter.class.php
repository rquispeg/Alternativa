<?php

/**
 * DatAltModulos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatAltModulosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'horas'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'horas'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_alt_modulos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatAltModulos';
  }

  public function getFields()
  {
    return array(
      'curso_oferta_id'   => 'Number',
      'cod_ue_id'         => 'Text',
      'cod_asignatura_id' => 'Number',
      'horas'             => 'Number',
    );
  }
}
