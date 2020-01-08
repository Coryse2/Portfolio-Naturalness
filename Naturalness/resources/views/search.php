<?= view('layout/header'); ?>

<div class="head-search card-header ">
    <h4> Votre recherche : "<?= $q; ?>"</h4>

</div>

<div class="body-search">
    <h4> Résultats de votre recherche : </h4>
    <!-- verify is arrayCollection of search results is empty or not -->

    <?php if ($collection == 0) : ?>
        <!-- if no results echo informative message-->
        <?= "Il n'y a pas de résultat";  ?>

    <?php else : ?>
        <!-- give the search results  -->
        <ul><br>
            <?php foreach ($recipes as $recipe) :  ?>
                <li>
                    <a href="<?= route('recipe_showRecipe', ['id' => $recipe->id]); ?>">
                        <h5 class="text-success"> <?= $recipe->name; ?> </h5>
                    </a>
                </li>
            <?php endforeach; ?>
            <?php foreach ($components as $component) :  ?>
                <li>
                    <h5 class="text-success"> <?= $component->name; ?> </h5>
                </li>
            <?php endforeach; ?>
            <?php foreach ($materials as $material) :  ?>
                <li>
                    <a href="<?= route('material'); ?>">
                        <h5 class="text-success"> <?= $material->name; ?> </h5>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
<?= view('layout/footer'); ?>