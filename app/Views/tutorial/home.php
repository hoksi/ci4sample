<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

        <?= tabler_page_title('Tutorial') ?>
        
        <div class="page-body">
          
          <?= view('tutorial/static_page1') ?>

          <?= view('tutorial/static_page2') ?>

          <?= view('tutorial/news1') ?>

          <?= view('tutorial/news2') ?>

          <?= view('tutorial/news3') ?>

        </div>
</div>
<?= $this->endSection() ?>