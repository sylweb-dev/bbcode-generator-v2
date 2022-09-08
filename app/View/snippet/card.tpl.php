<?php
    if(!isset($data)) $data = [];
?>

<div class="card mb-3">
    <img src="<?= $data['image'] ?>" alt="Image of <?= $data['title'] ?>" class="d-block user-select-none" width="100%" height="200">
    <div class="card-body">
        <h5 class="card-title"><?= $data['title'] ?></h5>
        <h6 class="card-subtitle text-muted"><?= $data['description'] ?></h6>
    </div>
</div>