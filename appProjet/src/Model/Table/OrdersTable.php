<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class OrdersTable extends Table
{

    
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setDisplayField('name');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Files', [
            'foreignKey' => 'order_id'
        ]);
        $this->hasMany('OrdersProvidersSteps', [
            'foreignKey' => 'order_id'
        ]);
        $this->hasMany('ProductionBlocks', [
            'foreignKey' => 'order_id'
        ]);
    }

    // avant de sauvegarder on créer les steps

    public function afterSave($event,$entity,$options){
            foreach($this->OrdersProvidersSteps->Steps->find('all') AS $step){
            $stepToRegister = array('state' => false,
                            'order_id' => 1,
                            'provider_id' => 1,
                            'step_id' => $step['id'],
                            'note' => ''
                            );
            

            }
            $OrderProviderStep = $this->OrdersProvidersSteps->newEntity();
            die();

            return true;

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->date('delivery_date')
            ->requirePresence('delivery_date', 'create')
            ->notEmpty('delivery_date');

        $validator
            ->integer('production_time')
            ->requirePresence('production_time', 'create')
            ->notEmpty('production_time');

        return $validator;
    }
}
