<?php

/**
 * ClaTraTramite form base class.
 *
 * @method ClaTraTramite getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTraTramiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tramite'        => new sfWidgetFormInputHidden(),
      'desc_tramite'      => new sfWidgetFormInputText(),
      'fecha_resolucion'  => new sfWidgetFormDate(),
      'numero_resolucion' => new sfWidgetFormInputText(),
      'vigente'           => new sfWidgetFormInputText(),
      'tipo_tramite_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoTramite'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_tramite'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_tramite', 'required' => false)),
      'desc_tramite'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_resolucion'  => new sfValidatorDate(array('required' => false)),
      'numero_resolucion' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'vigente'           => new sfValidatorInteger(array('required' => false)),
      'tipo_tramite_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoTramite'))),
    ));

    $this->widgetSchema->setNameFormat('cla_tra_tramite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTraTramite';
  }

}
