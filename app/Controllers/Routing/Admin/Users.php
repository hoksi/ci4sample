<?php
namespace App\Controllers\Routing\Admin;

use App\Controllers\BaseController;

/**
 * Description of Users
 *
 * @author hoksi
 */
class Users extends BaseController
{
    public function index()
    {
        echo "I am Admin\\Users::index";
    }

    public function list()
    {
        !d([
            'User1',
            'User2',
        ]);
    }
}