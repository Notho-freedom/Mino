<div class="d-flex justify-content-between">
<div class="d-flex">
<img src="<?= URL . $__User->getAvatar($user['guid']) ?>" alt="avatar" class="rounded-circle me-2"
style="width: 38px; height: 38px; object-fit: cover"/>
<div><p class="m-0 fw-bold"><?= $user['pseudo']." ".$user['nom'] ?></p>
<span class="text-muted fs-7">il y'a <?= $__Time->give_time($post['date_upload']); ?></span></div>
</div>