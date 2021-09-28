<?php
namespace App\Controllers\Incomming;

use CodeIgniter\Controller;

/**
 * Description of UserController
 *
 * @author hoksi
 */
class UserController extends Controller
{
    public function index()
    {
        !d($this->request->isAJAX());
    }
}