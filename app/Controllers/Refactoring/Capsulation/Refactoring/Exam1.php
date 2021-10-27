<?php
namespace App\Controllers\Refactoring\Capsulation\Refactoring;

use App\Controllers\BaseController;

function getRawDataOfOrganization()
{
    return ['name' => '홍길동', 'country' => 'KR'];
}

/**
 * Description of Exam1
 *
 * @author hoksi
 */
class Exam1 extends BaseController
{
    public function index()
    {
        $organization = getRawDataOfOrganization();
        $result = "[h1]{$organization['name']}[/h1]";
        $organization['name'] = '김삿갓';

        echo '<pre>';
        echo "result : {$result}\n";
        echo "organization : " . print_r($organization, true) . "\n";
        echo '</pre>';
    }
}