<?php

/**
 * ClaTraProceso form base class.
 *
 * @method ClaTraProceso getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTraProcesoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_proceso'          => new sfWidgetFormInputHidden(),
      'tramite_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraTramite'), 'add_empty' => false)),
      'numero_proceso'      => new sfWidgetFormInputText(),
      'desc_proceso'        => new sfWidgetFormInputText(),
      'tiempo_proceso'      => new sfWidgetFormInputText(),
      'tipo_proceso_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoProceso'), 'add_empty' => false)),
      'interaccion_sistema' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_proceso'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_proceso', 'required' => false)),
      'tramite_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraTramite'))),
      'numero_proceso'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_proceso'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'tiempo_proceso'      => new sfValidatorInteger(array('required' => false)),
      'tipo_proceso_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoProceso'))),
      'interaccion_sistema' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_tra_proceso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTraProceso';
  }

}
