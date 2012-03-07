<?php

/**
 * ClaCursoOferta form.
 *
 * @package    alternativa
 * @subpackage form
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ClaCursoOfertaForm extends BaseClaCursoOfertaForm
{
  public function configure()
  {
      unset($this['area_id'],$this['desc_curso_oferta']);
      $curso_oferta = Doctrine::getTable('ClaCursoOferta')->findAll();
      $this->setWidget('curso_oferta_id', new sfWidgetFormSelect(array('choices' => $curso_oferta)));
  }
}
