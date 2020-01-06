<?= view('layout/header'); ?>

<div class="presentation-list">
<ul>
  <!-- Liste des catégories -->
  <?php foreach ($categories as $category) : ?>
    <div class="card recipes border-primary mb-3" style="max-width: 20rem;">
      <div class="card-header"><a href="<?= route('category_showCategory', ['id' => $category->id]); ?>"><?= $category->name; ?></a></div>
      <div class="card-body">
      <p><?php $extract = $category->text; ?>
        <?= substr($extract, 0, 50) . "..."; ?></p>
        <h4 class="card-title"> <img class="images" src="<?= url('images/parc.jpg'); ?>" alt="Card image"></h4>
      </div>
    </div>

  <?php endforeach; ?>
  <!-- End Liste des catégories -->
</ul>
</div>
<?= view('layout/footer'); ?>