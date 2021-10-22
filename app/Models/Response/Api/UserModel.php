<?php
namespace App\Models\Response\Api;

use CodeIgniter\Model;

/**
 * Description of UserModel
 *
 * @author hoksi
 */
class UserModel extends Model
{
        protected $table = 'my_table_tmp_1'; // 테이블 지정
        protected $primaryKey = 'idx'; // primary key 지정
        protected $allowedFields = ['name', 'title', 'email']; // insert, update 시 사용할 컬럼 지정
}