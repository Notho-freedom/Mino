    <div class="bg-white p-4 rounded shadow mt-3">
        <!-- author -->       
        <!-- avatar -->
      <?php include ('avatar_post.php') ?>
      <?php include ('edit_post.php'); ?>
              <!-- post content -->
              <div class="mt-3">
                <!-- content -->
                <div style="background-color: <?= $post['bg_color']; ?>">
                  <p style="justify-content: center !important;color: <?= $post['text_color']; ?>;text-align: center;text-shadow: 2px <?= $post['text_color']; ?>;" ><?= $post['description'] ?></p>
                  <img
                    src="<?= "public/pictures/".$user['guid']."/".$post['name'] ?>"
                    alt="image,since <?= $post['date_upload']; ?>"
                    class="img-fluid rounded w-100"
                  />
                </div>
                <!-- likes & comments -->
                <?php include ('like_&_coment_post.php') ?>
              </div>
              
            </div>