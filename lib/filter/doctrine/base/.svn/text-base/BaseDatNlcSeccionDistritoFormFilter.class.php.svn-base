<?php

/**
 * DatNlcSeccionDistrito filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatNlcSeccionDistritoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('dat_nlc_seccion_distrito_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatNlcSeccionDistrito';
  }

  public function getFields()
  {
    return array(
      'departamento_id' => 'Number',
      'provincia_id'    => 'Number',
      'seccion_id'      => 'Number',
      'cod_distrito_id' => 'Number',
      'gestion_id'      => 'Number',
    );
  }
}
