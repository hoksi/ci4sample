<?php
namespace App\Controllers\Database\Queries;

use App\Controllers\BaseController;

/**
 * Description of Prepare
 *
 * @author hoksi
 */
class Prepare extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $pQuery = $db->prepare(function ($db) {
            return $db->table('user')
                ->insert([
                    'name' => 'x',
                    'email' => 'y',
                    'country' => 'US'
            ]);
        });

        echo '<p>`getQueryString()` 메소드는 준비(prepared)된 쿼리를 문자열로 반환합니다.</p>';
        echo '<p>' . $pQuery->getQueryString() . '</p>';

        for($i = 1; $i <= 10; $i++) {
            $name    = 'test' . $i;
            $email   = 'test' . $i . '@test.com';
            $country = 'KR';

            $pQuery->execute($name, $email, $country);
        }

        echo '<p>PHP는 데이터베이스로 열린 모든 명령문을 닫는 작업을 꽤 잘 수행하지만, prepare 명령문을 완료하면 `close()` 메소드를 사용하여 닫는 것이 좋습니다</p>';
        $pQuery->close();

        $query = $db->table('user')->get();

        echo '<pre>';
        print_r($query->getResult());
        echo '</pre>';

        $db->table('user')->truncate();
    }
}