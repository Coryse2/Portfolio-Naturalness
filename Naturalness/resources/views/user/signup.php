<?= view('layout/header'); ?>
<!-- Si j'ai des erreurs je les affiches -->
<?php if (!empty($errorList)) : ?>
    <div class="row">
        <!-- Je boucle sur chaque erreur -->
        <?php foreach ($errorList as $currentError) : ?>
            <?= $currentError ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<div class="row">

    <form action="" method="post">
    <div class="sign">
  <fieldset>
    <legend>Inscription</legend>
    <p>Pour proposer des recettes ou les télécharger en pdf vous devez être connecté.
     Si vous n'avez pas encore de compte vous pouvez-vous inscrire en remplissant ce formulaire.</p>
    <p><em>Vos données ne seront pas partagées, vous pouvez demander leur suppression à tout moment en contactant l'adminsitrateur du site.</em></p>
    <a class="nav-link" href="<?= route('contact_contact'); ?>">Contacter l'administrateur</a></li>

    <br>
   
      <label for="username">Nom d'utilisateur</label>
      <input type="text" class="form-control" id="username" name="username" >
   
    <div class="form-group">
      <label for="email">Adresse email </label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" >
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    
    <div class="form-group">
    <label for="password_confirm">Confirmer le mot de passe</label>
    <input type="password" class="form-control"  id="password_confirm" name="password_confirm">
  </div>

   
    <fieldset class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</div>
</form>
</div>


<?= view('layout/footer'); ?>