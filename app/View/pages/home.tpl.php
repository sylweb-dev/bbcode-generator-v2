<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once __DIR__ . './../global/head.tpl.php' ?>
    <title>RapidPlace - Accueil</title>
</head>
<body>
<?php require_once __DIR__ . './../global/nav.tpl.php' ?>

<section class="my-3 container" id="find">
    <div class="card bg-dark">
        <div class="card-body">
            <form method="GET" action="/search" class="row pb-2">
                <div class="col-sm-12 col-sm-6 col-lg-11 mt-2">
                    <input id="search" name="search" class="form-control me-2" type="search"
                           placeholder="Rechercher un film ou série" aria-label="Rechercher un film ou série">
                </div>

                <div class="col-sm-12 col-sm-6 col-lg-1 mt-2">
                    <button class="btn btn-success w-100" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="my-3 container" id="list">
    <div class="card bg-secondary my-3" id="establishment">
        <div class="card-body">
            <div class="row d-flex flex-wrap justify-content-center">

                <?php
                if (isset($viewData['list'])) {
                    foreach ($viewData['list'] as $data) {
                        ?>

                        <div class="col-12 col-lg-3 col-sm-6 mb-3">
                            <div class="card h-100">
                                <img src="<?= $data->image ?>" alt="Image of <?= $data->title ?>" class="card-img-top img-fluid " style="width: 100%; height: 450px !important; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?= $viewData['router']->get()->generate('main-generate', ['id' => $data->id]) ?>"><?= $data->title ?></a></h5>
                                    <h6 class="card-subtitle text-muted"><?= $data->description ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php }

                } else {
                    ?>
                    <div class="col-12 col-sm-12 col-lg-12 mt-3">
                        <div class="alert alert-warning">Aucun résultats</div>
                    </div>
                    <?php
                } ?>

                <!-- <div class="col-12 col-sm-12 col-lg-12 mt-2">
                     <div class="d-grid gap-2">
                         <button class="btn btn-lg btn-dark" type="button">Voir plus</button>
                     </div>
                 </div> -->
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . './../global/footer.tpl.php' ?>
</body>
</html>