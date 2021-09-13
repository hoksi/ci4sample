<?php
namespace App\Controllers\Tutorial;

use App\Models\NewsModel;
use CodeIgniter\Controller;

/**
 * Tutorial of News1
 *
 * @author hoksi
 */
class News1 extends Controller
{
    public function index()
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews();
    }

    public function view($slug = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);
    }
}