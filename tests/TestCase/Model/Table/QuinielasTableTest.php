<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuinielasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuinielasTable Test Case
 */
class QuinielasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuinielasTable
     */
    public $Quinielas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quinielas',
        'app.usuarios',
        'app.direcciones',
        'app.alumnos',
        'app.partidos',
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
        $config = TableRegistry::exists('Quinielas') ? [] : ['className' => 'App\Model\Table\QuinielasTable'];
        $this->Quinielas = TableRegistry::get('Quinielas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quinielas);

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
