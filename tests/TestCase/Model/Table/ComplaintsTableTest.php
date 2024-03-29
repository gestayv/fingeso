<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComplaintsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComplaintsTable Test Case
 */
class ComplaintsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComplaintsTable
     */
    public $Complaints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.complaints',
        'app.owners',
        'app.executors',
        'app.apartments',
        'app.buildings',
        'app.supervisors',
        'app.surveys'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Complaints') ? [] : ['className' => 'App\Model\Table\ComplaintsTable'];
        $this->Complaints = TableRegistry::get('Complaints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Complaints);

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
