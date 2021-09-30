<html>
<head>
        <title><?= $title ?></title>
</head>
<body>
        <h1><?= $heading ?></h1>

        <h3>My Todo List</h3>

        <a href="/response/cell/cache">새로 고침</a>

        <ul>
            <li>캐시 지정 안함</li>
            <?= view_cell('\App\Libraries\CellBlog::recentPosts', 'limit=2') ?>
        </ul>

        <ul>
            <li>캐시 10초 지정</li>
            <?= view_cell('\App\Libraries\CellBlog::recentPosts', 'limit=3', 10) ?>
        </ul>

        <ul>
            <li>캐시 1분 지정</li>
            <?= view_cell('\App\Libraries\CellBlog::recentPosts', ['limit' => 10], 60, 'newcacheid') ?>
        </ul>
        
        <a href="/response/cell/cache">새로 고침</a>
</body>
</html>
