<?php

$show_c3 =$con->query("SELECT * FROM comments WHERE status_id ='$post[id]' ORDER BY date_upload DESC");
while ($comment=$show_c3->fetch_assoc()) {

$show_uc3 =$con->query("SELECT * FROM user WHERE id='$comment[user_id]'");
while ($user=$show_uc3->fetch_assoc()) {
        include ("com.php");
    }
}
?>