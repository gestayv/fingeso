<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Owners Model
 *
 * @property \Cake\ORM\Association\HasMany $Apartments
 * @property \Cake\ORM\Association\HasMany $Complaints
 *
 * @method \App\Model\Entity\Owner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Owner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Owner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Owner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Owner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Owner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Owner findOrCreate($search, callable $callback = null)
 */
class OwnersTable extends Table
{
    /**
     * Procedimiento para crear nuevo usuario 
     * 
     * @param Rut, nombre y apellido
     * @return Entity, nueva entidad si se pudo registrar usuario, NULL en caso contrario
     */
    public function newUser($rut,$name,$surname){
        $user = $this->newEntity();

        if ($this->getByRut($rut)) return NULL;

        $user->name = $name;
        $user->surname = $surname;
        $user->rut = $rut;


        $name = explode(' ',$name)[0]; // solo primer nombre
        $surname = explode(' ',$surname)[0]; // solo primer apellido

        // reemplazar caracteres especiales 
        $specials = ['á','é','í','ó','ú','ñ'];
        $replace = ['a','e','i','o','u','n'];

        $name = str_replace(["'",'"',';',','],"",$name);
        $name = str_replace($specials,$replace,$name);

        $surname = str_replace(["'",'"',';',','],"",$surname);
        $surname = str_replace($specials,$replace,$surname);


        // username = nombre.apellido
        $username = $name.'.'.$surname;

        $count = 0;
        while ($this->getByUsername($username."$count")){
            $count+=1;
        }

        $user->username = $username.(($count==0)?"":"$count");

        // Pass: primeras 3 letras del nombre, 3 de apellido y 3 de rut.
        $user->password = strtolower(str_split($name, 3)[0].str_split($surname, 3)[0].str_split($rut, 3)[0]);

        // Guardar
        return $this->save($user);

    }


    public function getByRut($rut){
        return $this->find()->where(['rut'=>$rut])->first();
    }

    public function getByUsername($username){
        return $this->find()->where(['username'=>$username])->first();
    }




    /** AUTO GENERATED **/

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('owners');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Apartments', [
            'foreignKey' => 'owner_id'
        ]);
        $this->hasMany('Complaints', [
            'foreignKey' => 'owner_id'
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
