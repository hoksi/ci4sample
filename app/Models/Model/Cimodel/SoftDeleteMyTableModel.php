<?php
namespace App\Models\Model\Cimodel;

use CodeIgniter\Model;

/**
 * Description of MyTableTmpModel
 *
 * @author hoksi
 */
class SoftDeleteMyTableModel extends Model
{
    public function initialize()
    {
        /*
         * initialize() 함수에서 속성 정의시 에디터의 자동완성 기능의 도움을 받을수 있습니다.
         */
        $this->table = 'my_table_tmp_' . rand(0, 9); // 테이블 지정
        $this->primaryKey = 'idx'; // primary key 지정
        $this->allowedFields = ['name', 'title', 'email']; // insert, update 시 사용할 컬럼 지정
        $this->useSoftDeletes = true; // 논리 삭제(soft delete) 지정
        $this->dateFormat = 'int'; // dateFormat 지정

        $this->initData();
    }

    protected function initData()
    {
        $this->truncate(); // 임시 데이타 정리

        $now = time();

        $data = [];
        for($i = 1; $i <= 3; $i++) {
            $data[] = [
                'name' => 'name-' . $now . '-' . $i,
                'title' => 'title-' . $now . '-' . $i,
                'email' => 'email-' . $now . '-' . $i,
            ];
        }

        $this->insertBatch($data);
    }
}