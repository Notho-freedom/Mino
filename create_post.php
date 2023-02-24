            <div class="bg-white p-3 mt-3 rounded border shadow">
              <!-- avatar -->
              
              <div class="d-flex" type="button">
                <div class="p-1">
                  <img
                    src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 38px; height: 38px; object-fit: cover"
                  />
                </div>
                <input
                  type="text"
                  class="form-control rounded-pill border-0 bg-gray pointer"
                  disabled
                  placeholder="What's on your mind, <?= $_SESSION['name']." ".$_SESSION['surname'] ?>?"
                  data-bs-toggle="modal"
                  data-bs-target="#createModal"
                />
              </div>
              <!-- create modal -->
              <?php include ('post_bar.php') ?>

            </div>