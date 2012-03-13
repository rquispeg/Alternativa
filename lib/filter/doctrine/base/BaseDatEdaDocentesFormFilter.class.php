<?php

/**
 * DatEdaDocentes filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEdaDocentesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'varones'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mujeres'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'varones'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mujeres'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_eda_docentes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEdaDocentes';
  }

  public function getFields()
  {
    return array(
      'evento_id'  => 'Number',
      'cod_ue_id'  => 'Text',
      'gestion_id' => 'Number',
      'estado_id'  => 'Number',
      'varones'    => 'Number',
      'mujeres'    => 'Number',
    );
  }
}
