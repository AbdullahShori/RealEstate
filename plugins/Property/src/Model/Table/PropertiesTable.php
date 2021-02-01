<?php
namespace Property\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Properties Model
 *
 * @method \Property\Model\Entity\Property get($primaryKey, $options = [])
 * @method \Property\Model\Entity\Property newEntity($data = null, array $options = [])
 * @method \Property\Model\Entity\Property[] newEntities(array $data, array $options = [])
 * @method \Property\Model\Entity\Property|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Property\Model\Entity\Property saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Property\Model\Entity\Property patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Property\Model\Entity\Property[] patchEntities($entities, array $data, array $options = [])
 * @method \Property\Model\Entity\Property findOrCreate($search, callable $callback = null, $options = [])
 */
class PropertiesTable extends Table
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

        $this->setTable('properties');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('Name')
            ->maxLength('Name', 255)
            ->requirePresence('Name', 'create')
            ->notEmptyString('Name');

        $validator
            ->scalar('Image')
            ->maxLength('Image', 255)
            ->requirePresence('Image', 'create')
            ->notEmptyString('Image');

        $validator
            ->scalar('Description')
            ->requirePresence('Description', 'create')
            ->notEmptyString('Description');

        $validator
            ->scalar('Price')
            ->maxLength('Price', 255)
            ->requirePresence('Price', 'create')
            ->notEmptyString('Price');

        return $validator;
    }
}
