<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Executors Model
 *
 * @property \Cake\ORM\Association\HasMany $Complaints
 *
 * @method \App\Model\Entity\Executor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Executor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Executor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Executor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Executor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Executor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Executor findOrCreate($search, callable $callback = null)
 */
class ExecutorsTable extends Table
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

        $this->table('executors');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Complaints', [
            'foreignKey' => 'executor_id'
        ]);
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
            ->allowEmpty('username');

        $validator
            ->allowEmpty('password');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('surname');

        $validator
            ->allowEmpty('rut');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
