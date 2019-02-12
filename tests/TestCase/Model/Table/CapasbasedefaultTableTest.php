<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CapasbasedefaultTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CapasbasedefaultTable Test Case
 */
class CapasbasedefaultTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CapasbasedefaultTable
     */
    public $Capasbasedefault;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.capasbasedefault'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Capasbasedefault') ? [] : ['className' => CapasbasedefaultTable::class];
        $this->Capasbasedefault = TableRegistry::getTableLocator()->get('Capasbasedefault', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Capasbasedefault);

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
