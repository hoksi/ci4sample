<?php
namespace App\Models\Model\Cimodel;

use CodeIgniter\Model;

/**
 * Description of MyTableModel
 *
 * @author hoksi
 */
class MyTableModel extends Model
{
    public function initialize()
    {
        /*
         * initialize() 함수에서 속성 정의시 에디터의 자동완성 기능의 도움을 받을수 있습니다.
         */
        $this->table = 'my_table'; // 테이블 지정
        $this->primaryKey = 'idx'; // primary key 지정
        $this->allowedFields = ['name', 'title', 'email']; // insert, update 시 사용할 컬럼 지정
    }
}