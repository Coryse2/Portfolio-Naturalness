<?= view('layout/header'); ?>


<ul class="d-flex">
  <!-- Liste des composants -->
  <?php foreach ($recipe->$component as $compo) : ?>
    <div class="card border-primary mb-3" style="max-width: 20rem;">
      <div class="card-header"><?= $compo->name; ?></div>
      <div class="card-body">
        <h4 class="card-title">TODO INSERT IMAGE</h4>
      </div>
    </div>

  <?php endforeach; ?>
  <!-- End Liste des recettes -->
</ul>
<?= view('layout/footer'); ?>