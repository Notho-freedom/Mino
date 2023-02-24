<?php include_once('include.php');

  if(!isset($_SESSION['id'])){header('Location: ' . URL);}
  echo "
<script type='text/javascript'>
  setTimeout(function(){
    ".$__Notification->notification()."
  },1000);
  ";
include ('fjs.php');
echo "</script>";
 ?>

    <title>Mino</title>
  </head>
  <body class="bg-gray postion-relative">
    <!-- ================= Appbar ================= -->
    <?php include ('appbar.php'); ?>
    <!-- =============== New Chat Mobile =============== -->
    <?php include ('tchat.php'); ?>
    <!-- ================= Main ================= -->
    <?php include ('main.php') ?>
    <!-- ================= Main ================= -->
    <?php include ('footer.php') ?>

  </body>
</html>

