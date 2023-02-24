          <div class="col d-flex align-items-center justify-content-end">
            <!-- avatar -->
            <div class="align-items-center justify-content-center d-none d-xl-flex" >
              <img
                src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                class="rounded-circle me-2"
                alt="avatar"
                style="width: 38px; height: 38px; object-fit: cover"
              />
              <p class="m-0"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
            </div>
            <!-- main menu -->
            <!-- main menu dd -->
            <?php include ("menu_dd.php"); ?>

            <!-- chat -->
            <!-- chat  dd -->
            <?php include ("tchat_dd.php"); ?>

            <!-- notifications -->
            <?php include ("not_dd.php"); ?>

            <!-- secondary menu -->
            <?php include ("sec_menu.php"); ?>
            <!-- end -->
          </div>