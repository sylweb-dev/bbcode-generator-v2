<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once __DIR__ . './../global/head.tpl.php' ?>
    <title>RapidPlace - Accueil</title>
</head>
<body class="mb-5">
<?php require_once __DIR__ . './../global/nav.tpl.php' ?>

<section class="my-3 container" id="find">
    <?php require_once __DIR__ . './../snippets/search-form.tpl.php' ?>
</section>


<section class="my-3 container" id="container_fillform">
    <div class="card bg-dark text-white">
        <div class="card-header">Informations du torrent</div>
        <div class="card-body">
            <form action="POST">
            <div class="row">
                <div class="col-md-6 col-12 mb-4">
                    <div class="form-group">
                        <label for="quality">Qualité</label>
                        <select class="form-control custom-select" id="quality" name="quality">
                            <optgroup label="HDTV" class="text-muted">
                                <option class="text-dark" value="TVRip">TVRip</option>
                                <option class="text-dark" value="HDTV 720p">HDTV 720p</option>
                                <option class="text-dark" value="HDTV 1080p">HDTV 1080p</option>
                                <option class="text-dark" value="HDTV 2160p">HDTV 2160p</option>
                                <option class="text-dark" value="VCD/SVCD/VHSRip">VCD/SVCD/VHSrip</option>
                            </optgroup>
                            <optgroup label="WEB" class="text-muted">
                                <option class="text-dark" value="WEB">WEB</option>
                                <option class="text-dark" value="WEB 720p">WEB 720p</option>
                                <option class="text-dark" value="WEB 1080p">WEB 1080p</option>
                                <option class="text-dark" value="WEB 2160p">WEB 2160p</option>
                            </optgroup>
                            <optgroup label="WEBRip" class="text-muted">
                                <option class="text-dark" value="WEBRip">WEBRip</option>
                                <option class="text-dark" value="WEBRip 720p">WEBRip 720p</option>
                                <option class="text-dark" value="WEBRip 1080p">WEBRip 1080p</option>
                                <option class="text-dark" value="WEBRip 2160p">WEBRip 2160p</option>
                            </optgroup>
                            <optgroup label="DVD" class="text-muted">
                                <option class="text-dark" value="DVDrip">DVDrip</option>
                                <option class="text-dark" value="DVD [Full]">DVD [Full]</option>
                                <option class="text-dark" value="DVD [Remux]">DVD [Remux]</option>
                            </optgroup>
                            <optgroup label="BLURAY" class="text-muted">
                                <option class="text-dark" value="BDrip/BRrip (SD)">BDrip/BRrip (SD)</option>
                                <option class="text-dark" value="HDrip 720p">HDrip 720p</option>
                                <option class="text-dark" value="HDrip 1080p">HDrip 1080p</option>
                                <option class="text-dark" value="HDrip 2160p">HDrip 2160p</option>
                                <option class="text-dark" value="Bluray [Full]">Bluray [Full]</option>
                                <option class="text-dark" value="Bluray [Remux]">Bluray [Remux]</option>
                                <option class="text-dark" value="Bluray 4K [Full]">Bluray 4K [Full]</option>
                                <option class="text-dark" value="Bluray 4K [Remux]">Bluray 4K [Remux]</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                    <div class="form-group">
                        <label for="source">Source / Release</label>
                        <input type="text" class="form-control" id="source" name="source" placeholder="AMZN/DSNP/NF.<TEAM>"/>
                    </div>
                </div>


                <div class="col-md-4 col-12 mb-4">
                    <div class="form-group">
                        <label for="video_format">Format vidéo</label>
                        <select class="form-control custom-select" id="video_format" name="video_format">
                            <option value="MKV">MKV</option>
                            <option value="MP4">MP4</option>
                            <option value="M2TS">M2TS</option>
                            <option disabled="" class="text-muted">------</option>
                            <option value="AVI">AVI</option>
                            <option value="MOV">MOV</option>
                            <option disabled="" class="text-muted">------</option>
                            <option value="IMG">IMG</option>
                            <option value="ISO">ISO</option>
                            <option value="VOB">VOB</option>
                            <option value="TS">TS</option>
                            <option disabled="" class="text-muted">------</option>
                            <option value="WebM">WebM</option>
                            <option value="OGG">OGG</option>
                            <option value="3GP">3GP</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="form-group">
                        <label for="video_codec">Codec vidéo</label>
                        <select class="form-control custom-select" id="video_codec" name="video_codec">
                            <option value="AVC/x264/h.264">AVC/x264/h.264</option>
                            <option value="HEVC/x265/h.265">HEVC/x265/h.265</option>
                            <option value="HEVC/x265/h.265 (10bit)">HEVC/x265/h.265 (10bit)</option>
                            <option value="VVC/x266/h.266">VVC/x266/h.266</option>
                            <option value="MPEG5">EVC/MPEG5</option>
                            <option disabled="" class="text-muted">------</option>
                            <option value="DivX">DivX</option>
                            <option value="XviD">XviD</option>
                            <option value="MPEG1">MPEG1 (VCD)</option>
                            <option value="MPEG2">MPEG2 (SVCD)</option>
                            <option disabled="" class="text-muted">------</option>
                            <option value="VP8">VP8</option>
                            <option value="VP9">VP9</option>
                            <option value="VC1">VC1</option>
                            <option value="AV1">AV1</option>
                            <option disabled="" class="text-muted">------</option>
                            <option value="Theora">Theora</option>
                            <option value="ProRes">ProRes</option>
                            <option value="VOB">VOB</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-4">
                    <div class="form-group">
                        <label for="video_debit d-block">Débit vidéo</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="video_debit" name="video_debit" placeholder="2500" />
                            <span class="input-group-text">kb/s</span>
                        </div>
                    </div>
                </div>


            </div>
        </form>
        </div>
    </div>
</section>


<section class="my-3 container" id="buttons">
    <div class="card bg-light my-3">
        <div class="card-body">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#generated_view"
                    aria-expanded="false" aria-controls="generated_view">
                Afficher le rendu
            </button>
        </div>
    </div>
</section>

<section class="my-3 container" id="container_generated_view">
    <div class="card bg-light my-3">
        <div class="collapse" id="generated_view">
            <div class="row">
                <div class="bg-light w-100 text-center">
                    <div class="row bg-light justify-content-center align-items-center py-5">
                        <div class="col-xl-5 col-lg-6 col-md-7 col-11 mt-1 text-left">
                            <div class="pl-xl-4 pl-lg-3 pl-md-2">
                                <div class="display-4 font-weight-lighttext-white"><?= $viewData['tv']->name ?></div>
                                <div class="mb-4">
                                    <?php foreach ($viewData['tv']->genres as $genre) echo '<span class="badge badge-pill badge-dark mr-2">' . $genre->name . '</span>'; ?>
                                </div>

                                <div class="text-justify mb-4">
                                    <font size="2" color="#999999"><?= $viewData['tv']->overview ?></font>
                                </div>

                                <div class="row justify-content-center text-center mb-4">
                                    <?php
                                    foreach ($viewData['generator']['casts'] as $perso)
                                        echo '<div class="col-6 col-sm-3 mb-3 px-2"><img src="https://image.tmdb.org/t/p/w154' . $perso['profile_path'] . '" alt="' . $perso['original_name'] . '" class="rounded img-fluid"></div>';
                                    ?>
                                </div>

                                <font size="4"
                                      class="d-flex align-items-center justify-content-center p-1 pl-2 mb-3 bg-light border-dark rounded">
                                    <span class="badge badge-info">1080p</span>
                                    <span class="badge badge-success mx-1">x264</span>
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
                            <h1 class="font-weight-light text-white mb-3 text-uppercase"><font
                                        size="5">Informations</font></h1>
                        </div>

                        <div class="col-sm-11 col-md-9 col-lg-7 my-3">
                            <table class="table bg-light table-hover rounded mb-0">
                                <tbody>
                                <tr>
                                    <td class="bg-transparent py-2 text-capitalize text-left">
                                        <font size="2" class="d-flex justify-content-between">
                                            <b><span class="ico_calendar"></span> Date de sortie
                                                :</b> <?= $viewData['generator']['release']->format("D j M Y") ?>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent py-2 text-capitalize text-left">
                                        <font size="2" class="d-flex justify-content-between">
                                            <b><span class="ico_clock-o"></span> Durée
                                                :</b> <?= $viewData['generator']['run_time'] ?>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent py-2 text-capitalize text-left">
                                        <font size="2" class="d-flex justify-content-between">
                                            <b><span class="ico_globe"></span> Origine
                                                :</b> <?= $viewData['generator']['countries'] ?>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent py-2 text-capitalize text-left">
                                        <font size="2" class="d-flex justify-content-between">
                                            <b><span class="ico_film"></span> Titre original
                                                :</b> <?= $viewData['tv']->original_name ?>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent py-2 text-capitalize text-left">
                                        <font size="2" class="d-flex justify-content-between">
                                            <b><span class="ico_heart-o"></span> Critiques des spectateurs :</b>
                                            <span>
                                                <img src="<?= $viewData['generator']['rating']['image'] ?>" alt="">
                                                <?= round(($viewData['generator']['rating']['note'] * 50) / 100, 2) ?>
                                            </span>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-transparent py-2 text-capitalize text-left">
                                        <font size="2" class="d-flex justify-content-between">
                                            <b><span class="ico_globe"></span> TheMovieDB :</b>
                                            <a href="https://www.themoviedb.org/<?= $viewData['generator']['type'] ?>/<?= $viewData['tv']->id ?>"
                                               class="font-italic">Fiche
                                                du Film</a>
                                        </font>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-sm-11 col-md-9 col-lg-7 my-3">
                            <table class="table bg-light table-hover rounded mb-0">
                                <thead>
                                <tr>
                                    <th colspan="3" class="py-2 text-center text-dark text-uppercase"><font size="3">Réalisateur<?= (sizeof($viewData['tv']->created_by) > 1) ? "s" : "" ?></font>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($viewData['tv']->created_by as $real) { ?>
                                    <tr class="py-2">
                                        <td class="py-2 text-center text-dark"><?= $real->name ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-sm-11 col-md-9 col-lg-7 my-3">
                            <table class="table bg-light table-hover rounded mb-0">
                                <thead>
                                <tr>
                                    <th colspan="3" class="py-2 text-center text-dark text-uppercase"><font size="3">Acteur<?= ($viewData['tv']->created_by > 1) ? "s" : "" ?></font>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($viewData['generator']['casts'] as $actor) { ?>
                                    <tr class="py-2">
                                        <td class="py-2 text-center text-dark"><?= $actor['name'] ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row bg-light justify-content-center py-5">
                        <div class="col-12 text-center">
                            <h1 class="font-weight-light text-dark mb-3 text-uppercase"><font size="5">Détails
                                    Techniques</font></h1>
                        </div>

                        <div class="row mb-2 pt-4 w-75">
                            <div class="col-md-4 my-3">
                                <h2 class="mb-3">Vidéo</h2>
                                <ul class="list-group pl-0">
                                    <li class="list-group-item bg-dark text-light p-2">WEBRip 1080p</li>
                                    <li class="list-group-item bg-dark text-light p-2">HEVC/x264</li>
                                    <li class="list-group-item bg-dark text-light p-2">2148 kbps</li>
                                </ul>
                            </div>
                            <div class="col-md-4 my-3">
                                <h2 class="mb-3">Audio</h2>
                                <ul class="list-group pl-0">
                                    <li class="list-group-item bg-dark text-light p-2"><img
                                                src="https://flagcdn.com/20x15/fr.png" alt="fr_FR.png"> Français (VFF) à
                                        640 kbps
                                    </li>
                                    <li class="list-group-item bg-dark text-light p-2"><img
                                                src="https://flagcdn.com/20x15/us.png" alt="en_US.png"> Anglais (VO) à
                                        211 kbps
                                    </li>
                                    <li class="list-group-item bg-dark text-light p-2">EAC3 | 5.1</li>
                                </ul>
                            </div>
                            <div class="col-md-4 my-3">
                                <h2 class="mb-3">Sous-titres</h2>
                                <ul class="list-group pl-0">
                                    <li class="list-group-item bg-dark text-light p-2"><img
                                                src="https://flagcdn.com/20x15/fr.png" alt="fr_FR.png"> Français
                                        (forcés, complets)
                                    </li>
                                    <li class="list-group-item bg-dark text-light p-2"><img
                                                src="https://flagcdn.com/20x15/us.png" alt="en_US.png"> Anglais
                                        (complets)
                                    </li>
                                    <li class="list-group-item bg-dark text-light p-2">TXT/SRT</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row bg-dark justify-content-center align-items-center py-5">
                        <div class="col-12 text-center">
                            <h1 class="font-weight-light text-light mb-3 text-uppercase"><font size="5">Détails
                                    Torrent</font></h1>
                        </div>
                        <div class="row mt-3 mb-1 text-center">
                            <div class="alert alert-light p-2 mx-auto mb-0 text-dark"><b>Débit global :</b> 2000 kbps
                            </div>
                            <div class="mt-3 w-100">
                                <font size="2">
                                    <b class="text-light">Source :</b> <span class="text-warning">NF.HEPHE</span><br>
                                    <b class="text-light">Nombre de Fichiers :</b> <span
                                            class="badge badge-success align-middle">1</span><br>
                                    <b class="text-light">Poids total du torrent : <span
                                                class="text-danger">2,00 Go</span></b>
                                </font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . './../global/footer.tpl.php' ?>
</body>
</html>