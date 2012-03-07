<?php

/**
 * CtrRdeCambioGrado filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeCambioGradoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_cambio_grado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeCambioGrado';
  }

  public function getFields()
  {
    return array(
      'id_inscripcion' => 'Number',
      'gestion_id'     => 'Number',
      'nivel_id'       => 'Number',
      'ciclo_id'       => 'Number',
      'grado_id'       => 'Number',
      'paralelo'       => 'Text',
      'turno_id'       => 'Number',
      'user_id'        => 'ForeignKey',
      'fecha_cambio'   => 'Date',
    );
  }
}
