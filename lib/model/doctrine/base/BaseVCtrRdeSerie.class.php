<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VCtrRdeSerie', 'doctrine');

/**
 * BaseVCtrRdeSerie
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $codigo_rude
 * @property integer $gestion_id8
 * @property string $cod_ue_id8
 * @property integer $nivel_id8
 * @property integer $grado_id8
 * @property string $desc_estado_matricula8
 * @property integer $gestion_id9
 * @property string $cod_ue_id9
 * @property integer $nivel_id9
 * @property integer $grado_id9
 * @property string $desc_estado_matricula9
 * @property integer $gestion_id10
 * @property string $cod_ue_id10
 * @property integer $nivel_id10
 * @property integer $grado_id10
 * @property string $desc_estado_matricula10
 * @property integer $gestion_id11
 * @property string $cod_ue_id11
 * @property integer $nivel_id11
 * @property integer $grado_id11
 * @property string $desc_estado_matricula11
 * 
 * @method integer      getId()                      Returns the current record's "id" value
 * @method string       getCodigoRude()              Returns the current record's "codigo_rude" value
 * @method integer      getGestionId8()              Returns the current record's "gestion_id8" value
 * @method string       getCodUeId8()                Returns the current record's "cod_ue_id8" value
 * @method integer      getNivelId8()                Returns the current record's "nivel_id8" value
 * @method integer      getGradoId8()                Returns the current record's "grado_id8" value
 * @method string       getDescEstadoMatricula8()    Returns the current record's "desc_estado_matricula8" value
 * @method integer      getGestionId9()              Returns the current record's "gestion_id9" value
 * @method string       getCodUeId9()                Returns the current record's "cod_ue_id9" value
 * @method integer      getNivelId9()                Returns the current record's "nivel_id9" value
 * @method integer      getGradoId9()                Returns the current record's "grado_id9" value
 * @method string       getDescEstadoMatricula9()    Returns the current record's "desc_estado_matricula9" value
 * @method integer      getGestionId10()             Returns the current record's "gestion_id10" value
 * @method string       getCodUeId10()               Returns the current record's "cod_ue_id10" value
 * @method integer      getNivelId10()               Returns the current record's "nivel_id10" value
 * @method integer      getGradoId10()               Returns the current record's "grado_id10" value
 * @method string       getDescEstadoMatricula10()   Returns the current record's "desc_estado_matricula10" value
 * @method integer      getGestionId11()             Returns the current record's "gestion_id11" value
 * @method string       getCodUeId11()               Returns the current record's "cod_ue_id11" value
 * @method integer      getNivelId11()               Returns the current record's "nivel_id11" value
 * @method integer      getGradoId11()               Returns the current record's "grado_id11" value
 * @method string       getDescEstadoMatricula11()   Returns the current record's "desc_estado_matricula11" value
 * @method VCtrRdeSerie setId()                      Sets the current record's "id" value
 * @method VCtrRdeSerie setCodigoRude()              Sets the current record's "codigo_rude" value
 * @method VCtrRdeSerie setGestionId8()              Sets the current record's "gestion_id8" value
 * @method VCtrRdeSerie setCodUeId8()                Sets the current record's "cod_ue_id8" value
 * @method VCtrRdeSerie setNivelId8()                Sets the current record's "nivel_id8" value
 * @method VCtrRdeSerie setGradoId8()                Sets the current record's "grado_id8" value
 * @method VCtrRdeSerie setDescEstadoMatricula8()    Sets the current record's "desc_estado_matricula8" value
 * @method VCtrRdeSerie setGestionId9()              Sets the current record's "gestion_id9" value
 * @method VCtrRdeSerie setCodUeId9()                Sets the current record's "cod_ue_id9" value
 * @method VCtrRdeSerie setNivelId9()                Sets the current record's "nivel_id9" value
 * @method VCtrRdeSerie setGradoId9()                Sets the current record's "grado_id9" value
 * @method VCtrRdeSerie setDescEstadoMatricula9()    Sets the current record's "desc_estado_matricula9" value
 * @method VCtrRdeSerie setGestionId10()             Sets the current record's "gestion_id10" value
 * @method VCtrRdeSerie setCodUeId10()               Sets the current record's "cod_ue_id10" value
 * @method VCtrRdeSerie setNivelId10()               Sets the current record's "nivel_id10" value
 * @method VCtrRdeSerie setGradoId10()               Sets the current record's "grado_id10" value
 * @method VCtrRdeSerie setDescEstadoMatricula10()   Sets the current record's "desc_estado_matricula10" value
 * @method VCtrRdeSerie setGestionId11()             Sets the current record's "gestion_id11" value
 * @method VCtrRdeSerie setCodUeId11()               Sets the current record's "cod_ue_id11" value
 * @method VCtrRdeSerie setNivelId11()               Sets the current record's "nivel_id11" value
 * @method VCtrRdeSerie setGradoId11()               Sets the current record's "grado_id11" value
 * @method VCtrRdeSerie setDescEstadoMatricula11()   Sets the current record's "desc_estado_matricula11" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseVCtrRdeSerie extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('v_ctr_rde_serie');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('codigo_rude', 'string', 18, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '18',
             ));
        $this->hasColumn('gestion_id8', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue_id8', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('nivel_id8', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('grado_id8', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_estado_matricula8', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('gestion_id9', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue_id9', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('nivel_id9', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('grado_id9', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_estado_matricula9', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('gestion_id10', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue_id10', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('nivel_id10', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('grado_id10', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_estado_matricula10', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('gestion_id11', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue_id11', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('nivel_id11', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('grado_id11', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_estado_matricula11', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}