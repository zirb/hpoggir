<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quinielas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Partidos
 *
 * @method \App\Model\Entity\Quiniela get($primaryKey, $options = [])
 * @method \App\Model\Entity\Quiniela newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Quiniela[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quiniela|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quiniela patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Quiniela[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quiniela findOrCreate($search, callable $callback = null)
 */
class QuinielasTable extends Table
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

        $this->table('quinielas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Partidos', [
            'foreignKey' => 'partido_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('resultado', 'create')
            ->notEmpty('resultado');

        $validator
            ->dateTime('fecha_mod')
            ->requirePresence('fecha_mod', 'create')
            ->notEmpty('fecha_mod');

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
        $rules->add($rules->existsIn(['usuario_id'], 'Users'));
        $rules->add($rules->existsIn(['partido_id'], 'Partidos'));

        return $rules;
    }
}
