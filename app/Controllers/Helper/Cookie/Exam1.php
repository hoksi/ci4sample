<?php

namespace App\Controllers\Helper\Cookie;

use App\Controllers\BaseController;

/**
 * Description of Exam1
 *
 * @author hoksi
 */
class Exam1 extends BaseController
{
    public function __construct()
    {
        helper('cookie');
    }
    
    public function index()
    {
        // 배열을 사용하여 쿠키를 설정합니다.
        set_cookie([
            'name' => 'Cookie_Name_Arr',
            'value' => 'Arr Value',
        ]);

        // 매개변수를 사용하여 쿠키를 설정합니다.
        set_cookie('Cookie_Name_Param', 'Param Value');

        return view('helper/cookie/exam1');
    }

    public function getCookie($show = false)
    {
        if($show === false) {
            return $this->response->redirect('/helper/cookie/exam1/getCookie/show');
        } else {
            echo '<pre>';

            print_r([
                "get_cookie('Cookie_Name_Arr')" => get_cookie('Cookie_Name_Arr'),
                "get_cookie('Cookie_Name_Param')" => get_cookie('Cookie_Name_Param'),
                "has_cookie('Cookie_Name_Arr')" => has_cookie('Cookie_Name_Arr'),
                "has_cookie('Cookie_Name_Param')" => has_cookie('Cookie_Name_Param'),
            ]);
        }
    }

    public function deleteCookie($show = false)
    {
        // 1초 대기후 쿠키 삭제
        sleep(1);
        
        delete_cookie('Cookie_Name_Arr');
        delete_cookie('Cookie_Name_Param');

        return $this->response->redirect('/helper/cookie/exam1/getCookie/show');
    }
}