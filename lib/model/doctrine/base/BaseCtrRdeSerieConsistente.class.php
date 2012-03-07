<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CtrRdeSerieConsistente', 'doctrine');

/**
 * BaseCtrRdeSerieConsistente
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codigo_rude
 * @property integer $consistente
 * @property integer $peso
 * 
 * @method string                 getCodigoRude()  Returns the current record's "codigo_rude" value
 * @method integer                getConsistente() Returns the current record's "consistente" value
 * @method integer                getPeso()        Returns the current record's "peso" value
 * @method CtrRdeSerieConsistente setCodigoRude()  Sets the current record's "codigo_rude" value
 * @method CtrRdeSerieConsistente setConsistente() Sets the current record's "consistente" value
 * @method CtrRdeSerieConsistente setPeso()        Sets the current record's "peso" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCtrRdeSerieConsistente extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ctr_rde_serie_consistente');
        $this->hasColumn('codigo_rude', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('consistente', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('peso', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}