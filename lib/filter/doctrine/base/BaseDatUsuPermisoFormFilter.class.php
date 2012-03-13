<?php

/**
 * DatUsuPermiso filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatUsuPermisoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_menu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abr_menu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'permiso_id' => new sfWidgetFormFilterInput(),
      'estado_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'add_empty' => true)),
      'link'       => new sfWidgetFormFilterInput(),
      'icono'      => new sfWidgetFormFilterInput(),
      'sistema_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuSistema'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_menu'  => new sfValidatorPass(array('required' => false)),
      'abr_menu'   => new sfValidatorPass(array('required' => false)),
      'permiso_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstado'), 'column' => 'id')),
      'link'       => new sfValidatorPass(array('required' => false)),
      'icono'      => new sfValidatorPass(array('required' => false)),
      'sistema_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuSistema'), 'column' => 'id_sistema')),
    ));

    $this->widgetSchema->setNameFormat('dat_usu_permiso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatUsuPermiso';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'desc_menu'  => 'Text',
      'abr_menu'   => 'Text',
      'permiso_id' => 'Number',
      'estado_id'  => 'ForeignKey',
      'link'       => 'Text',
      'icono'      => 'Text',
      'sistema_id' => 'ForeignKey',
    );
  }
}
