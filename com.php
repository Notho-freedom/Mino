                          <div class="d-flex align-items-center my-1">
                            <!-- avatar -->
                            <img
                              src="<?= URL . $__User->getAvatar($user['guid']) ?>"
                              alt="avatar"
                              class="rounded-circle me-2"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                            <!-- comment text -->
                            <div class="p-3 rounded comment__input w-100 responsive">
                              <!-- comment menu of author -->
                              <small><?php include ('comment_edit.php'); ?>
                              <p class="fw-bold m-0 p-0" style="font-size: auto;" ><?= $user['nom']." ".$user['pseudo']?><span class="text-muted fs-7" style="padding-left: 50% !important;">..<?= $__Time->give_time($comment['date_upload']); ?></span></p></small>

                              <p class="m-0 fs-7 bg-gray p-2 rounded">
                                <?= $comment['texte'];?>
                              </p>
                            </div>
                          </div>