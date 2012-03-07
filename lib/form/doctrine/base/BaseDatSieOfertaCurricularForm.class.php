<?php

/**
 * DatSieOfertaCurricular form base class.
 *
 * @method DatSieOfertaCurricular getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieOfertaCurricularForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_oferta_curricular' => new sfWidgetFormInputHidden(),
      'gestion_id'           => new sfWidgetFormInputHidden(),
      'cod_ue_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnEstudios'), 'add_empty' => false)),
      'cod_asignatura_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnEstudios_7'), 'add_empty' => false)),
      'nivel_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado_4'), 'add_empty' => false)),
      'ciclo_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado_3'), 'add_empty' => false)),
      'grado_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_oferta_curricular' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_oferta_curricular', 'required' => false)),
      'gestion_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cod_ue_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnEstudios'))),
      'cod_asignatura_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnEstudios_7'))),
      'nivel_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado_4'))),
      'ciclo_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado_3'))),
      'grado_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado'))),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_oferta_curricular[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieOfertaCurricular';
  }

}
