<?php

/**
 * VisGestion2010 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisGestion2010FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'carnet_identidad'           => new sfWidgetFormFilterInput(),
      'paterno'                    => new sfWidgetFormFilterInput(),
      'materno'                    => new sfWidgetFormFilterInput(),
      'nombre'                     => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'genero'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_nivel'                 => new sfWidgetFormFilterInput(),
      'id_grado'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_grado'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_abrv'                  => new sfWidgetFormFilterInput(),
      'estado_matricula_inicio_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'matricula_inicio'           => new sfWidgetFormFilterInput(),
      'matricula_fin'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_estado_matricula'      => new sfWidgetFormFilterInput(),
      'cod_org_curr'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_modalidad'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_dependencia'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_dependencia'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_inscripcion'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_distrito'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'                   => new sfValidatorPass(array('required' => false)),
      'cod_ue'                     => new sfValidatorPass(array('required' => false)),
      'desc_ue'                    => new sfValidatorPass(array('required' => false)),
      'codigo_rude'                => new sfValidatorPass(array('required' => false)),
      'carnet_identidad'           => new sfValidatorPass(array('required' => false)),
      'paterno'                    => new sfValidatorPass(array('required' => false)),
      'materno'                    => new sfValidatorPass(array('required' => false)),
      'nombre'                     => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'                     => new sfValidatorPass(array('required' => false)),
      'nivel_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_nivel'                 => new sfValidatorPass(array('required' => false)),
      'id_grado'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_grado'                 => new sfValidatorPass(array('required' => false)),
      'paralelo'                   => new sfValidatorPass(array('required' => false)),
      'desc_abrv'                  => new sfValidatorPass(array('required' => false)),
      'estado_matricula_inicio_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'matricula_inicio'           => new sfValidatorPass(array('required' => false)),
      'matricula_fin'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_estado_matricula'      => new sfValidatorPass(array('required' => false)),
      'cod_org_curr'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_modalidad'             => new sfValidatorPass(array('required' => false)),
      'cod_dependencia'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_dependencia'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_gestion2010_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisGestion2010';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'id_inscripcion'             => 'Number',
      'gestion_id'                 => 'Number',
      'cod_distrito'               => 'Number',
      'distrito'                   => 'Text',
      'cod_ue'                     => 'Text',
      'desc_ue'                    => 'Text',
      'codigo_rude'                => 'Text',
      'carnet_identidad'           => 'Text',
      'paterno'                    => 'Text',
      'materno'                    => 'Text',
      'nombre'                     => 'Text',
      'fecha_nacimiento'           => 'Date',
      'genero'                     => 'Text',
      'nivel_id'                   => 'Number',
      'desc_nivel'                 => 'Text',
      'id_grado'                   => 'Number',
      'desc_grado'                 => 'Text',
      'paralelo'                   => 'Text',
      'desc_abrv'                  => 'Text',
      'estado_matricula_inicio_id' => 'Number',
      'matricula_inicio'           => 'Text',
      'matricula_fin'              => 'Number',
      'desc_estado_matricula'      => 'Text',
      'cod_org_curr'               => 'Number',
      'desc_modalidad'             => 'Text',
      'cod_dependencia'            => 'Number',
      'desc_dependencia'           => 'Text',
    );
  }
}
