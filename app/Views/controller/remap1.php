<?= tabler_iframe_tabs([
    [
        'id' => 'tabsRemap1CtrlSource',
        'title' => '컨트롤러',
        'href' => '/sample/home/view/Controllers/Controller/Remap1',
    ],
    [
        'id' => 'tabsRemap1',
        'title' => 'default',
        'href' => '/controller/remap1',
    ],
    [
        'id' => 'tabsRemap1SomeMethod',
        'title' => 'some_method',
        'href' => '/controller/remap1/some_method',
    ],
    [
        'id' => 'tabsRemap1Guide',
        'title' => '메뉴얼',
        'href' => 'http://ci4doc.cikorea.net/incoming/controllers.html#id4',
    ],
]) ?>