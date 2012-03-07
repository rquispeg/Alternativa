<?php

/**
 * VRueEspecial filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVRueEspecialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'        => new sfWidgetFormFilterInput(),
      'desc_modalidad'    => new sfWidgetFormFilterInput(),
      'desc_departamento' => new sfWidgetFormFilterInput(),
      'cod_distrito'      => new sfWidgetFormFilterInput(),
      'distrito'          => new sfWidgetFormFilterInput(),
      'cod_ue'            => new sfWidgetFormFilterInput(),
      'desc_ue'           => new sfWidgetFormFilterInput(),
      'rue'               => new sfWidgetFormFilterInput(),
      'fecha_resolucion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'nro_resolucion'    => new sfWidgetFormFilterInput(),
      'obs_rue'           => new sfWidgetFormFilterInput(),
      'nivel_id'          => new sfWidgetFormFilterInput(),
      'desc_nivel'        => new sfWidgetFormFilterInput(),
      'id_acreditacion'   => new sfWidgetFormFilterInput(),
      'descciclo'         => new sfWidgetFormFilterInput(),
      'descciclo1'        => new sfWidgetFormFilterInput(),
      'certificado'       => new sfWidgetFormFilterInput(),
      'zona'              => new sfWidgetFormFilterInput(),
      'direccion'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'gestion_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_modalidad'    => new sfValidatorPass(array('required' => false)),
      'desc_departamento' => new sfValidatorPass(array('required' => false)),
      'cod_distrito'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'          => new sfValidatorPass(array('required' => false)),
      'cod_ue'            => new sfValidatorPass(array('required' => false)),
      'desc_ue'           => new sfValidatorPass(array('required' => false)),
      'rue'               => new sfValidatorPass(array('required' => false)),
      'fecha_resolucion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'nro_resolucion'    => new sfValidatorPass(array('required' => false)),
      'obs_rue'           => new sfValidatorPass(array('required' => false)),
      'nivel_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_nivel'        => new sfValidatorPass(array('required' => false)),
      'id_acreditacion'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'descciclo'         => new sfValidatorPass(array('required' => false)),
      'descciclo1'        => new sfValidatorPass(array('required' => false)),
      'certificado'       => new sfValidatorPass(array('required' => false)),
      'zona'              => new sfValidatorPass(array('required' => false)),
      'direccion'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_rue_especial_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VRueEspecial';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'gestion_id'        => 'Number',
      'desc_modalidad'    => 'Text',
      'desc_departamento' => 'Text',
      'cod_distrito'      => 'Number',
      'distrito'          => 'Text',
      'cod_ue'            => 'Text',
      'desc_ue'           => 'Text',
      'rue'               => 'Text',
      'fecha_resolucion'  => 'Date',
      'nro_resolucion'    => 'Text',
      'obs_rue'           => 'Text',
      'nivel_id'          => 'Number',
      'desc_nivel'        => 'Text',
      'id_acreditacion'   => 'Number',
      'descciclo'         => 'Text',
      'descciclo1'        => 'Text',
      'certificado'       => 'Text',
      'zona'              => 'Text',
      'direccion'         => 'Text',
    );
  }
}
