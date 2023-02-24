<?php

$con = new mysqli("localhost","root","","felix");

$show_s =$con->query("SELECT * FROM statut ORDER BY date_upload DESC");
while ($post=$show_s->fetch_assoc()) {

$show_u =$con->query("SELECT * FROM user WHERE id='$post[pseudo_id]'");
while ($user=$show_u->fetch_assoc()) {

if ($post['media']=='texte') {
	include ('texte_post.php');
}elseif ($post['media']=='image') {
	include ('post.php');
}elseif ($post['media']=='video') {
	include ('post_video.php');
}elseif ($post['media']=='audio') {
	include ('post_audio.php');
}


}
}
?>