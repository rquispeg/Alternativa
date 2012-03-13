<?php

/**
 * AuxDplDiplomas filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxDplDiplomasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'cod_ue_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'usuario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'cod_ue_id'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aux_dpl_diplomas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuxDplDiplomas';
  }

  public function getFields()
  {
    return array(
      'serie_id'           => 'Number',
      'serie_alfanumerico' => 'Text',
      'gestion_id'         => 'Number',
      'inscripcion_id'     => 'Number',
      'usuario_id'         => 'ForeignKey',
      'cod_ue_id'          => 'Text',
    );
  }
}
