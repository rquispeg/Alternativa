<?php

/**
 * ClaTipoFinanciamiento filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoFinanciamientoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_tipo_financiamiento' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_tipo_financiamiento' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_financiamiento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoFinanciamiento';
  }

  public function getFields()
  {
    return array(
      'id_tipo_financiamiento'   => 'Number',
      'desc_tipo_financiamiento' => 'Text',
    );
  }
}
