<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApartmentsFixture
 *
 */
class ApartmentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'building_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'owner_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'DIR_DEPTO' => ['type' => 'string', 'length' => 70, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NUMERO_DEPTO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_POSEE2' => ['type' => 'index', 'columns' => ['owner_id'], 'length' => []],
            'FK_SE_COMPONE_DE' => ['type' => 'index', 'columns' => ['building_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_POSEE2' => ['type' => 'foreign', 'columns' => ['owner_id'], 'references' => ['owners', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_SE_COMPONE_DE' => ['type' => 'foreign', 'columns' => ['building_id'], 'references' => ['buildings', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'building_id' => 1,
            'owner_id' => 1,
            'DIR_DEPTO' => 'Lorem ipsum dolor sit amet',
            'NUMERO_DEPTO' => 1
        ],
    ];
}
