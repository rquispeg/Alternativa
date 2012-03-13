<?php

/**
 * VCertificacionRueAdultos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVCertificacionRueAdultosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'                      => new sfWidgetFormFilterInput(),
      'desc_modalidad'                  => new sfWidgetFormFilterInput(),
      'desc_departamento'               => new sfWidgetFormFilterInput(),
      'cod_distrito'                    => new sfWidgetFormFilterInput(),
      'distrito'                        => new sfWidgetFormFilterInput(),
      'cod_ue'                          => new sfWidgetFormFilterInput(),
      'desc_ue'                         => new sfWidgetFormFilterInput(),
      'desc_dependencia'                => new sfWidgetFormFilterInput(),
      'rue'                             => new sfWidgetFormFilterInput(),
      'fecha resolucion'                => new sfWidgetFormFilterInput(),
      'nro_resolucion'                  => new sfWidgetFormFilterInput(),
      'obs_rue'                         => new sfWidgetFormFilterInput(),
      'zona'                            => new sfWidgetFormFilterInput(),
      'direccion'                       => new sfWidgetFormFilterInput(),
      'certificado'                     => new sfWidgetFormFilterInput(),
      'eta (tecnico basico)'            => new sfWidgetFormFilterInput(),
      'educacion primaria de adultos'   => new sfWidgetFormFilterInput(),
      'educacion secundaria de adultos' => new sfWidgetFormFilterInput(),
      'eta (tecnico auxiliar)'          => new sfWidgetFormFilterInput(),
      'eta (tecnico medio)'             => new sfWidgetFormFilterInput(),
      'tecnica complementaria'          => new sfWidgetFormFilterInput(),
      'capacitacion tecnica laboral'    => new sfWidgetFormFilterInput(),
      'alfabetizacion proyectos'        => new sfWidgetFormFilterInput(),
      'alfabetizacion campaã±as'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'gestion_id'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_modalidad'                  => new sfValidatorPass(array('required' => false)),
      'desc_departamento'               => new sfValidatorPass(array('required' => false)),
      'cod_distrito'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'                        => new sfValidatorPass(array('required' => false)),
      'cod_ue'                          => new sfValidatorPass(array('required' => false)),
      'desc_ue'                         => new sfValidatorPass(array('required' => false)),
      'desc_dependencia'                => new sfValidatorPass(array('required' => false)),
      'rue'                             => new sfValidatorPass(array('required' => false)),
      'fecha resolucion'                => new sfValidatorPass(array('required' => false)),
      'nro_resolucion'                  => new sfValidatorPass(array('required' => false)),
      'obs_rue'                         => new sfValidatorPass(array('required' => false)),
      'zona'                            => new sfValidatorPass(array('required' => false)),
      'direccion'                       => new sfValidatorPass(array('required' => false)),
      'certificado'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'eta (tecnico basico)'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'educacion primaria de adultos'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'educacion secundaria de adultos' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'eta (tecnico auxiliar)'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'eta (tecnico medio)'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tecnica complementaria'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'capacitacion tecnica laboral'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'alfabetizacion proyectos'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'alfabetizacion campaã±as'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('v_certificacion_rue_adultos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VCertificacionRueAdultos';
  }

  public function getFields()
  {
    return array(
      'id'                              => 'Number',
      'gestion_id'                      => 'Number',
      'desc_modalidad'                  => 'Text',
      'desc_departamento'               => 'Text',
      'cod_distrito'                    => 'Number',
      'distrito'                        => 'Text',
      'cod_ue'                          => 'Text',
      'desc_ue'                         => 'Text',
      'desc_dependencia'                => 'Text',
      'rue'                             => 'Text',
      'fecha resolucion'                => 'Text',
      'nro_resolucion'                  => 'Text',
      'obs_rue'                         => 'Text',
      'zona'                            => 'Text',
      'direccion'                       => 'Text',
      'certificado'                     => 'Number',
      'eta (tecnico basico)'            => 'Number',
      'educacion primaria de adultos'   => 'Number',
      'educacion secundaria de adultos' => 'Number',
      'eta (tecnico auxiliar)'          => 'Number',
      'eta (tecnico medio)'             => 'Number',
      'tecnica complementaria'          => 'Number',
      'capacitacion tecnica laboral'    => 'Number',
      'alfabetizacion proyectos'        => 'Number',
      'alfabetizacion campaã±as'        => 'Number',
    );
  }
}
