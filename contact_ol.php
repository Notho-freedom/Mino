
              <!-- friend 1 -->
              <li class="dropdown-item rounded my-2 px-0" type="button" data-bs-toggle="modal" data-bs-target="#singleChat1">
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-html="true"
                  data-bs-content="
                    <div>
                      <div class='popover-body d-flex p-2'>
                        <div>

                          <img src='<?= URL . $__User->getAvatar($user['guid']) ?>' alt='<?= $user['pseudo'].' '.$user['nom'] ?>' class='pop-avatar'  />

                        </div>
                        <div >
                          <h5><?= $user['pseudo'].' '.$user['nom'] ?></h5>
                          <div class='d-flex'>

                            <i class='fas fa-user-friends m-1 text-muted'></i>
                            <p>2 mutual friends: <span class='fw-bold'>Jerry</span> and <span class='fw-bold'>Phu</span></p>

                          </div>
                          <div class='d-flex'>

                          <i class='fas fa-graduation-cap m-1 text-muted'></i>
                          <p><?= $user['actu']?></p>

                          </div>


                          <div class='d-flex'>

                            <i class='fas fa-eyes m-1 text-muted'></i>
                            <?= $stat ?>

                          </div>

                        </div>
                      </div>
                    </div>
                  ">

                  <div class="position-relative">

                    <img src="<?= URL . $__User->getAvatar($user['guid']) ?>" alt="<?= $user['pseudo']." ".$user['nom'] ?>" class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover"/>

                    <span class=" position-absolute bottom-0 translate-middle border border-light rounded-circle p-1" style="left: 75%;background-color: <?= $color ?>;">
                      <span class="visually-hidden">yo</span>
                    </span>

                  </div>

                  <p class="m-0"><?= $user['pseudo']." ".$user['nom'] ?></p>

                </div>
                
              </li>
