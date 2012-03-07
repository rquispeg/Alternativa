<?php

/**
 * DatUsuUsuario form.
 *
 * @package    Ing. Ivan Callapa Quiroz
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatUsuUsuarioForm extends BaseDatUsuUsuarioForm
{
  public function configure()
  {
      unset($this['estado_id'],$this['password'],$this['username']);
      $this->setWidget('nombre',new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('paterno',new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('materno',new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('email',new sfWidgetFormInputText());
      $this->setWidget('telefono',new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('celular',new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase')));
      $this->setWidget('direccion',new sfWidgetFormInputText(array(),array('style'=>'text-transform: uppercase;width:250px;')));

      $this->setWidget('foto', new sfWidgetFormInputFileEditable(array(
        'file_src'    => sfConfig::get('sf_upload_dir').'/fotos/'.$this->getObject()->foto,
        'edit_mode'   => !$this->isNew(),
        'is_image'    => true,
        'with_delete' => false,
      )));

      $this->setValidator('foto', new sfValidatorFile(array(
            'mime_types' => 'web_images',
            'path' => sfConfig::get('sf_upload_dir').'/fotos',
            'max_size'   => 10485700,
            'required' => false,
          )));

  }

  public function updateObject($values = null)
    {
        $object = parent::updateObject($values);
        $object->setNombre(strtoupper($object->getNombre()));
        $object->setPaterno(strtoupper($object->getPaterno()));
        $object->setMaterno(strtoupper($object->getMaterno()));
        $object->setDireccion(strtoupper($object->getDireccion()));
        return $object;
    }
}
