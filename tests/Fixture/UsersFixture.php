<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'email' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'username' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'is_active' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'is_member' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'is_admin' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'first_name' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'last_name' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'company_name' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'type_user_id' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'address' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'zipcode' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'city' => ['type' => 'string', 'length' => 70, 'null' => false, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'phone' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'website_link' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'facebook_link' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'twitter_link' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'linkedin_link' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf16_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email_is_hidden' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'type_user_id' => ['type' => 'index', 'columns' => ['type_user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'company_name' => ['type' => 'unique', 'columns' => ['company_name'], 'length' => []],
            'users_type_13' => ['type' => 'foreign', 'columns' => ['type_user_id'], 'references' => ['type_users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf16_unicode_ci'
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
            'email' => 'Lorem ipsum dolor sit amet',
            'username' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'is_active' => 1,
            'is_member' => 1,
            'is_admin' => 1,
            'first_name' => 'Lorem ipsum dolor sit amet',
            'last_name' => 'Lorem ipsum dolor sit amet',
            'company_name' => 'Lorem ipsum dolor sit amet',
            'type_user_id' => 1,
            'address' => 'Lorem ipsum dolor sit amet',
            'zipcode' => 1,
            'city' => 'Lorem ipsum dolor sit amet',
            'phone' => 'Lorem ipsum dolor ',
            'website_link' => 'Lorem ipsum dolor sit amet',
            'facebook_link' => 'Lorem ipsum dolor sit amet',
            'twitter_link' => 'Lorem ipsum dolor sit amet',
            'linkedin_link' => 'Lorem ipsum dolor sit amet',
            'email_is_hidden' => 1,
            'created' => '2016-08-18 13:34:43',
            'modified' => '2016-08-18 13:34:43'
        ],
    ];
}
