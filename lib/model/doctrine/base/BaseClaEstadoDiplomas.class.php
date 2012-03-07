<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaEstadoDiplomas', 'doctrine');

/**
 * BaseClaEstadoDiplomas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $desc_estado
 * @property string $imagen
 * @property integer $estado_matricula_id
 * @property ClaEstadoMatricula $ClaEstadoMatricula
 * @property Doctrine_Collection $CtrVisDiplomas
 * @property Doctrine_Collection $CtrVisDiplomas_3
 * @property Doctrine_Collection $CtrVisDiplomas_4
 * @property Doctrine_Collection $CtrVisDiplomas_5
 * @property Doctrine_Collection $CtrVisDiplomas_6
 * @property Doctrine_Collection $CtrVisDiplomas_7
 * @property Doctrine_Collection $VisDplDiplomas
 * @property Doctrine_Collection $VisDplDiplomas_2
 * @property Doctrine_Collection $VisDplDiplomas_3
 * @property Doctrine_Collection $VisDplDiplomas_4
 * @property Doctrine_Collection $VisDplDiplomas_5
 * @property Doctrine_Collection $VisDplDiplomas_6
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method string              getDescEstado()          Returns the current record's "desc_estado" value
 * @method string              getImagen()              Returns the current record's "imagen" value
 * @method integer             getEstadoMatriculaId()   Returns the current record's "estado_matricula_id" value
 * @method ClaEstadoMatricula  getClaEstadoMatricula()  Returns the current record's "ClaEstadoMatricula" value
 * @method Doctrine_Collection getCtrVisDiplomas()      Returns the current record's "CtrVisDiplomas" collection
 * @method Doctrine_Collection getCtrVisDiplomas3()     Returns the current record's "CtrVisDiplomas_3" collection
 * @method Doctrine_Collection getCtrVisDiplomas4()     Returns the current record's "CtrVisDiplomas_4" collection
 * @method Doctrine_Collection getCtrVisDiplomas5()     Returns the current record's "CtrVisDiplomas_5" collection
 * @method Doctrine_Collection getCtrVisDiplomas6()     Returns the current record's "CtrVisDiplomas_6" collection
 * @method Doctrine_Collection getCtrVisDiplomas7()     Returns the current record's "CtrVisDiplomas_7" collection
 * @method Doctrine_Collection getVisDplDiplomas()      Returns the current record's "VisDplDiplomas" collection
 * @method Doctrine_Collection getVisDplDiplomas2()     Returns the current record's "VisDplDiplomas_2" collection
 * @method Doctrine_Collection getVisDplDiplomas3()     Returns the current record's "VisDplDiplomas_3" collection
 * @method Doctrine_Collection getVisDplDiplomas4()     Returns the current record's "VisDplDiplomas_4" collection
 * @method Doctrine_Collection getVisDplDiplomas5()     Returns the current record's "VisDplDiplomas_5" collection
 * @method Doctrine_Collection getVisDplDiplomas6()     Returns the current record's "VisDplDiplomas_6" collection
 * @method ClaEstadoDiplomas   setId()                  Sets the current record's "id" value
 * @method ClaEstadoDiplomas   setDescEstado()          Sets the current record's "desc_estado" value
 * @method ClaEstadoDiplomas   setImagen()              Sets the current record's "imagen" value
 * @method ClaEstadoDiplomas   setEstadoMatriculaId()   Sets the current record's "estado_matricula_id" value
 * @method ClaEstadoDiplomas   setClaEstadoMatricula()  Sets the current record's "ClaEstadoMatricula" value
 * @method ClaEstadoDiplomas   setCtrVisDiplomas()      Sets the current record's "CtrVisDiplomas" collection
 * @method ClaEstadoDiplomas   setCtrVisDiplomas3()     Sets the current record's "CtrVisDiplomas_3" collection
 * @method ClaEstadoDiplomas   setCtrVisDiplomas4()     Sets the current record's "CtrVisDiplomas_4" collection
 * @method ClaEstadoDiplomas   setCtrVisDiplomas5()     Sets the current record's "CtrVisDiplomas_5" collection
 * @method ClaEstadoDiplomas   setCtrVisDiplomas6()     Sets the current record's "CtrVisDiplomas_6" collection
 * @method ClaEstadoDiplomas   setCtrVisDiplomas7()     Sets the current record's "CtrVisDiplomas_7" collection
 * @method ClaEstadoDiplomas   setVisDplDiplomas()      Sets the current record's "VisDplDiplomas" collection
 * @method ClaEstadoDiplomas   setVisDplDiplomas2()     Sets the current record's "VisDplDiplomas_2" collection
 * @method ClaEstadoDiplomas   setVisDplDiplomas3()     Sets the current record's "VisDplDiplomas_3" collection
 * @method ClaEstadoDiplomas   setVisDplDiplomas4()     Sets the current record's "VisDplDiplomas_4" collection
 * @method ClaEstadoDiplomas   setVisDplDiplomas5()     Sets the current record's "VisDplDiplomas_5" collection
 * @method ClaEstadoDiplomas   setVisDplDiplomas6()     Sets the current record's "VisDplDiplomas_6" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaEstadoDiplomas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_estado_diplomas');
        $this->hasColumn('id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '1',
             ));
        $this->hasColumn('desc_estado', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('imagen', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('estado_matricula_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaEstadoMatricula', array(
             'local' => 'estado_matricula_id',
             'foreign' => 'id_estado_matricula'));

        $this->hasMany('CtrVisDiplomas', array(
             'local' => 'id',
             'foreign' => '1ro_secundaria'));

        $this->hasMany('CtrVisDiplomas as CtrVisDiplomas_3', array(
             'local' => 'id',
             'foreign' => '1ro_comunes'));

        $this->hasMany('CtrVisDiplomas as CtrVisDiplomas_4', array(
             'local' => 'id',
             'foreign' => '2do_secundaria'));

        $this->hasMany('CtrVisDiplomas as CtrVisDiplomas_5', array(
             'local' => 'id',
             'foreign' => '2do_especializados'));

        $this->hasMany('CtrVisDiplomas as CtrVisDiplomas_6', array(
             'local' => 'id',
             'foreign' => '3ro_secundaria'));

        $this->hasMany('CtrVisDiplomas as CtrVisDiplomas_7', array(
             'local' => 'id',
             'foreign' => '4to_secundaria'));

        $this->hasMany('VisDplDiplomas', array(
             'local' => 'id',
             'foreign' => '1ro_secundaria'));

        $this->hasMany('VisDplDiplomas as VisDplDiplomas_2', array(
             'local' => 'id',
             'foreign' => '1ro_comunes'));

        $this->hasMany('VisDplDiplomas as VisDplDiplomas_3', array(
             'local' => 'id',
             'foreign' => '2do_secundaria'));

        $this->hasMany('VisDplDiplomas as VisDplDiplomas_4', array(
             'local' => 'id',
             'foreign' => '2do_especializados'));

        $this->hasMany('VisDplDiplomas as VisDplDiplomas_5', array(
             'local' => 'id',
             'foreign' => '3ro_secundaria'));

        $this->hasMany('VisDplDiplomas as VisDplDiplomas_6', array(
             'local' => 'id',
             'foreign' => '4to_secundaria'));
    }
}