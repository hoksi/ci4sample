<?php
namespace App\Controllers\Response\Parser;

use App\Controllers\BaseController;

/**
 * Description of Exam4
 *
 * @author hoksi
 */
class Exam4 extends BaseController
{
    public function index()
    {
        helper('parser');
        
        $data = [
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
            'blog_entries' => [
                ['title' => 'Title 1', 'body' => 'Body 1'],
                ['title' => 'Title 2', 'body' => 'Body 2'],
                ['title' => 'Title 3', 'body' => 'Body 3'],
                ['title' => 'Title 4', 'body' => 'Body 4'],
                ['title' => 'Title 5', 'body' => 'Body 5'],
            ],
        ];

        return parser('response/parser/exam4', $data);
    }
}