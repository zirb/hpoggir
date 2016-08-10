<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListaLigasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListaLigasTable Test Case
 */
class ListaLigasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ListaLigasTable
     */
    public $ListaLigas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lista_ligas',
        'app.ligas',
        'app.equipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ListaLigas') ? [] : ['className' => 'App\Model\Table\ListaLigasTable'];
        $this->ListaLigas = TableRegistry::get('ListaLigas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ListaLigas);

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
