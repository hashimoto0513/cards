<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RaritysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RaritysTable Test Case
 */
class RaritysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RaritysTable
     */
    protected $Raritys;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Raritys',
        'app.Cards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Raritys') ? [] : ['className' => RaritysTable::class];
        $this->Raritys = $this->getTableLocator()->get('Raritys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Raritys);

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
}
