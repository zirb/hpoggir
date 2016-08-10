<?php
namespace App\Model\Entity;

//lineas incluidas por mi
use Cake\Auth\DefaultPasswordHasher;
//
use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $ape_pat
 * @property string $ape_mat
 * @property int $dir_id
 * @property string $mail
 * @property string $password
 * @property \Cake\I18n\Time $fecha_nac
 * @property string $nacionalidad
 * @property int $alumno_id
 *
 * @property \App\Model\Entity\Direccione $direccione
 * @property \App\Model\Entity\Alumno $alumno
 * @property \App\Model\Entity\Quiniela[] $quinielas
 */
class Usuario extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
