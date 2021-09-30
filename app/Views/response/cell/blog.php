<html>
<head>
        <title><?= $title ?></title>
</head>
<body>
        <h1><?= $heading ?></h1>

        <h3>My Todo List</h3>

        <ul>
            <?= view_cell('\App\Libraries\CellBlog::recentPosts') ?>
        </ul>

        <h3>셀 매개 변수</h3>
        <p>뷰 셀의 두 번째 매개 변수에 매개 변수 목록을 전달하여 메소드 호출을 세분화할 수 있습니다.</p>

        <ul>
            <?= view_cell('\App\Libraries\CellBlog::recentPosts', ['category' => 'codeigniter', 'limit' => 5]) ?>
        </ul>
        
        <p>전달된 값은 키/값 쌍의 배열이거나 쉼표로 구분된 키/값 쌍의 문자열입니다.</p>

        <ul>
            <?= view_cell('\App\Libraries\CellBlog::recentPosts', 'category=codeigniter, limit=4') ?>
        </ul>

        <p>가독성을 높이기 위해 메소드의 매개 변수와 일치하는 매개 변수 이름을 사용할 수 있습니다.</p>

        <ul>
            <?= view_cell('\App\Libraries\CellBlog::recent', ['category' => 'codeigniter', 'limit' => 3]) ?>
        </ul>
        
        <p>이 방법을 사용하는 경우 모든 매개 변수는 항상 뷰 셀 호출에서 지정해야 합니다.</p>

        <ul>
            <?= view_cell('\App\Libraries\CellBlog::recent', 'limit=1, category=codeigniter') ?>
        </ul>
</body>
</html>
