<?php

/**
 * DatEdaEvento form base class.
 *
 * @method DatEdaEvento getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEdaEventoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_evento'           => new sfWidgetFormInputHidden(),
      'cod_ue_id'           => new sfWidgetFormInputHidden(),
      'gestion_id'          => new sfWidgetFormInputHidden(),
      'tipo_evento_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEdaEvento'), 'add_empty' => false)),
      'fecha_inicio_evento' => new sfWidgetFormDate(),
      'cargo_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => false)),
      'telefono_referencia' => new sfWidgetFormInputText(),
      'acceso'              => new sfWidgetFormInputText(),
      'funcionamiento'      => new sfWidgetFormInputText(),
      'albergue'            => new sfWidgetFormInputText(),
      'estado_desastre_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEdaEstadoDesastre'), 'add_empty' => false)),
      'agua'                => new sfWidgetFormInputText(),
      'banios'              => new sfWidgetFormInputText(),
      'danio_materiales'    => new sfWidgetFormInputText(),
      'docentes_continuan'  => new sfWidgetFormInputText(),
      'docentes_requieren'  => new sfWidgetFormInputText(),
      'fecha_relevamiento'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_evento'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_evento', 'required' => false)),
      'cod_ue_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'gestion_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'tipo_evento_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEdaEvento'))),
      'fecha_inicio_evento' => new sfValidatorDate(),
      'cargo_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'))),
      'telefono_referencia' => new sfValidatorString(array('max_length' => 8)),
      'acceso'              => new sfValidatorInteger(),
      'funcionamiento'      => new sfValidatorInteger(),
      'albergue'            => new sfValidatorInteger(),
      'estado_desastre_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEdaEstadoDesastre'))),
      'agua'                => new sfValidatorInteger(),
      'banios'              => new sfValidatorInteger(),
      'danio_materiales'    => new sfValidatorInteger(),
      'docentes_continuan'  => new sfValidatorInteger(),
      'docentes_requieren'  => new sfValidatorInteger(),
      'fecha_relevamiento'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('dat_eda_evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEdaEvento';
  }

}
