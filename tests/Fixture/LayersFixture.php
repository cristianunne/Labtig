<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LayersFixture
 *
 */
class LayersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idlayer' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'nombre' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'urlservice' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'styles' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'format' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'transparent' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'version' => ['type' => 'string', 'length' => 30, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'crs' => ['type' => 'string', 'length' => 45, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'uppercase' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'minzoom' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'maxzoom' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'opacity' => ['type' => 'decimal', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'attribution' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'escala_idescala' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'categoria_idcategoria' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'layers' => ['type' => 'string', 'length' => 200, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tiles' => ['type' => 'integer', 'length' => 10, 'default' => '256', 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idlayer'], 'length' => []],
            'fk_categoria_layers' => ['type' => 'foreign', 'columns' => ['categoria_idcategoria'], 'references' => ['categoriascapas', 'idcategoriacapa'], 'update' => 'noAction', 'delete' => 'setNull', 'length' => []],
            'fk_escala_layers' => ['type' => 'foreign', 'columns' => ['escala_idescala'], 'references' => ['escalascapas', 'idescala'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'idlayer' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'urlservice' => 'Lorem ipsum dolor sit amet',
                'styles' => 'Lorem ipsum dolor sit amet',
                'format' => 'Lorem ipsum dolor sit amet',
                'transparent' => 1,
                'version' => 'Lorem ipsum dolor sit amet',
                'crs' => 'Lorem ipsum dolor sit amet',
                'uppercase' => 1,
                'minzoom' => 1,
                'maxzoom' => 1,
                'opacity' => 1.5,
                'attribution' => 'Lorem ipsum dolor sit amet',
                'escala_idescala' => 1,
                'categoria_idcategoria' => 1,
                'activo' => 1,
                'layers' => 'Lorem ipsum dolor sit amet',
                'tiles' => 1
            ],
        ];
        parent::init();
    }
}
