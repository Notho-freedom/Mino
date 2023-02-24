    




    <div class="bg-white p-4 rounded shadow mt-3">
        <!-- author -->       
        <!-- avatar -->
      <?php include ('avatar_post.php') ?>
        <!-- edit -->
      <?php include ('edit_post.php') ?>

              
              <!-- post content -->
              <div class="mt-3">
                <!-- content -->
                <div style="align-items: center;align-content: center !important;text-align: center;justify-content: center !important;background-color: <?= $post['bg_color']; ?>;min-height: 70px;border-radius: 10px;" class="pt-3">
                  <p style="justify-content: center !important;color: <?= $post['text_color']; ?>;text-align: center;text-shadow: 2px <?= $post['text_color']; ?>;" ><?= $post['description'] ?></p>
                </div>
                <!-- likes & comments -->
                <?php include ('like_&_coment_post.php') ?>
              </div>
              
            </div>