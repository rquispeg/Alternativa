<?php

/**
 * DatUsuRol filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatUsuRolFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_rol' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abr_rol'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_rol' => new sfValidatorPass(array('required' => false)),
      'abr_rol'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_usu_rol_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatUsuRol';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'desc_rol' => 'Text',
      'abr_rol'  => 'Text',
    );
  }
}
