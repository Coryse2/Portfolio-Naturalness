<?= view('layout/header'); ?>


<div class="card mb-3">
    <h3 class="card-header"><?= $recipe->name; ?></h3>
    <div class="recipe">
    <div class=" card-body">
        <h5 class="card-text">Durée de conservation : <?= $recipe->shelf_life ; ?></h5>
    
    <?php if ($userIsConnected) : ?>
        <button type="button" class="pdf-btn btn btn-primary"> <a href="<?= route('recipepdf', ['id' => $recipe->id]); ?>">Enregistrer en PDF</a></button>
    <?php endif ; ?>
        <br>
    <img class="images" src="<?= url('images/parc.jpg'); ?>" alt="Card image">

        <p class=" card-text"><?= $recipe->explanation; ?></p>
  

    <!-- Liste des composants -->
    <ul class="list-group">
        <?php foreach ($recipe->components as $component) : ?>

            <li class="list-item"> <?= $component->name; ?> : <?= $component->amount; ?> </li>
            <li class="recipe-comment list-item"> <?= $component->comment; ?> </li>

        <?php endforeach; ?>
    </ul>
    <!-- End Liste des composants -->
   <br>
        <p> Catégorie de produit : <a href="<?= route('category_showCategory', ['id' => $category->id]); ?>" class="card-link">  <?= $category->name; ?> </a> </p>
    </div>

</div>
<?= view('layout/footer'); ?>