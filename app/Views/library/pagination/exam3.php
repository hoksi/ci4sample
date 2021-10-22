<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
    <pre class="prettyprint">$pager->makeLinks(<?= $page ?>, <?= $perPage ?>, <?= $total ?>, '<?= $template ?>', <?= $segment ?>);</pre>
    <?= $pager->makeLinks($page, $perPage, $total, $template, $segment) ?>
<?= $this->endSection() ?>