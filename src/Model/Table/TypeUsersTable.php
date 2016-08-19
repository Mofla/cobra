<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeUsers Model
 *
 * @property \Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\TypeUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypeUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypeUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypeUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypeUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypeUser findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TypeUsersTable extends Table
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

        $this->table('type_users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Users', [
            'foreignKey' => 'type_user_id'
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
            ->requirePresence('type_user_name', 'create')
            ->notEmpty('type_user_name');

        return $validator;
    }
}
