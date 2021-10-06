<?php
namespace App\Controllers\Database\Result;

use App\Controllers\BaseController;

/**
 * Description of GetRow
 *
 * @author hoksi
 */
class GetRow extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $query = $db->table('my_table')->get();

        echo '<p>`getRow()`는 단일 결과 행을 반환합니다. 쿼리에 둘 이상의 행이 있으면 첫 번째 행만 반환합니다.</p>';
        $row = $query->getRow();
        echo '<ul>';
        echo '<li>';
        echo $row->title;
        echo ' - ';
        echo $row->name;
        echo ' - ';
        echo $row->email;
        echo '</li>';
        echo '</ul>';

        echo '<p>특정 행을 반환하려면 행 번호를 숫자로 `getRow(2)`와 같이 제출하십시오.</p>';
        $row = $query->getRow(2);

        echo '<ul>';
        echo '<li>';
        echo $row->title;
        echo ' - ';
        echo $row->name;
        echo ' - ';
        echo $row->email;
        echo '</li>';
        echo '</ul>';

        echo '<p>두 번째 매개 변수로 행을 인스턴스화할 클래스의 이름을 `getRow(0, "\App\Controllers\Database\Result\User")`와 같이 문자열로 추가할 수 있습니다. </p>';
        $row = $query->getRow(0, '\App\Controllers\Database\Result\User');
        echo '<ul>';
        echo '<li>';
        echo $row->name;
        echo ' - ';
        echo $row->reverseName();
        echo ' - ';
        echo $row->email;
        echo '</li>';
        echo '</ul>';
    }

    public function array()
    {
        $db = db_connect();

        $query = $db->table('my_table')->get();

        echo '<p>`getRowArray()`는 `getRow()` 메소드와 동일하지만 결과로 배열을 반환합니다.</p>';

        $row = $query->getRowArray();
        echo '<ul>';
        echo '<li>';
        echo $row['title'];
        echo ' - ';
        echo $row['name'];
        echo ' - ';
        echo $row['email'];
        echo '</li>';
        echo '</ul>';

        echo '<p>특정 행을 반환하려면 행 번호를 숫자로 전달합니다.</p>';

        $row = $query->getRowArray(2);
        echo '<ul>';
        echo '<li>';
        echo $row['title'];
        echo ' - ';
        echo $row['name'];
        echo ' - ';
        echo $row['email'];
        echo '</li>';
        echo '</ul>';
    }

    public function navi()
    {
        $db = db_connect();

        $query = $db->table('my_table')->get();

        echo '<p>결과를 “next/privous/first/last”로 검색할 수 있습니다.</p>';
        echo '<p style="color:red">이를 위해 전체 결과를 메모리에 로드합니다</p>';
        echo '<pre>';
        print_r($query->getFirstRow());
        print_r($query->getNextRow());
        print_r($query->getPreviousRow());
        print_r($query->getLastRow());
        echo '</pre>';

        echo '<p>“array”를 전달하면 결과를 배열로 반환합니다</p>';
        echo '<pre>';
        print_r($query->getFirstRow('array'));
        print_r($query->getNextRow('array'));
        print_r($query->getPreviousRow('array'));
        print_r($query->getLastRow('array'));
        echo '</pre>';
    }
}