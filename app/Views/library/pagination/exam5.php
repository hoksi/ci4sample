<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<xmp class="prettyprint">$pager->makeLinks(<?= $page ?>, <?= $perPage ?>, <?= $total ?>);
// 페이지 링크 HTML
<?= $pager->makeLinks($page, $perPage, $total, $template) ?></xmp>


<p>
    `only()` 메소드를 사용하면 이를 필요한 항목만으로 제한할 수 있습니다.
</p>
<xmp class="prettyprint">$pager->only(['search', 'order'])->makeLinks(<?= $page ?>, <?= $perPage ?>, <?= $total ?>);
// 페이지 링크 HTML
<?= $pager->only(['search', 'order'])->makeLinks($page, $perPage, $total, $template) ?></xmp>

<?= $this->endSection() ?>