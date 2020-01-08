<?php require dirname(__DIR__) . '/layout/header.php'; ?>

<div class="user-form row justify-content-center account">
    <div class="card  col-md-4 ">

        <div class="card-header">
            <h2> Mon compte </h2>
        </div>


        <div class="card-body">
            Nom d'utilisateur : <?= $user->username; ?><br />
            Email: <?= $user->email; ?><br />
            Status:
            <?php if ($user->status == 0) : ?>
                <?= "utilisateur" ?>
            <?php else : ?>
                <?= "auteur" ?>
            <?php endif; ?>
        </div>
    </div>

    <?php require __DIR__ . '/../layout/footer.php'; ?>