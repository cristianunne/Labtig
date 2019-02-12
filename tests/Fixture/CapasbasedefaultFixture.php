<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CapasbasedefaultFixture
 *
 */
class CapasbasedefaultFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'capasbasedefault';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idcapasbasedefault' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'capasbase_idcapasbase' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idcapasbasedefault'], 'length' => []],
            'fk_capasbase_cdef' => ['type' => 'foreign', 'columns' => ['capasbase_idcapasbase'], 'references' => ['capasbase', 'idcapasbase'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'idcapasbasedefault' => 1,
                'capasbase_idcapasbase' => 1
            ],
        ];
        parent::init();
    }
}
