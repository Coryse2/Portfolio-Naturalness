<?= view('layout/header'); ?>

<div class="presentation-list">
  <ul>
    <!-- Recipes list -->
    <?php foreach ($recipes as $recipe) : ?>
      <div class="card border-primary mb-3">
        <div class="card-header"><a href="<?= route('recipe_showRecipe', ['id' => $recipe->id]); ?>"><?= $recipe->name; ?></a></div>
        <div class="card-body">
          <h4 class="card-title">
            <img class="images" src="<?= url('images/parc.jpg'); ?>" alt="Card image">
          </h4>
        </div>
      </div>
    <?php endforeach; ?>
    <!-- End recipes list -->
  </ul>

</div>
<?= view('layout/footer'); ?>