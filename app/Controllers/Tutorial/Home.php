<?php
namespace App\Controllers\Tutorial;

/**
 * Tutorial Home
 *
 * @author hoksi
 */
class Home extends \App\Controllers\BaseController
{
    protected $menuInfo = [
        'title' => 'Tutorial',
        'location' => 'tutorial',
        'menu' => 'tutorial',
    ];

    public function index()
    {
        return $this->page();
    }
    
    public function page()
    {
        $this->menuInfo['menu'] = 'page';

        return view('tutorial/home', $this->menuInfo);
    }

    public function news()
    {
        $this->menuInfo['menu'] = 'news';

        return view('tutorial/home', $this->menuInfo);
    }
}