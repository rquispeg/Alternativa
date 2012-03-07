<?php

/**
 * DatUsuGrupo form base class.
 *
 * @method DatUsuGrupo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatUsuGrupoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'desc_grupo' => new sfWidgetFormInputText(),
      'abr_grupo'  => new sfWidgetFormInputText(),
      'estado_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'add_empty' => false)),
      'rol_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuRol'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_grupo' => new sfValidatorString(array('max_length' => 45)),
      'abr_grupo'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'estado_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'))),
      'rol_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuRol'))),
    ));

    $this->widgetSchema->setNameFormat('dat_usu_grupo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatUsuGrupo';
  }

}
