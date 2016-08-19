<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TownsFixture
 *
 */
class TownsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'area_id' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'town_name' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'town_zip_code' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'ville_departement' => ['type' => 'index', 'columns' => ['area_id'], 'length' => []],
            'ville_code_postal' => ['type' => 'index', 'columns' => ['town_zip_code'], 'length' => []],
            'ville_nom_simple' => ['type' => 'index', 'columns' => ['town_name'], 'length' => []],
            'id' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'towns_area_1' => ['type' => 'foreign', 'columns' => ['area_id'], 'references' => ['areas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
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
            'area_id' => 1,
            'town_name' => 'Lorem ipsum dolor sit amet',
            'town_zip_code' => 'Lor',
            'created' => '2016-08-16 07:28:31',
            'modified' => '2016-08-16 07:28:31'
        ],
    ];
}
