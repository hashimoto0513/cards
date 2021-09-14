<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VersionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VersionsTable Test Case
 */
class VersionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VersionsTable
     */
    protected $Versions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Versions',
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
        $config = $this->getTableLocator()->exists('Versions') ? [] : ['className' => VersionsTable::class];
        $this->Versions = $this->getTableLocator()->get('Versions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Versions);

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
