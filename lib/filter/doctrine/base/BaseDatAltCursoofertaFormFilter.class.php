<?php

/**
 * DatAltCursooferta filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatAltCursoofertaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'resolucion_administrativa' => new sfWidgetFormFilterInput(),
      'fecha_vigencia'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'vigente'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'resolucion_administrativa' => new sfValidatorPass(array('required' => false)),
      'fecha_vigencia'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'vigente'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_alt_cursooferta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatAltCursooferta';
  }

  public function getFields()
  {
    return array(
      'curso_oferta_id'           => 'Number',
      'cod_ue_id'                 => 'Text',
      'resolucion_administrativa' => 'Text',
      'fecha_vigencia'            => 'Date',
      'vigente'                   => 'Number',
    );
  }
}
