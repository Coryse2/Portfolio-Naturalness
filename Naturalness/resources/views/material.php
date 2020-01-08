<?= view('layout/header'); ?>

<div class="presentation-list">
  <ul>
    <!-- Tools list -->
    <?php foreach ($materialList as $material) : ?>

      <div class="materialcard card border-primary">
        <div class="card-header"><?= $material->name; ?></div>
        <div class="card-body">
          <li class="card-text"><?= $material->text; ?></li>
        </div>
      </div>
    <?php endforeach; ?>
    <!-- End Tools list -->
  </ul>

</div>
<?= view('layout/footer'); ?>