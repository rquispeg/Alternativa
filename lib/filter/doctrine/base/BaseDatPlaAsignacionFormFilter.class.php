<?php

/**
 * DatPlaAsignacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatPlaAsignacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('dat_pla_asignacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatPlaAsignacion';
  }

  public function getFields()
  {
    return array(
      'rda_id'      => 'Number',
      'gestion_id'  => 'Number',
      'cod_ue_id'   => 'Text',
      'mes_id'      => 'Number',
      'servicio_id' => 'Text',
      'item_id'     => 'Text',
    );
  }
}
