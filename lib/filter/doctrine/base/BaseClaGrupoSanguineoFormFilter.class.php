<?php

/**
 * ClaGrupoSanguineo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaGrupoSanguineoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_grupo_sanguineo' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_grupo_sanguineo' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_grupo_sanguineo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaGrupoSanguineo';
  }

  public function getFields()
  {
    return array(
      'id_grupo_sanguineo'   => 'Number',
      'desc_grupo_sanguineo' => 'Text',
    );
  }
}
