<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property bool $is_active
 * @property bool $is_member
 * @property bool $is_admin
 * @property string $first_name
 * @property string $last_name
 * @property string $company_name
 * @property int $type_user_id
 * @property string $address
 * @property int $zipcode
 * @property string $city
 * @property string $phone
 * @property string $website_link
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $linkedin_link
 * @property bool $email_is_hidden
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\TypeUser $type_user
 * @property \App\Model\Entity\Ad[] $ads
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
