<?php

namespace App\Controllers\Tutorial;

use App\Models\Tutorial\News3Model;
use CodeIgniter\Controller;

/**
 * Tutorial of News3
 *
 * @author hoksi
 */
class News3 extends Controller
{

    public function index()
    {
        $model = new News3Model();

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
        $model = new News3Model();

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '.$slug);
        }

        $data['title'] = $data['news']['title'];

        echo view('tutorial/templates/header', $data);
        echo view('tutorial/news/view', $data);
        echo view('tutorial/templates/footer', $data);
    }

    public function create()
    {
        $model = new News3Model();

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body' => 'required',
            ])) {
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug' => url_title($this->request->getPost('title'), '-', true),
                'body' => $this->request->getPost('body'),
            ]);

            echo view('tutorial/news/success');
        } else {
            echo view('tutorial/templates/header', ['title' => 'Create a news item']);
            echo view('tutorial/news/create');
            echo view('tutorial/templates/footer');
        }
    }
}