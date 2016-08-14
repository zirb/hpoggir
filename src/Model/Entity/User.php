<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $ape_pat
 * @property string $ape_mat
 * @property int $dir_id
 * @property string $mail
 * @property string $password
 * @property \Cake\I18n\Time $fecha_nac
 * @property string $nacionalidad
 * @property int $alumno_id
 * @property string $role
 *
 * @property \App\Model\Entity\Direccione $direccione
 * @property \App\Model\Entity\Alumno $alumno
 */
class User extends Entity
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
protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
