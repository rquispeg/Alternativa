<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatUsuGrupo', 'doctrine');

/**
 * BaseDatUsuGrupo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $desc_grupo
 * @property string $abr_grupo
 * @property integer $estado_id
 * @property integer $rol_id
 * @property DatUsuRol $DatUsuRol
 * @property ClaEstado $ClaEstado
 * @property Doctrine_Collection $RelTraUsuarioProceso
 * @property Doctrine_Collection $RelUsuarioGrupo
 * 
 * @method integer             getId()                   Returns the current record's "id" value
 * @method string              getDescGrupo()            Returns the current record's "desc_grupo" value
 * @method string              getAbrGrupo()             Returns the current record's "abr_grupo" value
 * @method integer             getEstadoId()             Returns the current record's "estado_id" value
 * @method integer             getRolId()                Returns the current record's "rol_id" value
 * @method DatUsuRol           getDatUsuRol()            Returns the current record's "DatUsuRol" value
 * @method ClaEstado           getClaEstado()            Returns the current record's "ClaEstado" value
 * @method Doctrine_Collection getRelTraUsuarioProceso() Returns the current record's "RelTraUsuarioProceso" collection
 * @method Doctrine_Collection getRelUsuarioGrupo()      Returns the current record's "RelUsuarioGrupo" collection
 * @method DatUsuGrupo         setId()                   Sets the current record's "id" value
 * @method DatUsuGrupo         setDescGrupo()            Sets the current record's "desc_grupo" value
 * @method DatUsuGrupo         setAbrGrupo()             Sets the current record's "abr_grupo" value
 * @method DatUsuGrupo         setEstadoId()             Sets the current record's "estado_id" value
 * @method DatUsuGrupo         setRolId()                Sets the current record's "rol_id" value
 * @method DatUsuGrupo         setDatUsuRol()            Sets the current record's "DatUsuRol" value
 * @method DatUsuGrupo         setClaEstado()            Sets the current record's "ClaEstado" value
 * @method DatUsuGrupo         setRelTraUsuarioProceso() Sets the current record's "RelTraUsuarioProceso" collection
 * @method DatUsuGrupo         setRelUsuarioGrupo()      Sets the current record's "RelUsuarioGrupo" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatUsuGrupo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_usu_grupo');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('desc_grupo', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('abr_grupo', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('estado_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('rol_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatUsuRol', array(
             'local' => 'rol_id',
             'foreign' => 'id'));

        $this->hasOne('ClaEstado', array(
             'local' => 'estado_id',
             'foreign' => 'id'));

        $this->hasMany('RelTraUsuarioProceso', array(
             'local' => 'id',
             'foreign' => 'grupo_id'));

        $this->hasMany('RelUsuarioGrupo', array(
             'local' => 'id',
             'foreign' => 'grupo_id'));
    }
}