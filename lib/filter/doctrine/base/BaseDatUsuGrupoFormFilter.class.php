<?php

/**
 * DatUsuGrupo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatUsuGrupoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_grupo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abr_grupo'  => new sfWidgetFormFilterInput(),
      'estado_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'add_empty' => true)),
      'rol_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuRol'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_grupo' => new sfValidatorPass(array('required' => false)),
      'abr_grupo'  => new sfValidatorPass(array('required' => false)),
      'estado_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstado'), 'column' => 'id')),
      'rol_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuRol'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('dat_usu_grupo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatUsuGrupo';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'desc_grupo' => 'Text',
      'abr_grupo'  => 'Text',
      'estado_id'  => 'ForeignKey',
      'rol_id'     => 'ForeignKey',
    );
  }
}
