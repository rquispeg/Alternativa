<?php

/**
 * ViewRue2011 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseViewRue2011FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_departamento'   => new sfWidgetFormFilterInput(),
      'desc_departamento' => new sfWidgetFormFilterInput(),
      'gestion_id'        => new sfWidgetFormFilterInput(),
      'cod_distrito'      => new sfWidgetFormFilterInput(),
      'distrito'          => new sfWidgetFormFilterInput(),
      'tipo'              => new sfWidgetFormFilterInput(),
      'cod_ue'            => new sfWidgetFormFilterInput(),
      'desc_ue'           => new sfWidgetFormFilterInput(),
      'cod_org_curr_id'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_departamento'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento' => new sfValidatorPass(array('required' => false)),
      'gestion_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_distrito'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'          => new sfValidatorPass(array('required' => false)),
      'tipo'              => new sfValidatorPass(array('required' => false)),
      'cod_ue'            => new sfValidatorPass(array('required' => false)),
      'desc_ue'           => new sfValidatorPass(array('required' => false)),
      'cod_org_curr_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('view_rue2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ViewRue2011';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'id_departamento'   => 'Number',
      'desc_departamento' => 'Text',
      'gestion_id'        => 'Number',
      'cod_distrito'      => 'Number',
      'distrito'          => 'Text',
      'tipo'              => 'Text',
      'cod_ue'            => 'Text',
      'desc_ue'           => 'Text',
      'cod_org_curr_id'   => 'Number',
    );
  }
}
