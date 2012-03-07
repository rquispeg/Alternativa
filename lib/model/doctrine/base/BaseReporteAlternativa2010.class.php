<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ReporteAlternativa2010', 'doctrine');

/**
 * BaseReporteAlternativa2010
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $gestion_id
 * @property string $periodo
 * @property string $desc_departamento
 * @property integer $cod_distrito
 * @property string $distrito
 * @property integer $id_nivel
 * @property string $cod_ue
 * @property string $desc_ue
 * @property string $desc_nivel
 * @property integer $id_ciclo
 * @property string $desc_ciclo
 * @property integer $id_grado
 * @property string $desc_grado
 * @property string $genero
 * @property integer $calculated_column1
 * 
 * @method integer                getId()                 Returns the current record's "id" value
 * @method integer                getGestionId()          Returns the current record's "gestion_id" value
 * @method string                 getPeriodo()            Returns the current record's "periodo" value
 * @method string                 getDescDepartamento()   Returns the current record's "desc_departamento" value
 * @method integer                getCodDistrito()        Returns the current record's "cod_distrito" value
 * @method string                 getDistrito()           Returns the current record's "distrito" value
 * @method integer                getIdNivel()            Returns the current record's "id_nivel" value
 * @method string                 getCodUe()              Returns the current record's "cod_ue" value
 * @method string                 getDescUe()             Returns the current record's "desc_ue" value
 * @method string                 getDescNivel()          Returns the current record's "desc_nivel" value
 * @method integer                getIdCiclo()            Returns the current record's "id_ciclo" value
 * @method string                 getDescCiclo()          Returns the current record's "desc_ciclo" value
 * @method integer                getIdGrado()            Returns the current record's "id_grado" value
 * @method string                 getDescGrado()          Returns the current record's "desc_grado" value
 * @method string                 getGenero()             Returns the current record's "genero" value
 * @method integer                getCalculatedColumn1()  Returns the current record's "calculated_column1" value
 * @method ReporteAlternativa2010 setId()                 Sets the current record's "id" value
 * @method ReporteAlternativa2010 setGestionId()          Sets the current record's "gestion_id" value
 * @method ReporteAlternativa2010 setPeriodo()            Sets the current record's "periodo" value
 * @method ReporteAlternativa2010 setDescDepartamento()   Sets the current record's "desc_departamento" value
 * @method ReporteAlternativa2010 setCodDistrito()        Sets the current record's "cod_distrito" value
 * @method ReporteAlternativa2010 setDistrito()           Sets the current record's "distrito" value
 * @method ReporteAlternativa2010 setIdNivel()            Sets the current record's "id_nivel" value
 * @method ReporteAlternativa2010 setCodUe()              Sets the current record's "cod_ue" value
 * @method ReporteAlternativa2010 setDescUe()             Sets the current record's "desc_ue" value
 * @method ReporteAlternativa2010 setDescNivel()          Sets the current record's "desc_nivel" value
 * @method ReporteAlternativa2010 setIdCiclo()            Sets the current record's "id_ciclo" value
 * @method ReporteAlternativa2010 setDescCiclo()          Sets the current record's "desc_ciclo" value
 * @method ReporteAlternativa2010 setIdGrado()            Sets the current record's "id_grado" value
 * @method ReporteAlternativa2010 setDescGrado()          Sets the current record's "desc_grado" value
 * @method ReporteAlternativa2010 setGenero()             Sets the current record's "genero" value
 * @method ReporteAlternativa2010 setCalculatedColumn1()  Sets the current record's "calculated_column1" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseReporteAlternativa2010 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reporte_alternativa_2010');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('periodo', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('desc_departamento', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('cod_distrito', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('distrito', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('id_nivel', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('cod_ue', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('desc_ue', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '70',
             ));
        $this->hasColumn('desc_nivel', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('id_ciclo', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_ciclo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('id_grado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_grado', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('genero', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('calculated_column1', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
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