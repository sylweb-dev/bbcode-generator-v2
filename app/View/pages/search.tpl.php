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
                    <select id="type" name="type" class="form-control me-2" value="<?= $viewData['data_url']['type'] ?>">
                        <option value="multi" <?= $viewData['data_url']['type'] == "multi" ? "selected" : "" ?>>Tout</option>
                        <option value="tv" <?= $viewData['data_url']['type'] == "tv" ? "selected" : "" ?>>Série TV</option>
                        <option value="movie" <?= $viewData['data_url']['type'] == "movie" ? "selected" : "" ?>>Film</option>
                    </select>
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
            <div class="row d-flex flex-wrap">

                <?php
                if (isset($viewData['list'])) {
                    foreach ($viewData['list'] as $data) {
                        ?>

                        <div class="col-12 col-lg-3 col-sm-4 mb-3">
                            <?php
                            $release = null;
                            $title = null;
                            $class = null;
                            $url = null;
                            if($viewData['data_url']['type'] == "tv"){
                                $title = $data->original_name;
                                $release = $data->first_air_date;
                                $class = "border-info";
                                $url = $viewData['router']->get()->generate('main-generate-tv', ['id' => $data->id]);
                            }
                            if($viewData['data_url']['type'] == "movie"){
                                $title = $data->original_title;
                                $release = $data->release_date;
                                $class = "border-success";
                                $url = $viewData['router']->get()->generate('main-generate-movie', ['id' => $data->id]);
                            }
                            if($viewData['data_url']['type'] == "multi"){
                                $title = $data->media_type == "tv" ? $data->original_name : $data->original_title;
                                $release = $data->media_type == "tv" ? $data->first_air_date : ($data->release_date ?? "N/A");
                                $url = $viewData['router']->get()->generate("main-generate-{$data->media_type}", ['id' => $data->id]);
                            }
                            ?>
                            <div class="card h-100 <?= $class ?>">
                                <img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2<?= $data->poster_path ?? $data->backdrop_path ?>"
                                     class="card-img-top img-fluid "
                                     style="width: 100%; height: 450px !important; object-fit: cover;" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?= $url ?>">
                                            <?= $title ?>
                                        </a>
                                    </h5>
                                    <h6 class="card-subtitle text-muted"><?= $release ?></h6>
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

                <!-- <div class="d-grid gap-2">
                     <button class="btn btn-lg btn-dark" type="button">Voir plus</button>
                 </div> -->
                <?php
                if (isset($viewData['pagination']) && $viewData['pagination']['total_pages'] > 1) {
                    $a = $viewData['pagination']['pages'];
                    $c = $viewData['pagination']['page'];
                    ?>
                    <div class="d-flex justify-content-center mt-3">
                        <ul class="pagination pagination-lg">
                            <li class="page-item <?= $a->$c->prev ? "" : "disabled" ?>">
                                <a class="page-link" href="<?= $a->$c->prev->url ?? "" ?>">&laquo;</a>
                            </li>
                            <?php
                            foreach ($viewData['pagination']['pages'] as $page) {
                                ?>
                                <li class="page-item <?= $page->current ? "active" : "" ?>">
                                    <a class="page-link" href="<?= $page->url ?>"><?= $page->page ?></a>
                                </li>
                            <?php } ?>
                            <li class="page-item <?= $a->$c->next ? "" : "disabled" ?>">
                                <a class="page-link" href="<?= $a->$c->next->url ?? "" ?>">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . './../global/footer.tpl.php' ?>
</body>
</html>