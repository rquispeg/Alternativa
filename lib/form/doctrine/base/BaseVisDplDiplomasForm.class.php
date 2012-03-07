<?php

/**
 * VisDplDiplomas form base class.
 *
 * @method VisDplDiplomas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisDplDiplomasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inscripcion_id'     => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputHidden(),
      'codigo_rude'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      '1ro_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas'), 'add_empty' => false)),
      '2do_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_3'), 'add_empty' => false)),
      '3ro_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_5'), 'add_empty' => false)),
      '4to_secundaria'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_6'), 'add_empty' => false)),
      '1ro_comunes'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_2'), 'add_empty' => false)),
      '2do_especializados' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_4'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'codigo_rude'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      '1ro_secundaria'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas'))),
      '2do_secundaria'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_3'))),
      '3ro_secundaria'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_5'))),
      '4to_secundaria'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_6'))),
      '1ro_comunes'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_2'))),
      '2do_especializados' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoDiplomas_4'))),
    ));

    $this->widgetSchema->setNameFormat('vis_dpl_diplomas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisDplDiplomas';
  }

}
