<?php

namespace App\Controllers\Tutorial;

use App\Models\Tutorial\NewsModel;
use CodeIgniter\Controller;

/**
 * Tutorial of News2
 *
 * @author hoksi
 */
class News2 extends Controller
{

    public function index()
    {
        $model = new NewsModel();

        $data = [
            'news' => $model->getNews(),
            'title' => 'News archive',
        ];

        echo view('tutorial/templates/header', $data);
        echo view('tutorial/news/overview', $data);
        echo view('tutorial/templates/footer', $data);
    }

    public function view($slug = null)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '.$slug);
        }

        $data['title'] = $data['news']['title'];

        echo view('tutorial/templates/header', $data);
        echo view('tutorial/news/view', $data);
        echo view('tutorial/templates/footer', $data);
    }
}