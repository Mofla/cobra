<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ad Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $type_ad_id
 * @property bool $is_active
 * @property bool $for_sale
 * @property bool $for_rent
 * @property int $price
 * @property string $price_info
 * @property int $surface
 * @property bool $is_divisible
 * @property int $town_id
 * @property string $description
 * @property float $latitude
 * @property float $longitude
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\TypeAd $type_ad
 * @property \App\Model\Entity\Town $town
 * @property \App\Model\Entity\Image[] $images
 * @property \App\Model\Entity\Message[] $messages
 */
class Ad extends Entity
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
}
