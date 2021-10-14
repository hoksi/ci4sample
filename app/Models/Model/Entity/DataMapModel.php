<?php
namespace App\Models\Model\Entity;

use CodeIgniter\Model;

/**
 * Description of DataMapModel
 *
 * @author hoksi
 */
class DataMapModel extends Model
{
    protected $table         = 'user';
    protected $primaryKey    = 'idx';
    protected $allowedFields = [
        'name', 'email', 'password',
    ];
    // returnType에 Entity 클래스를 지정합니다.
    protected $returnType = 'App\Entities\DataMapEntity';
    protected $useTimestamps = true;
    protected $updatedField = '';
}