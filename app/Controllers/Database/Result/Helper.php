<?php
namespace App\Controllers\Database\Result;

use App\Controllers\BaseController;

/**
 * Description of Helper
 *
 * @author hoksi
 */
class Helper extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $query = $db->table('my_table')->get();

        echo '<h2>getFieldCount()</h2>';
        echo '<p>쿼리에서 반환한 FIELDS(컬럼)의 갯수 입니다. 쿼리 결과(result) 객체를 사용하여 메소드를 호출해야 합니다.</p>';

        echo $query->getFieldCount();

        echo '<h2>getFieldNames()</h2>';
        echo '<p>쿼리에서 반환한 FIELDS(컬럼)의 이름을 가진 배열을 반환합니다. 쿼리 결과(result) 객체를 사용하여 메소드를 호출해야 합니다.</p>';

        echo '<pre>';
        print_r($query->getFieldNames());
        echo '</pre>';

        echo '<h2>getNumRows()</h2>';
        echo '<p>쿼리로 반환된 레코드 수입니다. 쿼리 결과 객체(object)를 사용하여 메소드를 호출해야 합니다.</p>';

        echo $query->getNumRows();

        echo '<h2>dataSeek()</h2>';
        echo '<p>이 메소드는 다음 결과 행에 대한 내부 포인터를 페치하도록 설정합니다. getUnbufferedRow()와 함께 사용할 때 유용합니다.</p>';
        echo '<p>양의 정수 값만 사용할 수 있으며, 기본값은 0입니다. 성공하면 TRUE, 실패하면 FALSE를 반환합니다.</p>';

        echo '<pre>';
        try {
            $query->dataSeek(2);
            $row = $query->getUnbufferedRow();
            print_r($row);
        } catch(\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            echo '* Error : ' . $e->getMessage();
        }
        echo '</pre>';

        echo '<h2>freeResult()</h2>';
        echo '<p>결과(result)와 연관된 메모리를 비우고 결과 자원(resource) ID를 삭제합니다. 일반적으로 PHP는 스크립트 실행이 끝날때 자동으로 메모리를 비웁니다.</p>';
        echo '<p>그러나 특정 스크립트에서 많은 쿼리를 실행하는 경우, 메모리 소비를 줄이기 위해 각 쿼리 결과가 생성된 후 결과를 해제할 수 있습니다.</p>';

        $query->freeResult();

        $query2 = $db->table('my_table')->get();

        echo '<pre>';
        print_r($query2->getRow());
        echo '</pre>';

        $query2->freeResult();
    }
}