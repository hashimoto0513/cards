<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RarityTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RarityTable Test Case
 */
class RarityTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RarityTable
     */
    protected $Rarity;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Rarity',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rarity') ? [] : ['className' => RarityTable::class];
        $this->Rarity = $this->getTableLocator()->get('Rarity', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Rarity);

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
