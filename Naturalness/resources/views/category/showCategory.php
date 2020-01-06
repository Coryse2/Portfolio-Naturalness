<?= view('layout/header'); ?>



<h2><?= $category->name; ?></h2>
<p><?= $category->text; ?></p>


<ul class="d-flex">
  <!-- Liste des catégories -->
  <?php foreach ($category->recipes as $recipe) : ?>
    <div class="card border-primary mb-3" style="max-width: 20rem;">
      <div class="card-header"><a href="<?= route('recipe_showRecipe', ['id' => $recipe->id]); ?>"><?= $recipe->name; ?></a></div>
      <div class="card-body">
        <?php $extract = $recipe->explanation; ?>
        <?= substr($extract, 0, 50) . "..."; ?>
        <h4 class="card-title"> <img class="images" src="<?= url('images/parc.jpg'); ?>" alt="Card image"></h4>
      </div>
    </div>

  <?php endforeach; ?>
  <!-- End Liste des catégories -->
</ul>

<?= view('layout/footer'); ?>