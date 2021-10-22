<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<table width="100%">
    <tr>
        <td>
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
            <?= $usersPager->links('group1') ?>
        </td>
        <td>
            <p>- 페이지 리스트</p>

            <ul>
                <?php foreach($pages as $page): ?>
                <li>
                    <?= $page['idx'] ?>
                    <?= $page['title'] ?>
                </li>
                <?php endforeach; ?>
            </ul>

            <p>- 페이지 링크</p>
            <?= $pagesPager->links('group2') ?>
        </td>
    </tr>
</table>
<?= $this->endSection() ?>