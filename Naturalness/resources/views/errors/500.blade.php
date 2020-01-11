<?= view('layout/header'); ?>

<h4>Oups</h4>
    <h5>Cette page a retourné une erreur</h5>

    <h2>{{ $exception->getMessage() }}</h2>


<?= view('layout/footer'); ?>