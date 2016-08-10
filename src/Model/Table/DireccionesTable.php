<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Direcciones Model
 *
 * @method \App\Model\Entity\Direccione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Direccione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Direccione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Direccione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direccione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Direccione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Direccione findOrCreate($search, callable $callback = null)
 */
class DireccionesTable extends Table
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

        $this->table('direcciones');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('noint')
            ->allowEmpty('noint');

        $validator
            ->requirePresence('calle', 'create')
            ->notEmpty('calle');

        $validator
            ->requirePresence('CP', 'create')
            ->notEmpty('CP');

        $validator
            ->allowEmpty('colonia');

        $validator
            ->allowEmpty('delegacion');

        $validator
            ->allowEmpty('cel');

        $validator
            ->integer('Noext')
            ->allowEmpty('Noext');

        return $validator;
    }
}
