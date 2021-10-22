<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
    <pre class="prettyprint">$pager->makeLinks(<?= $page ?>, <?= $perPage ?>, <?= $total ?>);</pre>
    <?= $pager->makeLinks($page, $perPage, $total) ?>
    
    <p>
        네 번째 매개 변수를 이용하여 페이지네이션에 사용되는 템플릿를 변경할 수 있습니다.
    </p>
    <pre class="prettyprint">$pager->makeLinks(<?= $page ?>, <?= $perPage ?>, <?= $total ?>, '<?= $template ?>');</pre>
    <?= $pager->makeLinks($page, $perPage, $total, $template) ?>
<?= $this->endSection() ?>