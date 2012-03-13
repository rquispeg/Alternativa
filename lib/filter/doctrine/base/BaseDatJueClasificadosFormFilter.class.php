<?php

/**
 * DatJueClasificados filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatJueClasificadosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inscrito_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatJueInscritos'), 'add_empty' => true)),
      'fase'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'marca'       => new sfWidgetFormFilterInput(),
      'distancia'   => new sfWidgetFormFilterInput(),
      'tipo_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genero_id'   => new sfWidgetFormFilterInput(),
      'posicion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'inscrito_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatJueInscritos'), 'column' => 'id')),
      'fase'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'marca'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'distancia'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'genero_id'   => new sfValidatorPass(array('required' => false)),
      'posicion'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'usuario_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('dat_jue_clasificados_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatJueClasificados';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'inscrito_id' => 'ForeignKey',
      'fase'        => 'Number',
      'marca'       => 'Number',
      'distancia'   => 'Number',
      'tipo_id'     => 'Number',
      'genero_id'   => 'Text',
      'posicion'    => 'Number',
      'usuario_id'  => 'ForeignKey',
    );
  }
}
