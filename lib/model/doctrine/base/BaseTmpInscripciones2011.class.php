<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TmpInscripciones2011', 'doctrine');

/**
 * BaseTmpInscripciones2011
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codigo_rude
 * @property string $carnet_identidad
 * @property string $libreta_militar
 * @property string $paterno
 * @property string $materno
 * @property string $nombre
 * @property date $fecha_nacimiento
 * @property string $genero
 * @property string $inscrito_nuevo
 * @property string $inscrito_repitente
 * @property string $nivel
 * @property string $grado
 * @property string $paralelo
 * @property string $turno
 * @property date $fecha_inscripcion
 * @property string $pais
 * @property string $departamento
 * @property string $provincia
 * @property string $localidad
 * @property string $oficialia
 * @property string $libro
 * @property string $partida
 * @property string $folio
 * @property integer $seguimiento
 * @property integer $gestion_2010
 * @property integer $estado_fin_2010
 * @property integer $cod_ue
 * 
 * @method string               getCodigoRude()         Returns the current record's "codigo_rude" value
 * @method string               getCarnetIdentidad()    Returns the current record's "carnet_identidad" value
 * @method string               getLibretaMilitar()     Returns the current record's "libreta_militar" value
 * @method string               getPaterno()            Returns the current record's "paterno" value
 * @method string               getMaterno()            Returns the current record's "materno" value
 * @method string               getNombre()             Returns the current record's "nombre" value
 * @method date                 getFechaNacimiento()    Returns the current record's "fecha_nacimiento" value
 * @method string               getGenero()             Returns the current record's "genero" value
 * @method string               getInscritoNuevo()      Returns the current record's "inscrito_nuevo" value
 * @method string               getInscritoRepitente()  Returns the current record's "inscrito_repitente" value
 * @method string               getNivel()              Returns the current record's "nivel" value
 * @method string               getGrado()              Returns the current record's "grado" value
 * @method string               getParalelo()           Returns the current record's "paralelo" value
 * @method string               getTurno()              Returns the current record's "turno" value
 * @method date                 getFechaInscripcion()   Returns the current record's "fecha_inscripcion" value
 * @method string               getPais()               Returns the current record's "pais" value
 * @method string               getDepartamento()       Returns the current record's "departamento" value
 * @method string               getProvincia()          Returns the current record's "provincia" value
 * @method string               getLocalidad()          Returns the current record's "localidad" value
 * @method string               getOficialia()          Returns the current record's "oficialia" value
 * @method string               getLibro()              Returns the current record's "libro" value
 * @method string               getPartida()            Returns the current record's "partida" value
 * @method string               getFolio()              Returns the current record's "folio" value
 * @method integer              getSeguimiento()        Returns the current record's "seguimiento" value
 * @method integer              getGestion2010()        Returns the current record's "gestion_2010" value
 * @method integer              getEstadoFin2010()      Returns the current record's "estado_fin_2010" value
 * @method integer              getCodUe()              Returns the current record's "cod_ue" value
 * @method TmpInscripciones2011 setCodigoRude()         Sets the current record's "codigo_rude" value
 * @method TmpInscripciones2011 setCarnetIdentidad()    Sets the current record's "carnet_identidad" value
 * @method TmpInscripciones2011 setLibretaMilitar()     Sets the current record's "libreta_militar" value
 * @method TmpInscripciones2011 setPaterno()            Sets the current record's "paterno" value
 * @method TmpInscripciones2011 setMaterno()            Sets the current record's "materno" value
 * @method TmpInscripciones2011 setNombre()             Sets the current record's "nombre" value
 * @method TmpInscripciones2011 setFechaNacimiento()    Sets the current record's "fecha_nacimiento" value
 * @method TmpInscripciones2011 setGenero()             Sets the current record's "genero" value
 * @method TmpInscripciones2011 setInscritoNuevo()      Sets the current record's "inscrito_nuevo" value
 * @method TmpInscripciones2011 setInscritoRepitente()  Sets the current record's "inscrito_repitente" value
 * @method TmpInscripciones2011 setNivel()              Sets the current record's "nivel" value
 * @method TmpInscripciones2011 setGrado()              Sets the current record's "grado" value
 * @method TmpInscripciones2011 setParalelo()           Sets the current record's "paralelo" value
 * @method TmpInscripciones2011 setTurno()              Sets the current record's "turno" value
 * @method TmpInscripciones2011 setFechaInscripcion()   Sets the current record's "fecha_inscripcion" value
 * @method TmpInscripciones2011 setPais()               Sets the current record's "pais" value
 * @method TmpInscripciones2011 setDepartamento()       Sets the current record's "departamento" value
 * @method TmpInscripciones2011 setProvincia()          Sets the current record's "provincia" value
 * @method TmpInscripciones2011 setLocalidad()          Sets the current record's "localidad" value
 * @method TmpInscripciones2011 setOficialia()          Sets the current record's "oficialia" value
 * @method TmpInscripciones2011 setLibro()              Sets the current record's "libro" value
 * @method TmpInscripciones2011 setPartida()            Sets the current record's "partida" value
 * @method TmpInscripciones2011 setFolio()              Sets the current record's "folio" value
 * @method TmpInscripciones2011 setSeguimiento()        Sets the current record's "seguimiento" value
 * @method TmpInscripciones2011 setGestion2010()        Sets the current record's "gestion_2010" value
 * @method TmpInscripciones2011 setEstadoFin2010()      Sets the current record's "estado_fin_2010" value
 * @method TmpInscripciones2011 setCodUe()              Sets the current record's "cod_ue" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTmpInscripciones2011 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tmp_inscripciones_2011');
        $this->hasColumn('codigo_rude', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '20',
             ));
        $this->hasColumn('carnet_identidad', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('libreta_militar', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('paterno', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('materno', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('fecha_nacimiento', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
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
        $this->hasColumn('inscrito_nuevo', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('inscrito_repitente', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('nivel', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('grado', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('paralelo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('turno', 'string', 4, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('fecha_inscripcion', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('pais', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('departamento', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('provincia', 'string', 65, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '65',
             ));
        $this->hasColumn('localidad', 'string', 165, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '165',
             ));
        $this->hasColumn('oficialia', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('libro', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('partida', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('folio', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('seguimiento', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('gestion_2010', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('estado_fin_2010', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('cod_ue', 'integer', 4, array(
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
        
    }
}