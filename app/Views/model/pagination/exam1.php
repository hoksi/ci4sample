<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<p>- 사용자 리스트</p>

<ul>
    <?php foreach($users as $user): ?>
    <li>
        <?= $user['idx'] ?>
        <?= $user['name'] ?>
    </li>
    <?php endforeach; ?>
</ul>

<p>- 페이지 링크</p>
<?= $pager->links() ?>

<p>- Simple 페이지 링크</p>
<?= $pager->simpleLinks() ?>

<?= $this->endSection() ?>

