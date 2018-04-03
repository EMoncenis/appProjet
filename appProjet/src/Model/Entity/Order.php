<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $description
 * @property string $name
 * @property \Cake\I18n\FrozenDate $delivery_date
 * @property int $production_time
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $updated
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\File[] $files
 * @property \App\Model\Entity\OrdersProvidersStep[] $orders_providers_steps
 * @property \App\Model\Entity\ProductionBlock[] $production_blocks
 */
class Order extends Entity
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
        'description' => true,
        'name' => true,
        'delivery_date' => true,
        'production_time' => true,
        'user_id' => true,
        'created' => true,
        'updated' => true,
        'user' => true,
        'files' => true,
        'orders_providers_steps' => true,
        'production_blocks' => true
    ];
}
