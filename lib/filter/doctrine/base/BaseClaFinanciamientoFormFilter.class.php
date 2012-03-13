<?php

/**
 * ClaFinanciamiento filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaFinanciamientoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_financiamiento'    => new sfWidgetFormFilterInput(),
      'tipo_financiamiento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoFinanciamiento'), 'add_empty' => true)),
      'abrv_financiamiento'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_financiamiento'    => new sfValidatorPass(array('required' => false)),
      'tipo_financiamiento_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoFinanciamiento'), 'column' => 'id_tipo_financiamiento')),
      'abrv_financiamiento'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_financiamiento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaFinanciamiento';
  }

  public function getFields()
  {
    return array(
      'id_financiamiento'      => 'Number',
      'desc_financiamiento'    => 'Text',
      'tipo_financiamiento_id' => 'ForeignKey',
      'abrv_financiamiento'    => 'Text',
    );
  }
}
