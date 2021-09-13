<?= tabler_iframe_tabs([
    [
        'id' => 'tabsInvisibleCtrlSource',
        'title' => '컨트롤러',
        'href' => '/sample/home/view/Controllers/Controller/Invisible',
    ],
    [
        'id' => 'tabsInvisiblePublic',
        'title' => 'public hello1',
        'href' => '/controller/invisible/hello1',
    ],
    [
        'id' => 'tabsInvisibleProtected',
        'title' => 'protected hello2',
        'href' => '/controller/invisible/hello2',
    ],
    [
        'id' => 'tabsInvisiblePrivate',
        'title' => 'private hello3',
        'href' => '/controller/invisible/hello3',
    ],
    [
        'id' => 'tabsInvisibleGuide',
        'title' => '메뉴얼',
        'href' => 'http://ci4doc.cikorea.net/incoming/controllers.html#id4',
    ],
]) ?>