<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersProvidersStepsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersProvidersStepsTable Test Case
 */
class OrdersProvidersStepsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersProvidersStepsTable
     */
    public $OrdersProvidersSteps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orders_providers_steps',
        'app.orders',
        'app.users',
        'app.production_blocks',
        'app.working_times',
        'app.files',
        'app.providers',
        'app.steps'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrdersProvidersSteps') ? [] : ['className' => OrdersProvidersStepsTable::class];
        $this->OrdersProvidersSteps = TableRegistry::get('OrdersProvidersSteps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdersProvidersSteps);

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
