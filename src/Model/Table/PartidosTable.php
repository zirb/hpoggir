<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Partidos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ListaLigas
 * @property \Cake\ORM\Association\BelongsTo $Equipos
 * @property \Cake\ORM\Association\BelongsTo $Equipos
 * @property \Cake\ORM\Association\HasMany $Quinielas
 *
 * @method \App\Model\Entity\Partido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Partido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Partido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Partido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Partido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Partido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Partido findOrCreate($search, callable $callback = null)
 */
class PartidosTable extends Table
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

        $this->table('partidos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('ListaLigas', [
            'foreignKey' => 'lista_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Equipos', [
            'foreignKey' => 'equip_local_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Equipos', [
            'foreignKey' => 'equip_vis_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Quinielas', [
            'foreignKey' => 'partido_id'
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
            ->requirePresence('jornada', 'create')
            ->notEmpty('jornada');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->allowEmpty('resultado');

        $validator
            ->allowEmpty('edo');

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
        $rules->add($rules->existsIn(['lista_id'], 'ListaLigas'));
        $rules->add($rules->existsIn(['equip_local_id'], 'Equipos'));
        $rules->add($rules->existsIn(['equip_vis_id'], 'Equipos'));

        return $rules;
    }
}
