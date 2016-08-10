<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PartidosFixture
 *
 */
class PartidosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'lista_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'jornada' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'equip_local_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'equip_vis_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'resultado' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'edo' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'lista_id' => ['type' => 'index', 'columns' => ['lista_id'], 'length' => []],
            'equip_local_id' => ['type' => 'index', 'columns' => ['equip_local_id'], 'length' => []],
            'equip_vis_id' => ['type' => 'index', 'columns' => ['equip_vis_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'partidos_ibfk_1' => ['type' => 'foreign', 'columns' => ['lista_id'], 'references' => ['lista_ligas', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'partidos_ibfk_2' => ['type' => 'foreign', 'columns' => ['equip_local_id'], 'references' => ['equipos', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'partidos_ibfk_3' => ['type' => 'foreign', 'columns' => ['equip_vis_id'], 'references' => ['equipos', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'lista_id' => 1,
            'jornada' => 'Lorem ipsum dolor sit amet',
            'equip_local_id' => 1,
            'equip_vis_id' => 1,
            'fecha' => '2016-08-08 16:46:30',
            'resultado' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'edo' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
