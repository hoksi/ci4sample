<html>
<head>
        <title><?= $title ?></title>
</head>
<body>
        <h1><?= $heading ?></h1>

        <h3>My Todo List</h3>

        <ul>
        <?php foreach ($todo_list as $item):?>

                <li><?= $item ?></li>

        <?php endforeach;?>
        </ul>

</body>
</html>