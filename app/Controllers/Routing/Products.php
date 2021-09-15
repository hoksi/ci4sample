<?php
namespace App\Controllers\Routing;

use App\Controllers\BaseController;

/**
 * Description of Products
 *
 * @author hoksi
 */
class Products extends BaseController
{
    public function show($first, $second)
    {
        echo '역 참조를 사용하는 경우 이중 백 슬래시 구문 대신 달러($) 구문을 사용해야합니다.<br/>';
        echo '이 예에서, products/shirts/123과 유사한 URI는 Products 컨트롤러 클래스의 show 메소드를 호출하고 세그먼트가 첫 번째 및 두 번째 세그먼트가 인수로 전달됩니다.<br/>';
        
        echo "first = {$first}<br/>";
        echo "second = {$second}";
    }

    public function login($user_id)
    {
        echo '정규 표현식을 사용하면 일반적으로 여러 세그먼트 사이의 구분 기호를 나타내는 슬래시(‘/’)가 포함된 세그먼트를 잡을 수도 있습니다.<br/>';
        echo '사용자가 웹 어플리케이션의 비밀번호로 보호된 영역에 액세스하고 로그인한 후 동일한 페이지로 다시 리디렉션하려는 경우 이 예제가 유용할 수 있습니다.<br/>';

        echo "user_id = {$user_id}";
    }
}