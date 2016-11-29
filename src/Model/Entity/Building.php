<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Building Entity
 *
 * @property int $id
 * @property int $supervisor_id
 * @property int $NUM_EDIFICIO
 * @property string $DIR_EDIFICIO
 *
 * @property \App\Model\Entity\Supervisor[] $supervisors
 * @property \App\Model\Entity\Apartment[] $apartments
 */
class Building extends Entity
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