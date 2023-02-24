<?php
include('include.php');

$np=0;
$tailleMax = 12582912;
$eiv = array('jpg', 'jpeg', 'png', 'gif','esp','psd','tif','ai','indd','svg');
$evv = array('mp4', 'avi', 'flv', 'wmv', 'mov', 'mkv','wmf','webm');
$eav = array('mp3', 'wav', '3gp', 'm4a','m3u','ogg','wma','mid','');
$efv = array('pdf','odf', 'doc', 'xls', 'pptx','py','c','txt','docx','xlsx','odt','ppt','rtf','wps','sxw');
$epv = array('apk','exe','app');
$ezv = array('rar','zip','tarz');
    $countfiles = count($_FILES['file']['name']);

if ($countfiles !=0) {
    for($i=0;$i<$countfiles;$i++){

        $filename = $_FILES['file']['name'][$i]; 

        $nom='';$chemin='';$type='';$er='';

        if ($_FILES['file']['size'][$i] <= $tailleMax){
                        
            $fe = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                        
            if (in_array($fe, $eiv)){

                $dossier = "public/pictures/".$_SESSION['guid'] ;
                if (!is_dir($dossier)){mkdir($dossier);}
                            
                $nom = md5(uniqid(rand(), true));
                $chemin = "public/pictures/".$_SESSION['guid'] . "/".$nom.".".$fe;

                $type='image';
            }elseif (in_array($fe, $evv)) {

                $dossier = "public/videos/".$_SESSION['guid'] ;
                if (!is_dir($dossier)){mkdir($dossier);}
                            
                $nom = md5(uniqid(rand(), true));
                $chemin = "public/videos/".$_SESSION['guid'] . "/".$nom.".".$fe;

                $type='video';
            }elseif (in_array($fe, $eav)) {

                $dossier = "public/audios/".$_SESSION['guid'] ;
                if (!is_dir($dossier)){mkdir($dossier);}
                            
                $nom = md5(uniqid(rand(), true));
                $chemin = "public/audios/".$_SESSION['guid'] . "/".$nom.".".$fe;

                $type='audio';
            }elseif (in_array($fe, $efv)) {

                $dossier = "public/fichiers/".$_SESSION['guid'] ;
                if (!is_dir($dossier)){mkdir($dossier);}
                            
                $nom = md5(uniqid(rand(), true));
                $chemin = "public/fichiers/".$_SESSION['guid'] . "/".$nom.".".$fe;

                $type='fichier';
            }elseif (in_array($fe, $ezv)) {

                $dossier = "public/archives/".$_SESSION['guid'] ;
                
                if (!is_dir($dossier)){mkdir($dossier);}
                            
                $nom = md5(uniqid(rand(), true));
                $chemin = "public/archives/".$_SESSION['guid'] . "/".$nom.".".$fe;

                $type='archive';
            }elseif (in_array($fe, $epv)) {

                $dossier = "public/apps/".$_SESSION['guid'] ;
                if (!is_dir($dossier)){mkdir($dossier);}
                            
                $nom = md5(uniqid(rand(), true));
                $chemin = "public/apps/".$_SESSION['guid'] . "/".$nom.".".$fe;

                $type='app';
            }else{
                $er='fichier non prit en charge';
            }

            if ($er=='') {

              $req4 = $DB->prepare("INSERT INTO statut 
                (pseudo_id, name, date_upload, description,media,view,text_color,bg_color)VALUES (?, ?, ?, ?, ?, ?, ?, ?)");


                if (move_uploaded_file($_FILES['file']['tmp_name'][$i],$chemin))
                {
                    if($req4->execute(array($_SESSION['id'],($nom.".".$fe),date('Y-m-d H:i:s'),$_POST['description'],$type,$_POST['view'],$_POST['text_color'],$_POST['bg_color'])))
                    {
                          
                          $_SESSION['notification'] = "Vos post ont tous été publiés!";
                          $np=$np+1;
                          if ($np==$countfiles) {header("location: ". URL ."feed.php");exit;}
                    }
                }else{
                    $_SESSION['notification'] = "Vos post n'ont pas tous été publiés!";
                          $np=$np+1;
                          if ($np==$countfiles) {header("location: ". URL ."feed.php");exit;}
                }

            }else{
        $_SESSION['mode']='danger';
        $_SESSION['title'] = 'Mino: Post error';
        $_SESSION['notification'] = $er;
                          $np=$np+1;
                          if ($np==$countfiles) {header("location: ". URL ."feed.php");exit;}
    }

        }else{
        $_SESSION['mode']='danger';
        $_SESSION['title'] = 'Mino: Post error';
        $_SESSION['notification'] = "Ce fichier est trop grand!";
                                 $np=$np+1;
                          if ($np==$countfiles) {header("location: ". URL ."feed.php");exit;} 
    }

    }
}else{

if (isset($_POST['description'])) {

$req5 = $DB->prepare("
    INSERT INTO statut 
    (pseudo_id, date_upload, description,media,view,text_color,bg_color)
    VALUES (?, ?, ?, ?, ?, ?, ?)
    ");

    if($req5->execute(
    array($_SESSION['id'],date('Y-m-d H:i:s'),$_POST['description'],'texte',$_POST['view'],$_POST['text_color'],$_POST['bg_color'])
    )){
        $_SESSION['notification'] = "Votre post a été publié!";
        header("location: ". URL ."feed.php");
        exit;
    }else{
        $_SESSION['mode']='danger';
        $_SESSION['title'] = 'Mino: Post error';
        $_SESSION['notification'] = "Votre post n'a pas été publié!";
        header("location: ". URL ."feed.php");
        exit;
    }

}

}

?>