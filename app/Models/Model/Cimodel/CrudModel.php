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
    protected $table      = 'my_table'; // 테이블명
    protected $primaryKey = 'idx'; // primary key 컬럼명

    protected $useAutoIncrement = true; // auto_increment 사용 여부

    protected $returnType = 'array'; // 검색 결과 반환 타입

    protected $allowedFields = ['name', 'email']; // insert, update 시 사용할 컬럼명
}