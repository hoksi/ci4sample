<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
    <p>
        * default_full 템플릿
    </p>
    <pre class="prettyprint">$pager->makeLinks(<?= $page ?>, <?= $perPage ?>, <?= $total ?>);</pre>
    <?= $pager->makeLinks($page, $perPage, $total) ?>
    
    <p>
        * tabler_full 템플릿
    </p>
    <pre class="prettyprint">$pager->makeLinks(<?= $page ?>, <?= $perPage ?>, <?= $total ?>, '<?= $template ?>');</pre>
    <?= $pager->makeLinks($page, $perPage, $total, $template) ?>
<?= $this->endSection() ?>