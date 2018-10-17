<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoriascapas Model
 *
 * @method \App\Model\Entity\Categoriascapa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoriascapa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categoriascapa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoriascapa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoriascapa|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoriascapa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriascapa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriascapa findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriascapasTable extends Table
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

        $this->setTable('categoriascapas');
        $this->setDisplayField('idcategoriacapa');
        $this->setPrimaryKey('idcategoriacapa');
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
            ->integer('idcategoriacapa')
            ->allowEmpty('idcategoriacapa', 'create');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 50)
            ->requirePresence('categoria', 'create')
            ->notEmpty('categoria');

        return $validator;
    }
}
