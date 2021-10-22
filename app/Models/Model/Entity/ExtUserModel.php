<?php

namespace App\Models\Model\Entity;

use CodeIgniter\Model;

/**
 * Description of ExtUserModel
 *
 * @author hoksi
 */
class ExtUserModel extends Model
{
    protected $table         = 'user';
    protected $primaryKey    = 'idx';
    protected $allowedFields = [
        'name', 'email', 'password',
    ];
    // returnType에 Entity 클래스를 지정합니다.
    protected $returnType = 'App\Entities\ExtUserEntity';
    protected $useTimestamps = true;
    protected $updatedField = '';
}