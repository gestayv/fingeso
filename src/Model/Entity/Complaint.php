<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Complaint Entity
 *
 * @property int $id
 * @property int $survey_id
 * @property int $executor_id
 * @property int $owner_id
 * @property string $DESCRIPCION_RECLAMO
 * @property int $PRIORIDAD_RECLAMO
 *
 * @property \App\Model\Entity\Survey[] $surveys
 * @property \App\Model\Entity\Executor $executor
 * @property \App\Model\Entity\Owner $owner
 */
class Complaint extends Entity
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
