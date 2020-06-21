<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NetworksUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NetworksUsersTable Test Case
 */
class NetworksUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NetworksUsersTable
     */
    protected $NetworksUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.NetworksUsers',
        'app.Users',
        'app.Networks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('NetworksUsers') ? [] : ['className' => NetworksUsersTable::class];
        $this->NetworksUsers = TableRegistry::getTableLocator()->get('NetworksUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->NetworksUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
