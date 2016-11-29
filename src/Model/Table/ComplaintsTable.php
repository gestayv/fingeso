<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Complaints Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Surveys
 * @property \Cake\ORM\Association\BelongsTo $Executors
 * @property \Cake\ORM\Association\BelongsTo $Owners
 * @property \Cake\ORM\Association\HasMany $Surveys
 *
 * @method \App\Model\Entity\Complaint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Complaint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Complaint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Complaint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Complaint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Complaint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Complaint findOrCreate($search, callable $callback = null)
 */
class ComplaintsTable extends Table
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

        $this->table('complaints');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Surveys', [
            'foreignKey' => 'survey_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Executors', [
            'foreignKey' => 'executor_id'
        ]);
        $this->belongsTo('Owners', [
            'foreignKey' => 'owner_id'
        ]);
        $this->hasMany('Surveys', [
            'foreignKey' => 'complaint_id'
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
            ->allowEmpty('DESCRIPCION_RECLAMO');

        $validator
            ->integer('PRIORIDAD_RECLAMO')
            ->allowEmpty('PRIORIDAD_RECLAMO');

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
        $rules->add($rules->existsIn(['survey_id'], 'Surveys'));
        $rules->add($rules->existsIn(['executor_id'], 'Executors'));
        $rules->add($rules->existsIn(['owner_id'], 'Owners'));

        return $rules;
    }
}
