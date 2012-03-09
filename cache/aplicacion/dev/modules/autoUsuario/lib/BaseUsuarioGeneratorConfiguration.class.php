<?php

/**
 * usuario module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage usuario
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuarioGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%username%% - %%password%% - %%nombre%% - %%paterno%% - %%materno%% - %%email%% - %%telefono%% - %%celular%% - %%direccion%% - %%estado_id%% - %%created_at%% - %%updated_at%% - %%cargo_id%% - %%foto%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Usuario List';
  }

  public function getEditTitle()
  {
    return 'Edit Usuario';
  }

  public function getNewTitle()
  {
    return 'New Usuario';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'username',  2 => 'password',  3 => 'nombre',  4 => 'paterno',  5 => 'materno',  6 => 'email',  7 => 'telefono',  8 => 'celular',  9 => 'direccion',  10 => 'estado_id',  11 => 'created_at',  12 => 'updated_at',  13 => 'cargo_id',  14 => 'foto',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'username' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'password' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'paterno' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'materno' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'telefono' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'celular' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'direccion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'estado_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'cargo_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'foto' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'password' => array(),
      'nombre' => array(),
      'paterno' => array(),
      'materno' => array(),
      'email' => array(),
      'telefono' => array(),
      'celular' => array(),
      'direccion' => array(),
      'estado_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'cargo_id' => array(),
      'foto' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'password' => array(),
      'nombre' => array(),
      'paterno' => array(),
      'materno' => array(),
      'email' => array(),
      'telefono' => array(),
      'celular' => array(),
      'direccion' => array(),
      'estado_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'cargo_id' => array(),
      'foto' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'password' => array(),
      'nombre' => array(),
      'paterno' => array(),
      'materno' => array(),
      'email' => array(),
      'telefono' => array(),
      'celular' => array(),
      'direccion' => array(),
      'estado_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'cargo_id' => array(),
      'foto' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'password' => array(),
      'nombre' => array(),
      'paterno' => array(),
      'materno' => array(),
      'email' => array(),
      'telefono' => array(),
      'celular' => array(),
      'direccion' => array(),
      'estado_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'cargo_id' => array(),
      'foto' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'username' => array(),
      'password' => array(),
      'nombre' => array(),
      'paterno' => array(),
      'materno' => array(),
      'email' => array(),
      'telefono' => array(),
      'celular' => array(),
      'direccion' => array(),
      'estado_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'cargo_id' => array(),
      'foto' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'DatUsuUsuarioForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'DatUsuUsuarioFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
