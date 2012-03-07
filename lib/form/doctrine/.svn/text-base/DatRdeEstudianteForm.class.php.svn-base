<?php

/**
 * DatRdeEstudiante form.
 *
 * @package    proyecto
 * @subpackage form
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatRdeEstudianteForm extends BaseDatRdeEstudianteForm
{
  public function configure()
  {
      $rango = range(1940, 2008);
      $arreglo_rango = array_combine($rango, $rango);
      $this->setWidget('fecha_nacimiento', new sfWidgetFormJQueryDate(array(
          'date_widget' => new sfWidgetFormDate(array('years' => $arreglo_rango,
                                                      'format'=>'%day%/%month%/%year%',
                                                      'default'=>date("d/m/Y"),
                                                      'empty_values' => array('year'=>'','month'=>'','day'=>''))),
          'image'=> '/images/iconcalendar_18.png',
          'config' => '{firstDay: 1, changeMonth: true, changeYear: true, yearRange: "c-70:c"}',
          'culture'=> 'es')));
      $choices = array('M' =>'M', 'F'=>'F');
      $options = array('choices' => $choices, 'expanded' => false);
      $this->setWidget('genero', new sfWidgetFormChoice($options));

      $q['-999']='[Seleccionar]';
      $options = array('choices' => $q, 'expanded' => false);
      $this->setWidget('departamento_nac_id', new sfWidgetFormChoice($options));

      $choices = array('-999' =>'[Seleccionar]');
      $options = array('choices' => $choices, 'expanded' => false);
      $this->setWidget('provincia_nac_id', new sfWidgetFormChoice($options));
      $this->setWidget('nombre', new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('paterno', new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('materno', new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('localidad', new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('oficialia', new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('libro', new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('partida', new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('folio', new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));

      $this->setWidget('carnet_identidad',new sfWidgetFormInputText(array(),array('onkeydown'=>'return validarNumero(event)','maxlength'=>'12')));

      $this->setValidator('email',new sfValidatorEmail());

  }
}