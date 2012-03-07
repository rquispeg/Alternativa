<?php

/**
 * DatAltCursooferta form.
 *
 * @package    alternativa
 * @subpackage form
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatAltCursoofertaForm extends BaseDatAltCursoofertaForm
{
  public function configure()
  {
      unset($this['resolucion_administrativa'],$this['fecha_vigencia'],$this['curso_oferta_id'],$this['vigente']);
      $q = Doctrine::getTable('DatRueUnidadEducativa')->getCentroEducacion(sfContext::getInstance()->getUser()->getAttribute('USUARIO_ID'));
      $this->setWidget('cod_ue_id', new sfWidgetFormDoctrineChoice(array('model' => 'DatRueUnidadEducativa', 'add_empty' => false, 'query'=> $q)));
  }
}
