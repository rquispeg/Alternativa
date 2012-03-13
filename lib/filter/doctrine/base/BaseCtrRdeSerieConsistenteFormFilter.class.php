<?php

/**
 * CtrRdeSerieConsistente filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeSerieConsistenteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'consistente' => new sfWidgetFormFilterInput(),
      'peso'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'consistente' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'peso'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_serie_consistente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeSerieConsistente';
  }

  public function getFields()
  {
    return array(
      'codigo_rude' => 'Text',
      'consistente' => 'Number',
      'peso'        => 'Number',
    );
  }
}
