<?php

/**
 * ClaModalidadEnsenanza filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaModalidadEnsenanzaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_modalidad_ensenanza' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_modalidad_ensenanza' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_modalidad_ensenanza_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaModalidadEnsenanza';
  }

  public function getFields()
  {
    return array(
      'id_modalidad_ensenanza'   => 'Number',
      'desc_modalidad_ensenanza' => 'Text',
    );
  }
}
