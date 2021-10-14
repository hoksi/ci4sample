<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

/**
 * Description of DataMapEntity
 *
 * @author hoksi
 */
class DataMapEntity extends Entity
{
    protected $attributes = [
        'id' => null,
        'name' => null,
        'email' => null,
        'password' => null,
        'createdAt' => null,
    ];

    protected $datamap = [
        'full_name' => 'name',
        'createdAt' => 'created_at'
    ];
}