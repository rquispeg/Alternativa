<?php

/**
 * DatJueApoyo form base class.
 *
 * @method DatJueApoyo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatJueApoyoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'paterno'        => new sfWidgetFormInputText(),
      'matenro'        => new sfWidgetFormInputText(),
      'ci'             => new sfWidgetFormInputText(),
      'cod_ue_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => false)),
      'descripcion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDescripcion'), 'add_empty' => true)),
      'telefono'       => new sfWidgetFormInputText(),
      'celular'        => new sfWidgetFormInputText(),
      'genero'         => new sfWidgetFormInputText(),
      'disciplina_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDisciplina'), 'add_empty' => true)),
      'estado_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'paterno'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'matenro'        => new sfValidatorString(array('max_length' => 45)),
      'ci'             => new sfValidatorString(array('max_length' => 45)),
      'cod_ue_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'))),
      'descripcion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDescripcion'), 'required' => false)),
      'telefono'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'celular'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'genero'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'disciplina_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDisciplina'), 'required' => false)),
      'estado_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_jue_apoyo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatJueApoyo';
  }

}
