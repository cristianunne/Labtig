<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escalascapas Model
 *
 * @method \App\Model\Entity\Escalascapa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escalascapa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Escalascapa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escalascapa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escalascapa|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escalascapa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escalascapa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escalascapa findOrCreate($search, callable $callback = null, $options = [])
 */
class EscalascapasTable extends Table
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

        $this->setTable('escalascapas');
        $this->setDisplayField('idescala');
        $this->setPrimaryKey('idescala');
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
            ->integer('idescala')
            ->allowEmpty('idescala', 'create');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 100)
            ->requirePresence('categoria', 'create')
            ->notEmpty('categoria');

        return $validator;
    }
}
