<?php

/**
 * VisPorcentajeConsolidadoDistrito form base class.
 *
 * @method VisPorcentajeConsolidadoDistrito getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisPorcentajeConsolidadoDistritoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputText(),
      'departamento_id' => new sfWidgetFormInputText(),
      'cod_distrito'    => new sfWidgetFormInputText(),
      'distrito'        => new sfWidgetFormInputText(),
      'consolidado'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorInteger(array('required' => false)),
      'departamento_id' => new sfValidatorInteger(),
      'cod_distrito'    => new sfValidatorInteger(),
      'distrito'        => new sfValidatorString(array('max_length' => 45)),
      'consolidado'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_porcentaje_consolidado_distrito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisPorcentajeConsolidadoDistrito';
  }

}
