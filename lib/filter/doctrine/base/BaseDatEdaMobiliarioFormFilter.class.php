<?php

/**
 * DatEdaMobiliario filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEdaMobiliarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cantidad'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cantidad'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_eda_mobiliario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEdaMobiliario';
  }

  public function getFields()
  {
    return array(
      'evento_id'          => 'Number',
      'cod_ue_id'          => 'Text',
      'gestion_id'         => 'Number',
      'mobiliario_id'      => 'Number',
      'estado_recursos_id' => 'Number',
      'cantidad'           => 'Number',
    );
  }
}
