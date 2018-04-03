<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdersProvidersStep Entity
 *
 * @property int $id
 * @property bool $state
 * @property int $order_id
 * @property int $provider_id
 * @property int $step_id
 * @property string $note
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Provider $provider
 * @property \App\Model\Entity\Step $step
 */
class OrdersProvidersStep extends Entity
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
        'state' => true,
        'order_id' => true,
        'provider_id' => true,
        'step_id' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'order' => true,
        'provider' => true,
        'step' => true
    ];
}
