<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ListaLiga Entity
 *
 * @property int $id
 * @property int $liga_id
 * @property int $equipo_id
 * @property int $temporada
 *
 * @property \App\Model\Entity\Liga $liga
 * @property \App\Model\Entity\Equipo $equipo
 */
class ListaLiga extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
