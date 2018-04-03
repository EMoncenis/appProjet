<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrdersProvidersSteps Model
 *
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\BelongsTo $Orders
 * @property \App\Model\Table\ProvidersTable|\Cake\ORM\Association\BelongsTo $Providers
 * @property \App\Model\Table\StepsTable|\Cake\ORM\Association\BelongsTo $Steps
 *
 * @method \App\Model\Entity\OrdersProvidersStep get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrdersProvidersStep newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OrdersProvidersStep[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProvidersStep|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrdersProvidersStep patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProvidersStep[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrdersProvidersStep findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersProvidersStepsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('orders_providers_steps');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Providers', [
            'foreignKey' => 'provider_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Steps', [
            'foreignKey' => 'step_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
   /* public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->boolean('state')
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->scalar('note');

        return $validator;
    }*/

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['order_id'], 'Orders'));
        $rules->add($rules->existsIn(['provider_id'], 'Providers'));
        $rules->add($rules->existsIn(['step_id'], 'Steps'));

        return $rules;
    }
}
