<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EscalascapasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EscalascapasTable Test Case
 */
class EscalascapasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EscalascapasTable
     */
    public $Escalascapas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.escalascapas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Escalascapas') ? [] : ['className' => EscalascapasTable::class];
        $this->Escalascapas = TableRegistry::getTableLocator()->get('Escalascapas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Escalascapas);

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
