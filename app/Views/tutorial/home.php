<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Tutorial
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          
          <?= view('tutorial/static_page1') ?>

          <?= view('tutorial/static_page2') ?>

          <?= view('tutorial/news1') ?>

          <?= view('tutorial/news2') ?>

          <?= view('tutorial/news3') ?>

        </div>
<?= $this->endSection() ?>