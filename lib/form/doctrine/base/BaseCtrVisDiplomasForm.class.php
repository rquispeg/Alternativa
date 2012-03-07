<?php

/**
 * CtrVisDiplomas form base class.
 *
 * @method CtrVisDiplomas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrVisDiplomasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inscripcion_id'     => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputHidden(),
      'codigo_rude'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      '1ro_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas'), 'add_empty' => false)),
      '2do_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_4'), 'add_empty' => false)),
      '3ro_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_6'), 'add_empty' => false)),
      '4to_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_7'), 'add_empty' => false)),
      '1ro_comunes'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_3'), 'add_empty' => false)),
      '2do_especializados' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_5'), 'add_empty' => false)),
      'recepcionado'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDplRecepcion'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'codigo_rude'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      '1ro_secundaria'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas'))),
      '2do_secundaria'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_4'))),
      '3ro_secundaria'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_6'))),
      '4to_secundaria'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_7'))),
      '1ro_comunes'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_3'))),
      '2do_especializados' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_5'))),
      'recepcionado'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDplRecepcion'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_vis_diplomas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrVisDiplomas';
  }

}
