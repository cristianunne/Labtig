<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Layers Model
 *
 * @method \App\Model\Entity\Layer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Layer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Layer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Layer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Layer|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Layer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Layer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Layer findOrCreate($search, callable $callback = null, $options = [])
 */
class LayersTable extends Table
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

        $this->setTable('layers');
        $this->setDisplayField('idlayer');
        $this->setPrimaryKey('idlayer');

        $this->hasOne('Escalascapas', [
            'bindingKey' => 'escala_idescala',
            'foreignKey' => 'idescala',
            'joinType' => 'INNER'
        ]);

        $this->hasOne('Servicios', [
            'bindingKey' => 'servicios_idservicios',
            'foreignKey' => 'idservicios',
            'joinType' => 'INNER'
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
            ->integer('idlayer')
            ->allowEmpty('idlayer', 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('styles')
            ->maxLength('styles', 255)
            ->allowEmpty('styles');

        $validator
            ->scalar('format')
            ->maxLength('format', 100)
            ->requirePresence('format', 'create')
            ->notEmpty('format');

        $validator
            ->boolean('transparent')
            ->requirePresence('transparent', 'create')
            ->notEmpty('transparent');

        $validator
            ->scalar('version')
            ->maxLength('version', 30)
            ->allowEmpty('version');

        $validator
            ->scalar('crs')
            ->maxLength('crs', 45)
            ->allowEmpty('crs');

        $validator
            ->boolean('uppercase')
            ->allowEmpty('uppercase');

        $validator
            ->integer('minzoom')
            ->allowEmpty('minzoom');

        $validator
            ->integer('maxzoom')
            ->allowEmpty('maxzoom');

        $validator
            ->decimal('opacity')
            ->allowEmpty('opacity');

        $validator
            ->scalar('attribution')
            ->maxLength('attribution', 255)
            ->allowEmpty('attribution');

        $validator
            ->integer('escala_idescala')
            ->allowEmpty('escala_idescala');

        $validator
            ->integer('categoria_idcategoria')
            ->allowEmpty('categoria_idcategoria');

        $validator
            ->boolean('activo')
            ->allowEmpty('activo');

        $validator
            ->scalar('layers')
            ->maxLength('layers', 200)
            ->requirePresence('layers', 'create')
            ->notEmpty('layers');

        $validator
            ->integer('tiles')
            ->allowEmpty('tiles');

        $validator
            ->integer('servicios_idservicios')
            ->allowEmpty('servicios_idservicios');

        return $validator;
    }
}
