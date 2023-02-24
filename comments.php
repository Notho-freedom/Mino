<?php

include 'include.php';

if (isset($_POST['comment']) && !empty($_POST['comment'])) {

$req2 = $DB->prepare("INSERT INTO comments (status_id,user_id,texte, date_upload)VALUES (?, ?, ?, ?)");

if($req2->execute(array($_GET['st_id'],$_SESSION['id'],$_POST['comment'], date('Y-m-d H:i:s')))){



$req0 = $DB->prepare("SELECT pseudo_id,liked,date_upload FROM statut WHERE id = ?");
$req0->execute(array($_GET['st_id']));
$reqs0 = $req0->fetch();





        $req3 = $DB->prepare("SELECT id,pseudo,mail
          FROM user
          WHERE id = ?");
        
        $req3->execute(array($reqs0['pseudo_id']));
        $reqs3 = $req3->fetch();
/*
        if ($reqs3['id']!=$_SESSION['id']) {

        $message = $_SESSION['pseudo']." à commenté ta publication du ".$reqs['date_upload']."!<p style='text-align: justify;'>Connecte-toi dès maintenant sur <a href='https://ansy.genesis-compagnie.go.yj.fr/' target='_blank'>A N S Y</a> pour repondre à la réaction de ".$_SESSION['pseudo'].".</p><br/>";

          $__Email->comment_mail($_SESSION['pseudo'],$reqs3['pseudo'],$message,$reqs2['mail']);

        }
*/
            if(isset($_GET['st_id'])) {

                $req = $DB->prepare("SELECT nc
                    FROM statut
                    WHERE id = ?");
                
                $req->execute(array($_GET['st_id']));
                $reqs = $req->fetch();

                $reqs['nc']+=1;

                $req = $DB->prepare("UPDATE statut set nc=? WHERE id = ?");

        if ($req->execute(array($reqs['nc'], $_GET['st_id']))) {
          header('Location: ' . URL ."?error=Commentaire posté!&a=".$_SESSION['id'].$_GET['st_id']);
          exit;
        }
               
            }


}

}


?>