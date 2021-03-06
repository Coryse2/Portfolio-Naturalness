<?php
// setting the cookie will permit to let the warning closed if the visitor has already seen it
$cookie_name = "cookie";
$cookie_value = "Naturalness";
setcookie('cookie', 'Naturalness', time() + 365 * 24 * 3600);
?>
<?= view('layout/header'); ?>
<main>

  <div class="home">
    <div class="jumbotron">
      <h1 class="home-title display-3">Naturalness</h1>
      <h2 class="home-subtitle">Faire ses soins n'a jamais été aussi facile!</h2>
      <hr class="my-4">
    </div>
  </div>
  <p class="home-intro lead"> Vous trouverez ici des recettes de soins testées et réalisées par nos rédacteurs.</p>
  </p>

  <ul class="Intro">
    <h3>Pourquoi les soins maison? </h3>
    <!-- Reasons lists -->
    <?php foreach ($reasonList as $reason) : ?>
      <li><svg class="bi bi-bookmark" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10 14l5 3V5a2 2 0 00-2-2H7a2 2 0 00-2 2v12l5-3zm-4 1.234l4-2.4 4 2.4V5a1 1 0 00-1-1H7a1 1 0 00-1 1v10.234z" clip-rule="evenodd" />
        </svg>
        <?= $reason->text; ?>
      </li>
    <?php endforeach; ?>
  </ul>
  </div>

<!-- This warning is used to catch the attention on the alert message. After the close event , the message will still be visible but only as a paragraph-->
  <div class="alert alert-dismissible alert-danger">
    <button type="submit" class="close
<?php if (isset($_COOKIE[$cookie_name])) : ?><?= "inactive"; ?><?php endif; ?> " data-dismiss="alert" id='button'>&times;</button>

    <h4 class="alert-heading">Warning!</h4>
    <p class="mb-0">Les huiles essentielles sont à utiliser avec précaution. L'usage de la plupart d'entre elles est déconseillé aux femmes enceintes et aux enfants. </p>
    <p><a class="link" href="http://cap.chru-lille.fr/GP/magazines/111380.html">Notions importantes (source @CHRU de Lille)</a></p>
  </div>


  <div class="presentation-list">
    <ul>
      <!-- Categories list-->
      <?php foreach ($categoryList as $category) : ?>

        <div class="card border-primary ">
          <div class="card-header">
            <li><a href="<?= route('category_showCategory', ['id' => $category->id]); ?>"><?= $category->name; ?></a>
          </div>
          </li>
          <div class="card-body">
            <h4 class="card-title">A propos...</h4>
            <li class="card-text"><?= $category->text; ?></li>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- End Categories list -->
    </ul>
  </div>

</main>

<?= view('layout/footer'); ?>