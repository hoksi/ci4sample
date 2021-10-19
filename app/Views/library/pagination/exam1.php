<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>

<p>- $pager1 페이지 링크</p>
<?= $pager1->makeLinks($page, 10, 100) ?>

<p>- $pager2 페이지 심플 링크</p>
<?= $pager2->makeLinks($page, 10, 100) ?>

<?= $this->endSection() ?>

