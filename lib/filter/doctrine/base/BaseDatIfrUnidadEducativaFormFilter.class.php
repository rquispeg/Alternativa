<?php

/**
 * DatIfrUnidadEducativa filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatIfrUnidadEducativaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'zona'            => new sfWidgetFormFilterInput(),
      'direccion'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'zona'            => new sfValidatorPass(array('required' => false)),
      'direccion'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_ifr_unidad_educativa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatIfrUnidadEducativa';
  }

  public function getFields()
  {
    return array(
      'cod_le_id'       => 'Text',
      'gestion_id'      => 'Number',
      'infraestructura' => 'Number',
      'zona'            => 'Text',
      'direccion'       => 'Text',
    );
  }
}
