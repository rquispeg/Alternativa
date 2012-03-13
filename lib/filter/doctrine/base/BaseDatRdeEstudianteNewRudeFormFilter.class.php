<?php

/**
 * DatRdeEstudianteNewRude filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeEstudianteNewRudeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'base'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo_rude' => new sfValidatorPass(array('required' => false)),
      'cod_ue'      => new sfValidatorPass(array('required' => false)),
      'numero'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'base'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_estudiante_new_rude_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeEstudianteNewRude';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'codigo_rude' => 'Text',
      'cod_ue'      => 'Text',
      'numero'      => 'Number',
      'base'        => 'Number',
    );
  }
}
