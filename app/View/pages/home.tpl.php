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
                <div class="col-sm-12 col-sm-6 col-lg-8 mt-2">
                    <input id="search" name="search" class="form-control me-2" type="search"
                           value="<?= $viewData['data_url']['search'] ?? "" ?>" placeholder="Rechercher un film ou série"
                           aria-label="Rechercher un film ou série">
                </div>
                <div class="col-sm-12 col-sm-6 col-lg-3 mt-2">
                    <select id="type" name="type" class="form-control me-2">
                        <option value="multi">Tout</option>
                        <option value="tv">Série TV</option>
                        <option value="movie">Film</option>
                    </select>
                </div>

                <div class="col-sm-12 col-sm-6 col-lg-1 mt-2">
                    <button class="btn btn-success w-100" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once __DIR__ . './../global/footer.tpl.php' ?>
</body>
</html>