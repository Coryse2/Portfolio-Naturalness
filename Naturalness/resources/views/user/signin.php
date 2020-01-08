<?php require __DIR__ . '/../layout/header.php'; ?>

<h1></h1>

<div class="user-form row justify-content-center">

    <?php if (!empty($errorList)) : ?>
        <?php foreach ($errorList as $error_msg) : ?>

            <p><?= $error_msg; ?></p>

        <?php endforeach; ?>
    <?php endif; ?>


    <div class="col-12 col-md-4 ">
        <div class="card">
            <div class="card-header">Se connecter</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="" value="<?= isset($email) ? $email : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Valider</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php require __DIR__ . '/../layout/footer.php'; ?>