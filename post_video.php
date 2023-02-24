<style type="text/css">
  .cardv {
  width: 100% !important;
  max-height: 500px !important;
  height: 100% !important;
  align-content: center !important;
  align-items: center !important;
  background: rgba( 255, 255, 255, 0.15 );
  border: 1px solid rgba( 255, 255, 255, 0.18 );
  border-radius: 1rem !important;
  color: whitesmoke !important;
}
</style> 
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
                  <video
                    src="<?= "public/videos/".$user['guid']."/".$post['name'] ?>"
                    alt="video,since <?= $post['date_upload']; ?>"
                    title="video,since <?= $post['date_upload']; ?>"
                    class="img-fluid rounded w-100 cardv"
                    controls
                  ></video>
                </div>
                <!-- likes & comments -->
                <?php include ('like_&_coment_post.php') ?>
              </div>
              
            </div>