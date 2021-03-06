<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnosTable Test Case
 */
class AlumnosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnosTable
     */
    public $Alumnos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alumnos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Alumnos') ? [] : ['className' => 'App\Model\Table\AlumnosTable'];
        $this->Alumnos = TableRegistry::get('Alumnos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Alumnos);

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
}
