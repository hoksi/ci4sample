<?php
namespace App\Controllers\Routing;

use App\Controllers\BaseController;

/**
 * Description of Blogs
 *
 * @author hoksi
 */
class Blogs extends BaseController
{
    public function index()
    {
        echo '첫 번째 세그먼트에 “journals”라는 단어가 포함된 URL은 “AppBlogs” 클래스의 기본 메소드인 index()로 매핑됩니다.';
    }

    public function users($id)
    {
        echo '“blog/joe” 세그먼트가 포함된 URL은 “Blogs” 클래스의 “users” 메소드로 매핑됩니다. ID는 “' . $id . '”로 설정됩니다.';
    }
}