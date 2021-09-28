<?php
namespace App\Controllers\Filters;

use App\Controllers\BaseController;

/**
 * Description of Login
 *
 * @author hoksi
 */
class Login extends BaseController
{
    public function index()
    {
        return 'Login이 필요합니다.<br/><a href="/myredirect">Reload</a>';
    }

    public function welcome()
    {
        return 'Welcome!<br/><a href="/myredirect">Reload!</a>';
    }

    public function hello()
    {
        return '<h1>Hello login</h1>';
    }
}