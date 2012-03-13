<?php

/**
 * Prueba filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePruebaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'            => new sfWidgetFormFilterInput(),
      'cod_distrito'          => new sfWidgetFormFilterInput(),
      'distrito'              => new sfWidgetFormFilterInput(),
      'cod_ue'                => new sfWidgetFormFilterInput(),
      'desc_ue'               => new sfWidgetFormFilterInput(),
      'codigo_rude'           => new sfWidgetFormFilterInput(),
      'carnet_identidad'      => new sfWidgetFormFilterInput(),
      'paterno'               => new sfWidgetFormFilterInput(),
      'materno'               => new sfWidgetFormFilterInput(),
      'nombre'                => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'genero'                => new sfWidgetFormFilterInput(),
      'desc_nivel'            => new sfWidgetFormFilterInput(),
      'desc_grado'            => new sfWidgetFormFilterInput(),
      'desc_estado_matricula' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'gestion_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_distrito'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'              => new sfValidatorPass(array('required' => false)),
      'cod_ue'                => new sfValidatorPass(array('required' => false)),
      'desc_ue'               => new sfValidatorPass(array('required' => false)),
      'codigo_rude'           => new sfValidatorPass(array('required' => false)),
      'carnet_identidad'      => new sfValidatorPass(array('required' => false)),
      'paterno'               => new sfValidatorPass(array('required' => false)),
      'materno'               => new sfValidatorPass(array('required' => false)),
      'nombre'                => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'                => new sfValidatorPass(array('required' => false)),
      'desc_nivel'            => new sfValidatorPass(array('required' => false)),
      'desc_grado'            => new sfValidatorPass(array('required' => false)),
      'desc_estado_matricula' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('prueba_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Prueba';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'gestion_id'            => 'Number',
      'cod_distrito'          => 'Number',
      'distrito'              => 'Text',
      'cod_ue'                => 'Text',
      'desc_ue'               => 'Text',
      'codigo_rude'           => 'Text',
      'carnet_identidad'      => 'Text',
      'paterno'               => 'Text',
      'materno'               => 'Text',
      'nombre'                => 'Text',
      'fecha_nacimiento'      => 'Date',
      'genero'                => 'Text',
      'desc_nivel'            => 'Text',
      'desc_grado'            => 'Text',
      'desc_estado_matricula' => 'Text',
    );
  }
}
