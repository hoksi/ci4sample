<?php
namespace App\Models\Model\Cimodel;

use CodeIgniter\Model;

/**
 * Description of CrudModel
 *
 * @author hoksi
 */
class CrudModel extends Model
{
    protected $table      = 'my_table';
    protected $primaryKey = 'idx';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}