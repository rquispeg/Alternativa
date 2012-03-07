<?php

/**
 * RelTraProcesoUsuario filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelTraProcesoUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'vigente'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'vigente'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('rel_tra_proceso_usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelTraProcesoUsuario';
  }

  public function getFields()
  {
    return array(
      'proceso_id' => 'Number',
      'gestion_id' => 'Number',
      'usuario_id' => 'Number',
      'vigente'    => 'Number',
    );
  }
}
