<?= view('layout/header'); ?>


<div class="form">

    <div class="sign card-header">
      <fieldset>
        <legend>Contact</legend>

        <br>
        <div class="form-group">
          <form action="" method="post">
            <div class="form-group">
              <label for="name">Nom :</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Votre adresse email ne sera pas partagée</small>
            </div>
            <div class="form-group">
              <label for="exampleSelect2">Votre demande</label>
              <select class="form-control" id="exampleSelect2">
                <option>Question sur une recette</option>
                <option>Suppression de compte</option>
                <option>Proposition de recette</option>
                <option>Question sur le matériel</option>
                <option>Autre</option>
              </select>
            </div>
            <div class="form-group">
              <label for="msg">Votre message</label>
              <textarea class="form-control" id="msg" rows="5"></textarea>
            </div>
            <fieldset class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </div>
  </form>
</div>


<?= view('layout/footer'); ?>