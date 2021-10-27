<?php
namespace App\Controllers\Refactoring\Capsulation;

use App\Controllers\BaseController;

/**
 * Description of Exam1
 *
 * @author hoksi
 */
class Exam1 extends BaseController
{
    public function index()
    {
        $organization = ['name' => '홍길동', 'country' => 'KR'];
        $result = "[h1]{$organization['name']}[/h1]";
        $organization['name'] = '김삿갓';

        echo '<pre>';
        echo "result : {$result}\n";
        echo "organization : " . print_r($organization, true) . "\n";
        echo '</pre>';
    }
}