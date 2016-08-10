<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ListaLigas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Ligas
 * @property \Cake\ORM\Association\BelongsTo $Equipos
 *
 * @method \App\Model\Entity\ListaLiga get($primaryKey, $options = [])
 * @method \App\Model\Entity\ListaLiga newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ListaLiga[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ListaLiga|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListaLiga patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ListaLiga[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ListaLiga findOrCreate($search, callable $callback = null)
 */
class ListaLigasTable extends Table
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

        $this->table('lista_ligas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Ligas', [
            'foreignKey' => 'liga_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Equipos', [
            'foreignKey' => 'equipo_id',
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
            ->integer('temporada')
            ->requirePresence('temporada', 'create')
            ->notEmpty('temporada');

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
        $rules->add($rules->existsIn(['liga_id'], 'Ligas'));
        $rules->add($rules->existsIn(['equipo_id'], 'Equipos'));

        return $rules;
    }
}
