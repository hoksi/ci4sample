<?php
namespace App\Controllers\Routing;

use App\Controllers\BaseController;

/**
 * Description of Users
 *
 * @author hoksi
 */
class Users extends BaseController
{
    public function show($uuid)
    {
        echo '`addPlaceholder` 메소드를 사용하여 새로운 자리 표시자를 추가합니다. ';
        echo '첫 번째 매개 변수는 자리 표시자로 사용될 문자열입니다. 두 번째 매개 변수는 정규식 패턴입니다. ';
        echo '경로(route)를 추가하기 전에 호출해야 합니다<br/>';
        echo 'uuid : ' . $uuid;
    }

    public function profile()
    {
        echo "I am User::profile!";
    }
}