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
            <form method="GET" action="search" class="row pb-2">
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
        <div class="row">
            <div class="bg-primary w-100 text-center">
                <div class="row bg-primary justify-content-center align-items-center py-5">
                    <div class="col-xl-5 col-lg-6 col-md-7 col-11 mt-1 text-left">
                        <div class="pl-xl-4 pl-lg-3 pl-md-2">
                            <div class="display-4 font-weight-light mb-4 text-white"><?= $viewData['tv']->name ?></div>

                            <div class="text-justify mb-4">
                                <font size="2" color="#999999"><?= $viewData['tv']->overview ?></font>
                            </div>

                            <div class="row justify-content-center text-center mb-4">
                                <?php
                                foreach ($viewData['generator']['casts'] as $perso) echo '<div class="col-6 col-sm-3 mb-3 px-2"><img src="https://image.tmdb.org/t/p/w154' . $perso['profile_path'] . '" alt="" class="rounded img-fluid"></div>'
                                ?>
                            </div>

                            <font size="4"
                                  class="d-flex align-items-center justify-content-center p-1 pl-2 mb-3 bg-secondary border-danger rounded">
                                <span class="badge badge-info">1080p</span>
                                <span class="badge badge-success mx-1">x265</span>
                                <img class="mx-auto d-none d-sm-inline-block"
                                     src="<?= $viewData['generator']['rating']['image'] ?>"
                                     alt="<?= $viewData['generator']['rating']['note'] ?>">
                                <span class="alert alert-dark d-none d-sm-inline-block h5 py-2 px-3 mb-0"><?= $viewData['generator']['release']->format("Y") ?></span>
                            </font>
                        </div>
                    </div>
                    <div class="col-lg-5 px-lg-5">
                        <img src="https://image.tmdb.org/t/p/w500<?= $viewData['tv']->poster_path ?>"
                             alt="" class="img-fluid rounded w-100">
                    </div>
                </div>

                <div class="row bg-dark justify-content-center align-items-center py-5 text-left">
                    <div class="col-12 text-center">
                        <h1 class="font-weight-light text-white mb-3">Informations</h1>
                    </div>

                    <!--                    <div class="col-10 col-sm-7 col-md-5 col-lg-4 col-xl-3 my-3">-->
                    <!--                        <div class="card mb-0 border border-dark">-->
                    <!--                            <div>-->
                    <!--                                <img src="https://img.youtube.com/vi/wyxbc_wQjaI/mqdefault.jpg" class="card-img-top img-fluid" alt="mqdefault.jpg"><a href="/misc/safe_redirect?url=aHR0cHM6Ly93d3cueW91dHViZS5jb20vd2F0Y2g/dj13eXhiY193UWphSQ==" class="card-img-overlay d-flex justify-content-center align-items-center"><img src="https://zupimages.net/up/20/21/mwzi.png" width="70" alt="mwzi.png"></a>-->
                    <!--                            </div>-->
                    <!--                            <div class="card-body py-2 px-3 border border-right-0 border-left-0 border-bottom-0 border-dark">-->
                    <!--                                <p class="card-text text-dark">Thor : Love and Thunder | Bande annonce</p>-->
                    <!--                                <p class="card-text mt-1"><font size="2"><span class="small text-primary">20 avr. 2022 - par Marvel FR</span></font></p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->

                    <div class="col-sm-11 col-md-9 col-lg-6 my-3">
                        <table class="table bg-light table-hover rounded mb-0">
                            <tbody>
                            <tr>
                                <td class="bg-transparent py-2 text-capitalize text-left">
                                    <font size="2" class="d-flex justify-content-between">
                                        <b><span class="ico_globe"></span> Origine :</b> <?= $viewData['generator']['countries'] ?>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-transparent py-2 text-capitalize text-left">
                                    <font size="2" class="d-flex justify-content-between">
                                        <b><span class="ico_clock-o"></span> Durée :</b> <?= $viewData['generator']['run_time'] ?>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-transparent py-2 text-capitalize text-left">
                                    <font size="2" class="d-flex justify-content-between">
                                        <b><span class="ico_calendar"></span> Date de sortie :</b> <?= $viewData['generator']['release']->format("D j M Y") ?>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-transparent py-2 text-capitalize text-left">
                                    <font size="2" class="d-flex justify-content-between">
                                        <b><span class="ico_film"></span> Titre original :</b> <?= $viewData['tv']->original_name ?>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-transparent py-2 text-capitalize text-left">
                                    <font size="2" class="d-flex justify-content-between">
                                        <b><span class="ico_heart-o"></span> Critiques des spectateurs :</b>
                                        <span>
                                            <img src="<?= $viewData['generator']['rating']['image'] ?>" alt="">
                                            <?= round(($viewData['generator']['rating']['note']*50)/100, 2) ?>
                                        </span>
                                    </font>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-transparent py-2 text-capitalize text-left">
                                    <font size="2" class="d-flex justify-content-between">
                                        <b><span class="ico_globe"></span> TheMovieDB :</b>
                                        <a href="https://www.themoviedb.org/<?= $viewData['generator']['type'] ?>/<?= $viewData['tv']->id ?>">Fiche du Film</a>
                                    </font>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . './../global/footer.tpl.php' ?>
</body>
</html>