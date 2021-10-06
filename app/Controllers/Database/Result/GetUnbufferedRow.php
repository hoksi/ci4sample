<?php
namespace App\Controllers\Database\Result;

use App\Controllers\BaseController;

/**
 * Description of GetUnbufferedRow
 *
 * @author hoksi
 */
class GetUnbufferedRow extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $query = $db->table('my_table')->get();

        echo '<p>이 메소드는 `getRow()`와 같이 메모리에서 전체 결과를 로드 하지 않고, 단일 결과 행을 반환합니다. 쿼리에 둘 이상의 행이 있으면 현재 행을 반환하고 내부 데이터 포인터를 앞으로 이동합니다.</p>';

        echo '<pre>';
        while ($row = $query->getUnbufferedRow()) {
            print_r($row);
        }
        echo '</pre>';

        echo '<p>반환된 값의 유형을 지정하기 위해 선택적으로 ‘object’(기본값) 또는 ‘array’를 전달할 수 있습니다.</p>';
        
        echo '<pre>';
        print_r($query->getUnbufferedRow());
        print_r($query->getUnbufferedRow('object'));
        print_r($query->getUnbufferedRow('array'));
        echo '</pre>';
    }
}