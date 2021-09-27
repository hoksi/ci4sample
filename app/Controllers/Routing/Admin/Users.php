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
        print_r([
            'User1',
            'User2',
        ]);
    }
}