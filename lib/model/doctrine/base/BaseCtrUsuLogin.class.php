<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CtrUsuLogin', 'doctrine');

/**
 * BaseCtrUsuLogin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_login
 * @property integer $usuario_id
 * @property string $ip
 * @property timestamp $fecha_ingreso
 * @property integer $sistema_id
 * @property DatUsuSistema $DatUsuSistema
 * @property DatUsuUsuario $DatUsuUsuario
 * 
 * @method integer       getIdLogin()       Returns the current record's "id_login" value
 * @method integer       getUsuarioId()     Returns the current record's "usuario_id" value
 * @method string        getIp()            Returns the current record's "ip" value
 * @method timestamp     getFechaIngreso()  Returns the current record's "fecha_ingreso" value
 * @method integer       getSistemaId()     Returns the current record's "sistema_id" value
 * @method DatUsuSistema getDatUsuSistema() Returns the current record's "DatUsuSistema" value
 * @method DatUsuUsuario getDatUsuUsuario() Returns the current record's "DatUsuUsuario" value
 * @method CtrUsuLogin   setIdLogin()       Sets the current record's "id_login" value
 * @method CtrUsuLogin   setUsuarioId()     Sets the current record's "usuario_id" value
 * @method CtrUsuLogin   setIp()            Sets the current record's "ip" value
 * @method CtrUsuLogin   setFechaIngreso()  Sets the current record's "fecha_ingreso" value
 * @method CtrUsuLogin   setSistemaId()     Sets the current record's "sistema_id" value
 * @method CtrUsuLogin   setDatUsuSistema() Sets the current record's "DatUsuSistema" value
 * @method CtrUsuLogin   setDatUsuUsuario() Sets the current record's "DatUsuUsuario" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCtrUsuLogin extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ctr_usu_login');
        $this->hasColumn('id_login', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('ip', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('fecha_ingreso', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('sistema_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '1',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatUsuSistema', array(
             'local' => 'sistema_id',
             'foreign' => 'id_sistema'));

        $this->hasOne('DatUsuUsuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));
    }
}