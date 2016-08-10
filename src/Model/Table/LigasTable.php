<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ligas Model
 *
 * @property \Cake\ORM\Association\HasMany $ListaLigas
 *
 * @method \App\Model\Entity\Liga get($primaryKey, $options = [])
 * @method \App\Model\Entity\Liga newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Liga[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Liga|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Liga patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Liga[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Liga findOrCreate($search, callable $callback = null)
 */
class LigasTable extends Table
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

        $this->table('ligas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('ListaLigas', [
            'foreignKey' => 'liga_id'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('img', 'create')
            ->notEmpty('img');

        return $validator;
    }
}
