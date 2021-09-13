<div class="container-xl">
  <div class="row row-cards">
    <div class="col-md-12">
      <div class="card">
        <ul class="nav nav-tabs" data-bs-toggle="tabs">
          <?php foreach($tabData as $idx => $item): ?>
          <li class="nav-item">
            <a href="#<?= $item['id'] ?>" class="nav-link <?= ($idx == 0 ? 'active' :'') ?>" data-bs-toggle="tab"><?= $item['title'] ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
        <div class="card-body">
          <div class="tab-content">
            <?php foreach($tabData as $idx => $item): ?>
            <div class="tab-pane <?= ($idx == 0 ? 'active' :'') ?> show" id="<?= $item['id'] ?>">
                <div>
                    <iframe src="<?= $item['href'] ?>" width="100%" height="400" id="ifrm-<?= $item['id'] ?>"></iframe>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>