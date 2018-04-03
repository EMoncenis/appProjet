<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductionBlocksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductionBlocksTable Test Case
 */
class ProductionBlocksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductionBlocksTable
     */
    public $ProductionBlocks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.production_blocks',
        'app.users',
        'app.orders',
        'app.files',
        'app.orders_providers_steps',
        'app.working_times'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductionBlocks') ? [] : ['className' => ProductionBlocksTable::class];
        $this->ProductionBlocks = TableRegistry::get('ProductionBlocks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductionBlocks);

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
