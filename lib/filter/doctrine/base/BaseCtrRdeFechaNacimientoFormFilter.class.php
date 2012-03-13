<?php

/**
 * CtrRdeFechaNacimiento filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeFechaNacimientoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'      => new sfWidgetFormFilterInput(),
      'codigo_rude_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cod_ue_id'      => new sfValidatorPass(array('required' => false)),
      'codigo_rude_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeEstudiante'), 'column' => 'codigo_rude')),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_fecha_nacimiento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeFechaNacimiento';
  }

  public function getFields()
  {
    return array(
      'inscripcion_id' => 'Number',
      'gestion_id'     => 'Number',
      'cod_ue_id'      => 'Text',
      'codigo_rude_id' => 'ForeignKey',
    );
  }
}
