
    <div class="container-fluid">
      <div class="row justify-content-evenly">
        <!-- ================= Sidebar ================= -->
        <?php include ('side_bar.php'); ?>

        <style type="text/css">         
        #cb{margin-left: 0% !important;}
        @media only screen and (min-width: 1200px){#cb {margin-left: -10% !important;} }
        </style>

        <!-- ================= Timeline ================= -->
        <div class="col-12 col-lg-6 pb-5" id="cb">
          <div class="d-flex flex-column justify-content-center w-100 mx-auto" style="padding-top: 56px; max-width: 680px">
            <!-- stories -->
            <?php include ("stories.php"); ?>
            <!-- create post -->
            <?php include ("create_post.php"); ?>
            <!-- create room -->
            <?php include ('sl.php') ?>
            <!-- posts -->
            <?php include ('fp.php') ?>


          </div>
        </div>
        <!-- ================= Chatbar ================= -->
        <?php include ('tchatbar.php') ?>
      </div>
    </div>