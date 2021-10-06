<?php
namespace App\Controllers\Database\Result;

use App\Controllers\BaseController;

/**
 * Description of GetResult
 *
 * @author hoksi
 */
class GetResult extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $query = $db->table('my_table')->get();

        echo '<p>`getResult()`는 쿼리 결과를 objects의 배열로 반환하고, 실패시는 빈 배열을 반환합니다.</p>';
        echo '<ul>';
        foreach ($query->getResult() as $row) {
            echo '<li>';
            echo $row->title;
            echo ' - ';
            echo $row->name;
            echo ' - ';
            echo $row->email;
            echo '</li>';
        }
        echo '</ul>';

        echo '<p>이 메소드는 `getResultObject()`의 별칭입니다.</p>';
        echo '<ul>';
        foreach ($query->getResultObject() as $row) {
            echo '<li>';
            echo $row->title;
            echo ' - ';
            echo $row->name;
            echo ' - ';
            echo $row->email;
            echo '</li>';
        }
        echo '</ul>';
    }

    public function array()
    {
        $db = db_connect();

        $query = $db->table('my_table')->get();

        echo '<p>결과를 배열로 얻으려면 `getResult("array")`와 같이 하면됩니다..</p>';
        echo '<ul>';
        foreach ($query->getResult('array') as $row) {
            echo '<li>';
            echo $row['title'];
            echo ' - ';
            echo $row['name'];
            echo ' - ';
            echo $row['email'];
            echo '</li>';
        }
        echo '</ul>';

        echo '<p>`getResult("array")`는 `getResultArray()`의 별칭입니다.</p>';
        echo '<ul>';
        foreach ($query->getResultArray() as $row) {
            echo '<li>';
            echo $row['title'];
            echo ' - ';
            echo $row['name'];
            echo ' - ';
            echo $row['email'];
            echo '</li>';
        }
        echo '</ul>';
    }

    public function custom()
    {

        $db = db_connect();

        $query = $db->table('my_table')->get();

        echo '<p>`getResult()`의 각 결과 객체에 대해 인스턴스화 할 클래스를 나타내는 문자열을 전달할 수도 있습니다.</p>';
        echo '<ul>';
        foreach ($query->getResult('\App\Controllers\Database\Result\User') as $row) {
            echo '<li>';
            echo $row->name;
            echo ' - ';
            echo $row->reverseName();
            echo ' - ';
            echo $row->email;
            echo '</li>';
        }
        echo '</ul>';

        echo '<p>이 사용법은 ``getCustomResultObject()``의 별칭입니다.</p>';
        echo '<ul>';
        foreach ($query->getCustomResultObject('\App\Controllers\Database\Result\User') as $row) {
            echo '<li>';
            echo $row->name;
            echo ' - ';
            echo $row->reverseName();
            echo ' - ';
            echo $row->email;
            echo '</li>';
        }
        echo '</ul>';
    }
}