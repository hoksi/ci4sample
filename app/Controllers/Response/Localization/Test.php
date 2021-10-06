<?php
namespace App\Controllers\Response\Localization;

use App\Controllers\BaseController;

/**
 * Description of Test
 *
 * @author hoksi
 */
class Test extends BaseController
{
    public function index()
    {
        echo lang('Test.apples', [ 3 ]);
    }

    public function arrayIndex()
    {
        echo '<p>자리 표시자의 첫 번째 항목이 숫자인 경우 배열의 항목 색인에 해당합니다.</p>';
        echo lang('Test.men', [20, 23]);
    }

    public function namedIndex()
    {
        echo '<p>원하는 경우 이름으로 지정된 키를 사용하여 작업을 쉽게할 수 있습니다.</p>';
        echo lang("Test.namedApples", ['number_apples' => 3]);
    }
}