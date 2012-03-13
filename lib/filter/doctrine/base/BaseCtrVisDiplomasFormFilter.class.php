<?php

/**
 * CtrVisDiplomas filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrVisDiplomasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => true)),
      '1ro_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas'), 'add_empty' => true)),
      '2do_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_4'), 'add_empty' => true)),
      '3ro_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_6'), 'add_empty' => true)),
      '4to_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_7'), 'add_empty' => true)),
      '1ro_comunes'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_3'), 'add_empty' => true)),
      '2do_especializados' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_5'), 'add_empty' => true)),
      'recepcionado'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDplRecepcion'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'codigo_rude'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeEstudiante'), 'column' => 'codigo_rude')),
      '1ro_secundaria'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoDiplomas'), 'column' => 'id')),
      '2do_secundaria'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoDiplomas_4'), 'column' => 'id')),
      '3ro_secundaria'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoDiplomas_6'), 'column' => 'id')),
      '4to_secundaria'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoDiplomas_7'), 'column' => 'id')),
      '1ro_comunes'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoDiplomas_3'), 'column' => 'id')),
      '2do_especializados' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoDiplomas_5'), 'column' => 'id')),
      'recepcionado'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDplRecepcion'), 'column' => 'id_recepcionado')),
    ));

    $this->widgetSchema->setNameFormat('ctr_vis_diplomas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrVisDiplomas';
  }

  public function getFields()
  {
    return array(
      'inscripcion_id'     => 'Number',
      'gestion_id'         => 'Number',
      'codigo_rude'        => 'ForeignKey',
      '1ro_secundaria'     => 'ForeignKey',
      '2do_secundaria'     => 'ForeignKey',
      '3ro_secundaria'     => 'ForeignKey',
      '4to_secundaria'     => 'ForeignKey',
      '1ro_comunes'        => 'ForeignKey',
      '2do_especializados' => 'ForeignKey',
      'recepcionado'       => 'ForeignKey',
    );
  }
}
