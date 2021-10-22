<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
    <p>* default</p>
    <pre class="prettyprint">$default->makeLinks(<?= $defaultPage ?>, <?= $perPage ?>, <?= $total ?>, '<?= $template ?>', <?= $segment ?>);</pre>
    <?= $default->makeLinks($defaultPage, $perPage, $total, $template, $segment) ?>

    <p>* group1</p>
    <pre class="prettyprint">$group1->makeLinks(<?= $group1Page ?>, <?= $perPage ?>, <?= $total ?>, '<?= $template ?>', <?= $segment ?>, 'group1');</pre>
    <?= $group1->makeLinks($group1Page, $perPage, $total, $template, $segment, 'group1') ?>

    <p>* group2</p>
    <pre class="prettyprint">$group2->makeLinks(<?= $group2Page ?>, <?= $perPage ?>, <?= $total ?>, '<?= $template ?>', <?= $segment ?>, 'group2');</pre>
    <?= $group2->makeLinks($group2Page, $perPage, $total, $template, $segment, 'group2') ?>
<?= $this->endSection() ?>