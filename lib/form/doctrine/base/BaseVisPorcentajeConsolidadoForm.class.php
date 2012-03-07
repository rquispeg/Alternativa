<?php

/**
 * VisPorcentajeConsolidado form base class.
 *
 * @method VisPorcentajeConsolidado getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisPorcentajeConsolidadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputText(),
      'departamento_id' => new sfWidgetFormInputText(),
      'consolidado'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorInteger(array('required' => false)),
      'departamento_id' => new sfValidatorInteger(),
      'consolidado'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_porcentaje_consolidado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisPorcentajeConsolidado';
  }

}
