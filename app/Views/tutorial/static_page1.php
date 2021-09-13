<?= view_cell('\App\Libraries\Tabler::iframeTabs', [
    [
        'id' => 'tabsStep1Source',
        'title' => '컨트롤러',
        'href' => '/sample/home/view/Controllers/Tutorial/Step1',
    ],
    [
        'id' => 'tabsStep1',
        'title' => '실행결과',
        'href' => '/tutorial/step1',
    ],
    [
        'id' => 'tabsStep1ViewSource',
        'title' => '뷰',
        'href' => '/sample/home/view/Views/welcome_message',
    ],
    [
        'id' => 'tabsStep1Guide',
        'title' => '메뉴얼',
        'href' => 'http://ci4doc.cikorea.net/tutorial/static_pages.html#id1',
    ],
]) ?>
