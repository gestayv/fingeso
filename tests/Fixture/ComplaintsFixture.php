<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComplaintsFixture
 *
 */
class ComplaintsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'survey_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'executor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'owner_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'DESCRIPCION_RECLAMO' => ['type' => 'string', 'length' => 300, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PRIORIDAD_RECLAMO' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_PROCEDE_A' => ['type' => 'index', 'columns' => ['survey_id'], 'length' => []],
            'FK_REALIZA' => ['type' => 'index', 'columns' => ['owner_id'], 'length' => []],
            'FK_REPARA' => ['type' => 'index', 'columns' => ['executor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_PROCEDE_A' => ['type' => 'foreign', 'columns' => ['survey_id'], 'references' => ['surveys', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_REALIZA' => ['type' => 'foreign', 'columns' => ['owner_id'], 'references' => ['owners', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_REPARA' => ['type' => 'foreign', 'columns' => ['executor_id'], 'references' => ['executors', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'survey_id' => 1,
            'executor_id' => 1,
            'owner_id' => 1,
            'DESCRIPCION_RECLAMO' => 'Lorem ipsum dolor sit amet',
            'PRIORIDAD_RECLAMO' => 1
        ],
    ];
}
