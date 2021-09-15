<?php
namespace App\Controllers\Routing;

use App\Controllers\BaseController;

/**
 * Description of Catalog
 *
 * @author hoksi
 */
class Catalog extends BaseController
{
    public function productLookup()
    {
        echo '첫 번째 세그먼트가 “product”이고 두 번째 세그먼트가 있는 URL은 “Catalog” 클래스의 “productLookup” 메소드로 매핑됩니다.';
    }

    public function productLookupByID($id)
    {
        echo '첫 번째 세그먼트가 “product”이고 두 번째로 숫자가 있는 URL은 “Catalog” 클래스의 “productLookupByID” 메소드로 매핑되고, 두 번째 세그먼트의 숫자를 메소드 변수에 전달합니다.<br/>';
        echo '$id = ' . $id;
    }

    public function productLookup2($seg1 = false, $seg2 = false, $seg3 = false)
    {
        echo '하나의 (:any)가 있는 경우 URL의 여러 세그먼트와 일치합니다.<br>';
        echo $seg1; // Will be 123 in all examples
        echo $seg2; // false in first, 456 in second and third example
        echo $seg3; // false in first and second, 789 in third
    }

    public function productLookup3($seg1 = false, $seg2 = false, $seg3 = false)
    {
        echo '여러 세그먼트를 일치시키는 것이 의도된 동작이 아니라면 경로를 정의할 때 (:segment)를 사용합니다.<br>';
        echo $seg1; // Will be 123 in all examples
        echo $seg2; // false in first, 456 in second and third example
        echo $seg3; // false in first and second, 789 in third
    }
}