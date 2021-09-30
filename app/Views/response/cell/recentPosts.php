<?php foreach ($posts as $post):?>
    <li><?= $post['rdate'] ?> <?= $post['title'] ?> : <?= $post['content'] ?></li>
<?php endforeach;?>