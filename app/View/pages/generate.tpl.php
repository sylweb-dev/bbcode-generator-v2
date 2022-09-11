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

<section class="my-3 container">
    <div class="row">
        <div class="col-12">
            <div class="card border rounded border-dark">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-12">
                            <div class="display-4 mb-2"><?= $viewData['tv']->name ?></div>
                            <div class="mb-5">
                                <?php foreach ($viewData['tv']->genres as $genre) echo '<span class="badge badge-pill bg-dark me-2">' . $genre->name . '</span>'; ?>
                            </div>

                            <p class="text-muted fs-5 mb-5"
                               style="text-align: justify"><?= $viewData['tv']->overview ?></p>

                            <div class="row justify-content-center text-center mb-4">
                                <?php
                                foreach ($viewData['generator']['casts'] as $perso)
                                    echo '<div class="col-6 col-sm-3 mb-3 px-2"><img src="https://image.tmdb.org/t/p/w154' . $perso['profile_path'] . '" alt="' . $perso['original_name'] . '" class="rounded img-fluid"></div>';
                                ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="https://image.tmdb.org/t/p/w500<?= $viewData['tv']->poster_path ?>" alt=""
                                 class="img-fluid rounded w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-3 container" id="container_fillform">
    <form action="" method="GET">
        <div class="card bg-dark text-white mt-3">
            <div class="card-header fst-italic fw-bold text-info">Informations du torrent</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12 mb-4">
                        <div class="form-group">
                            <label for="quality">Qualité</label>
                            <select class="form-select" id="quality" name="quality">
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
                            <input type="text" class="form-control" id="source" name="source"
                                   placeholder="AMZN/DSNP/NF.<TEAM>"/>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 mb-4">
                        <div class="form-group">
                            <label for="video_format">Format vidéo</label>
                            <select class="form-select" id="video_format" name="video_format">
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
                            <select class="form-select" id="video_codec" name="video_codec">
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
                            <label for="video_debit">Débit vidéo</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="video_debit" name="video_debit"
                                       placeholder="2500"/>
                                <span class="input-group-text">kb/s</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-dark text-white mt-3">
            <div class="card-header fst-italic fw-bold bg-light text-info">Pistes audio</div>
            <div class="card-body bg-light text-dark">
                <div class="row" id="audio_form">
                    <div class="col-md-4 col-12 mb-4">
                        <div class="form-group">
                            <label for="audio">Langue</label>
                            <select class="form-select" id="audio" name="audio">
                                <option value="vff">Français (VFF)</option>
                                <option value="vfq">Québécois (VFQ)</option>
                                <option value="vfi">Français (VFI)</option>
                                <option value="us"> Anglais</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="es"> Espagnol</option>
                                <option value="de"> Allemand</option>
                                <option value="it"> Italien</option>
                                <option value="pt"> Portugais</option>
                                <option value="jp"> Japonais</option>
                                <option value="kr"> Portugais</option>
                                <option value="ru"> Russe</option>
                                <option value="sa"> Arabe</option>
                                <option value="nl"> Néerlandais</option>
                                <option value="dk"> Danois</option>
                                <option value="cn"> Chinois</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-4">
                        <div class="form-group">
                            <label for="audio_codec">Codec audio</label>
                            <select class="form-select" id="audio_codec" name="audio_codec">
                                <option value="AC3">AC3</option>
                                <option value="EAC3">EAC3</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="AAC">AAC</option>
                                <option value="AAC-LC">AAC-LC</option>
                                <option value="HE-AAC">HE-AAC</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="Dolby Digital">Dolby Digital</option>
                                <option value="Dolby Digital Plus">Dolby Digital Plus</option>
                                <option value="Dolby TrueHD">Dolby TrueHD</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="DTS">DTS</option>
                                <option value="DTS HD">DTS HD</option>
                                <option value="DTS HDMA">DTS HDMA</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="PCM">PCM</option>
                                <option value="LPCM">LPCM</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="OGG">OGG</option>
                                <option value="WAV">WAV</option>
                                <option value="FLAC">FLAC</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-4">
                        <div class="form-group">
                            <label for="audio_debit">Débit audio</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="audio_debit" name="audio_debit"
                                       placeholder="2500"/>
                                <span class="input-group-text">kb/s</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <input type="button" class="btn btn-outline-primary" value="Ajouter une piste audio">
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-dark text-white mt-3">
            <div class="card-header fst-italic fw-bold text-info">Sous-titres</div>
            <div class="card-body">
                <div class="row" id="txt_form">
                    <div class="col-md-6 col-12 mb-4">
                        <div class="form-group">
                            <label for="txt">Langue</label>
                            <select class="form-select" id="txt" name="txt">
                                <option value="vff">Français (VFF)</option>
                                <option value="vfq">Québécois (VFQ)</option>
                                <option value="vfi">Français (VFI)</option>
                                <option value="us"> Anglais</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="es"> Espagnol</option>
                                <option value="de"> Allemand</option>
                                <option value="it"> Italien</option>
                                <option value="pt"> Portugais</option>
                                <option value="jp"> Japonais</option>
                                <option value="kr"> Portugais</option>
                                <option value="ru"> Russe</option>
                                <option value="sa"> Arabe</option>
                                <option value="nl"> Néerlandais</option>
                                <option value="dk"> Danois</option>
                                <option value="cn"> Chinois</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-4">
                        <div class="form-group">
                            <label for="txt_format">Format</label>
                            <select class="form-select" id="txt_format" name="txt_format">
                                <option value="Text/SRT (forced)">Text/SRT (forced)</option>
                                <option value="Text/SRT (full)">Text/SRT (Complets)</option>
                                <option value="Text/SRT (SDH)">Text/SRT (SDH)</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="Text/ASS (forced)">Text/ASS (forced)</option>
                                <option value="Text/ASS (full)">Text/ASS (Complets)</option>
                                <option value="Text/ASS (SDH)">Text/ASS (SDH)</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="Text/Timed Text (forced)">Text/Timed Text (forced)</option>
                                <option value="Text/Timed Text (Complets)">Text/Timed Text (Complets)</option>
                                <option value="Text/Timed Text (SDH)">Text/Timed Text (SDH)</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="VobSub (forced)">VobSub (forced)</option>
                                <option value="VobSub (full)">VobSub (Complets)</option>
                                <option value="VobSub (SDH)">VobSub (SDH)</option>
                                <option disabled="" class="text-muted">------</option>
                                <option value="PGS (forced)">PGS (forced)</option>
                                <option value="PGS (full)">PGS (Complets)</option>
                                <option value="PGS (SDH)">PGS (SDH)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <input type="button" class="btn btn-outline-light" value="Ajouter des sous-titres">
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-dark text-white mt-3">
            <div class="card-header fst-italic fw-bold bg-light text-info">Informations Globals</div>
            <div class="card-body bg-light text-dark">
                <div class="row" id="global">
                    <div class="col-md-4 col-12 mb-4">
                        <div class="form-group">
                            <label for="global_debit">Débit global</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="global_debit" name="global_debit"
                                       placeholder="2500"/>
                                <span class="input-group-text">kb/s</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-4">
                        <div class="form-group">
                            <label for="global_filescount">Nombre de fichiers</label>
                            <input type="number" class="form-control" id="global_filescount" name="global_filescount"
                                   placeholder="1">
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-4">
                        <div class="form-group">
                            <label for="global_size">Poids total</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="global_size" name="global_size"
                                       placeholder="2,5"/>
                                <select class="input-group-text" id="global_size_unit" name="global_size_unit">
                                    <option value="Kb">Kb</option>
                                    <option value="Mo">Mo</option>
                                    <option value="Go" selected="">Go</option>
                                    <option value="To">To</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
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