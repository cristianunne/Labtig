<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriascapasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriascapasTable Test Case
 */
class CategoriascapasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriascapasTable
     */
    public $Categoriascapas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categoriascapas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Categoriascapas') ? [] : ['className' => CategoriascapasTable::class];
        $this->Categoriascapas = TableRegistry::getTableLocator()->get('Categoriascapas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categoriascapas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
