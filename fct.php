<?php

$con = new mysqli("localhost","root","","felix");
$show_u =$con->query("SELECT * FROM user WHERE id != '$_SESSION[id]' ORDER BY date_connection DESC");
while ($user=$show_u->fetch_assoc()) {

$onliner=$__Online->is_online($user["date_connection"]);

if($onliner == 1){ 
          $online="Online";
          $color="green";
        }elseif($onliner == 2){
          $online="Recently";
          $color="orange";
        }else{
          $online="Offline";
          $color="black";
        }
$a="(il y'a ".$__Time->give_time($user['date_connection']).")";

if($online!='Online'){
	$stat="<p>Statut: <span class='fw-bold'> <span style='color: <?php echo $color; ?> !important;'> $online </span><span class='text-muted'> ".$a."</span></span></p>";
}else{
	$stat="<p>Statut: <span class='fw-bold text-primary'> $online</span></p>";
}
	include ('contact_ol.php');
}
?>