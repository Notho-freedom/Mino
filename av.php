<?php
	session_start();
	include ('bd/connexionDB.php');
	include ('_function/domaine.php');
	
	$__Domain 			= new Domain;
	define("URL", $__Domain->domain());
	define("CURRENT_URL",  $__Domain->current_url());
	
	if (!isset($_SESSION['id'])){
		header('Location: ' . URL);
		exit;
	}

	
	if(!empty($_POST)){
		extract($_POST);
		$valid = true;
		
		if (isset($_POST['avatar'])){	
			
			if (isset($_FILES['avt']) and !empty($_FILES['avt']['name'])) {
				var_dump($_FILES);
				
				$filename = $_FILES['avt']['tmp_name'];
				
				list($width_orig, $height_orig) = getimagesize($filename);
				if($width_orig >= 500 && $height_orig >= 500 && $width_orig <= 6000 && $height_orig <= 6000){
	
			        $ListeExtension = array('jpg' => 'image/jpeg', 'jpeg'=>'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif');
					$ListeExtensionIE = array('jpg' => 'image/pjpg', 'jpeg'=>'image/pjpeg');
					$tailleMax = 5242880; // Taille maximum 5 Mo
					// 2mo  = 2097152
		            // 3mo  = 3145728
		            // 4mo  = 4194304
		            // 5mo  = 5242880
		            // 7mo  = 7340032
		            // 10mo = 10485760
		            // 12mo = 12582912
					$extensionsValides = array('jpg','jpeg'); // Format accepté
			        
					if ($_FILES['avt']['size'] <= $tailleMax){ // Si le fichier et bien de taille inférieur ou égal à 5 Mo
				        
						$extensionUpload = strtolower(substr(strrchr($_FILES['avt']['name'], '.'), 1)); // Prend l'extension après le point, soit "jpg, jpeg ou png"
				        
						if (in_array($extensionUpload, $extensionsValides)){ // Vérifie que l'extension est correct
					    						    	    
					        $dossier = "../public/avatars/" . $_SESSION['guid'] . "/";// On se place dans le dossier de la personne 
					        
					        if (!is_dir($dossier)){ // Si le nom de dossier n'existe pas alors on le crée
						        mkdir($dossier);
					        }			

					        $nom = md5(uniqid(rand(), true)); // Permet de générer un nom unique à la photo
							$chemin = "../public/avatars/" . $_SESSION['guid'] . "/" . $nom . "." . $extensionUpload; // Chemin pour placer la photo
							$resultat = move_uploaded_file($_FILES['avt']['tmp_name'], $chemin); // On fini par mettre la photo dans le dossier
					        
							if ($resultat){ // Si on a le résultat alors on va comprésser l'image
								
								if (is_readable("../public/avatars/" . $_SESSION['guid'] . "/" .$nom . "." . $extensionUpload)) {
										
									$verif_ext = getimagesize("../public/avatars/" . $_SESSION['guid'] . "/" .$nom . "." . $extensionUpload);
									
									// Vérification des extensions avec la liste des extensions autorisés
									if($verif_ext['mime'] == $ListeExtension[$extensionUpload]  || $verif_ext['mime'] == $ListeExtensionIE[$extensionUpload]){				
										
										// J'enregistre le chemin de l'image dans filename
										$filename = "../public/avatars/" . $_SESSION['guid'] . "/" .$nom . "." . $extensionUpload;
										
										// Vérification des extensions que je souhaite prendre
										if($extensionUpload == 'jpg' || $extensionUpload == 'jpeg' || $extensionUpload == "pjpg" || $extensionUpload == 'pjpeg'){
		                    				
		                   					$image2 = imagecreatefromjpeg($filename);
		                				}
										
										// Définition de la largeur et de la hauteur maximale
										$width2 = 500;
										$height2 = 500;
		
										list($width_orig, $height_orig) = getimagesize($filename);
										
										// Redimensionnement
										$image_p2 = imagecreatetruecolor($width2, $height2);
										imagealphablending($image_p2, false);
										imagesavealpha($image_p2, true);
	
										
										// Cacul des nouvelles dimensions
										$point2 = 0;							
										$ratio = null;
										if($width_orig <= $height_orig){
											$ratio = $width2 / $width_orig;
										}else if($width_orig > $height_orig){
											$ratio = $height2 / $height_orig;
		
										}
										
										$width2 = ($width_orig * $ratio) + 1;
										$height2 = ($height_orig * $ratio) + 1;									
										
										imagecopyresampled($image_p2, $image2, 0, 0, $point2, 0, $width2, $height2, $width_orig, $height_orig);
										
										imagedestroy($image2);
										
										
										if($extensionUpload == 'jpg' || $extensionUpload == 'jpeg' || $extensionUpload == "pjpg" || $extensionUpload == 'pjpeg'){
										
											// Content type
											header('Content-Type: image/jpeg');
										
											$exif = exif_read_data($filename);
											if(!empty($exif['Orientation'])) {
												switch($exif['Orientation']) { 
													case 8:
														$image_p2 = imagerotate($image_p2,90,0);
													break;
													case 3:
														$image_p2 = imagerotate($image_p2,180,0);
	
													break;
													case 6:
														$image_p2 = imagerotate($image_p2,-90,0);
	
													break;
												}
											}
											// Affichage
											imagejpeg($image_p2, "../public/avatars/" . $_SESSION['guid'] . "/" . $nom . "." . $extensionUpload, 75);
											imagedestroy($image_p2);
										}
										
										$imageBD = $DB->prepare("SELECT avatar
											FROM user 
											WHERE guid = ?");
								    	$imageBD->execute(array($_SESSION['guid']));
								    		 
								    	$imageBD = $imageBD->fetch(); 
								    	
								    	$_SESSION['avatar'] = $imageBD['avatar'];
										
										if(file_exists("../public/avatars/". $_SESSION['guid'] . "/" . $_SESSION['avatar']) && isset($_SESSION['avatar'])){
											unlink("../public/avatars/" . $_SESSION['guid'] . "/" . $_SESSION['avatar']);
										}	
										
										$req = $DB->prepare("UPDATE user SET avatar = ? where id = ?");
										$req->execute(array(($nom.".".$extensionUpload), $_SESSION['id']));
											
										$_SESSION['avatar'] = ($nom.".".$extensionUpload); // On met à jour l'avatar
										
										$_SESSION['notification'] = "Nouvel avatar enregistré !";
										header('Location: ' . URL .'feed.php');
										exit;
										
										////////////////FIN DE COMPRÉSSION DE L'IMAGE ENREGISTRÉE////////////////
										
									}else{
		                                $_SESSION['notification'] = "Le type MIME de l'image n'est pas bon";
		                                header('Location: ' . URL .'feed.php');
		                                exit;
		                            }
								}			        
							}else
								$_SESSION['notification'] = "Erreur lors de l'importation de votre photo.";
								header('Location: ' . URL .'feed.php');
								exit;
					        
						}else
							$_SESSION['notification'] = "Votre photo doit être au format jpg.";
							header('Location: ' . URL .'feed.php');
							exit;
				        
					}else
						$_SESSION['notification'] = "Votre photo de profil ne doit pas dépasser 5 Mo !";
						header('Location: ' . URL .'feed.php');
						exit;
				}else
					$_SESSION['notification'] = "Dimension de l'image minimum 400 x 400 et maximum 6000 x 6000 !";
					header('Location: ' . URL .'feed.php');
					exit;
			}else
				$_SESSION['notification'] = "Veuillez mettre une image !";
var_dump($_FILES);
				
		}elseif(isset($_POST['dltav'])){
			
			$imageBD = $DB->prepare("SELECT avatar 
				FROM user 
				WHERE guid = ?"); 
	    	$imageBD->execute(array($_SESSION['guid']));
	    		 
	    	$imageBD = $imageBD->fetch(); 
	    	
	    	$_SESSION['avatar'] = $imageBD['avatar']; 
			
			// Permet de supprimer une image dans un dossier 
			if(file_exists("../public/avatars/". $_SESSION['guid'] . "/" . $_SESSION['avatar']) && isset($_SESSION['avatar'])){
				
				unlink("../public/avatars/". $_SESSION['guid'] . "/" . $_SESSION['avatar']);
				rmdir("../public/avatars/". $_SESSION['guid'] . "/");
				
				$req = $DB->prepare("UPDATE user SET avatar = ? where  id = ?");
				$req->execute(array(NULL, $_SESSION['id']));
											
					$_SESSION['avatar'] = NULL; // On met à jour l'avatar	
			}
			
			$_SESSION['notification'] = "Votre avatar a été supprimé !";
			header('Location: ' . URL .'feed.php');
			exit;			
		}
	}

?>