<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TmpMateria', 'doctrine');

/**
 * BaseTmpMateria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $num
 * 
 * @method integer    getNumero() Returns the current record's "numero" value
 * @method integer    getNum()    Returns the current record's "num" value
 * @method TmpMateria setNumero() Sets the current record's "numero" value
 * @method TmpMateria setNum()    Sets the current record's "num" valueero
 * @property integer $num
 * 
 * @method integer    getNumero() Returns the current record's "numero" value
 * @method integer    getNum()    Returns the current record's "num" value
 * @method TmpMateria setNumero() Sets the current record's "numero" value
 * @method TmpMateria setNum()    Sets the current record's "num" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTmpMateria extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tmp_materia');
        $this->hasColumn('numero', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '8',
             ));
        $this->hasColumn('num', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}