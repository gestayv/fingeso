<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExecutorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExecutorsTable Test Case
 */
class ExecutorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExecutorsTable
     */
    public $Executors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.executors',
        'app.complaints',
        'app.surveys',
        'app.owners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Executors') ? [] : ['className' => 'App\Model\Table\ExecutorsTable'];
        $this->Executors = TableRegistry::get('Executors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Executors);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
