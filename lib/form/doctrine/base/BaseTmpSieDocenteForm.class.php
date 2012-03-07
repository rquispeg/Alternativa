<?php

/**
 * TmpSieDocente form base class.
 *
 * @method TmpSieDocente getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpSieDocenteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_docente'        => new sfWidgetFormInputHidden(),
      'gestion_id'        => new sfWidgetFormInputHidden(),
      'ci_docente_id'     => new sfWidgetFormInputText(),
      'cod_ue_id'         => new sfWidgetFormInputText(),
      'periodo_id'        => new sfWidgetFormInputText(),
      'operativo_id'      => new sfWidgetFormInputText(),
      'sub_cea_id'        => new sfWidgetFormInputText(),
      'financiamiento_id' => new sfWidgetFormInputText(),
      'cargo_id'          => new sfWidgetFormInputText(),
      'servicio'          => new sfWidgetFormInputText(),
      'item'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_docente'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_docente', 'required' => false)),
      'gestion_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'ci_docente_id'     => new sfValidatorString(array('max_length' => 8)),
      'cod_ue_id'         => new sfValidatorString(array('max_length' => 8)),
      'periodo_id'        => new sfValidatorInteger(),
      'operativo_id'      => new sfValidatorInteger(),
      'sub_cea_id'        => new sfValidatorInteger(),
      'financiamiento_id' => new sfValidatorInteger(),
      'cargo_id'          => new sfValidatorInteger(),
      'servicio'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'item'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_sie_docente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpSieDocente';
  }

}
