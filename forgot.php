<?php
	include_once('include.php');	
	
	if (isset($_SESSION['guid'])){
		header('Location: ' . URL);
		exit;
	}
	
	if (!empty($_POST)) {
	    extract($_POST);
	    $valid = true;
	 	
	 	if (isset($_POST['fgt'])){
		 	
		 	$mail = htmlentities(trim($mail));
		 	
		 	if (empty($mail)) {
			 	
		        $valid = false;
		        $_SESSION['flash']['danger'] = "Il faut renseigner un mail valide";
		    }
		
		    //vérifie si l'email est valide
		    if (isset($mail) && !empty($mail)) {
		        if (!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)) {
		            $valid = FALSE;
		            $_SESSION['flash']['danger'] = "Le mail n'est pas valide";
		        }
		    }
		    if ($valid) {
		
		        $req = $DB->prepare("SELECT * from user where mail = ?");
		        $req->execute([$mail]);
		        	
		        $req = $req->fetch();

		        if (sizeof($req)>1) {
				
				if($req['new_password'] > 0){
					
					$_SESSION['flash']['danger'] = "Vous avez déjà fait une demande de nouveau mot de passe. Veuillez regarder votre boite mail ou contacter un responsable du site.";
					echo "<div class='alert-danger' style='text-align:center'>".$_SESSION['flash']['danger']."</div>";
					
				}else{
					
		        	if ($req['mail'] == $mail) {
			        	
			        	$_SESSION['flash']['success'] = "Vous allez recevoir un nouveau mot de passe !";
			        	echo "<div class='alert-sucess' style='text-align:center'>".$_SESSION['flash']['success']."</div>";
		
						$to = $mail;

						$password = new Password();
						
						$new_pass = $password->gen_reg_key();
						echo $new_pass;
						$new_pass1 = $password->password($new_pass); //crypt($new_pass, '$2a$07$DFGgdfSFsfg5fsd64dfCxsd5F0$');
						echo $new_pass1;
						
						$boundary = md5(uniqid(microtime(), TRUE));
						echo $boundary;
						
						$objet = 'Votre nouveau mot de passe sur Genesis Company';
		
						
						//=====Création du header de l'e-mail.
						$header = "From: A N S Y <CompanyGenesis@gmail.com> \n";
						$header .= "Reply-To: ".$to."\n";
						$header .= "MIME-version: 1.0\n";
						$header .= "Content-type: text/html; charset=utf-8\n";
						$header .= "Content-Transfer-Encoding: 8bit";
						//==========
						
						$contenu =	"<html>".
										"<head></head>".
										"<body style='padding: 0%; margin: 0; font-family: Helvetica, Arial , sans-serif'>".
											"<div bgcolor='#f7f7f7' style='background: white'>".
												"<div bgcolor='#22313F' style='background: white; padding: 20px'>".
													"<a href='https://ansy.genesis-compagnie.go.yj.fr' style='color: #e74c3c; text-decoration: none; font-weight: 100;font-size: 24px'> A N S Y </a>".
												"</div>".
												"<div style='background: white; padding: 2%'>".
													"<p style='text-align: center; font-size: 18px'><b>Bonjour ".$req['pseudo']."</b>,</p><br/>".
										            "<p style='text-align: justify'><i><b>Voici votre nouveau mot de passe : </b></i>".$new_pass."</p><br/>".
										            "<p style='text-align: justify'>Si ce n'est pas vous qui avait fait cette demande, veuillez contacter l'administrateur.</p>".
										            "<p style='text-align: justify'>Vous pouvez vous rendre dans vos paramètres pour modifier le mot de passe.</p><br/>".
										            "<p>À bientôt sur <a href='http://ansy.genesis-compagnie.go.yj.fr' style='color: #3A539B;text-decoration:none;outline: none'> A N S Y </a>.</p>".
										       	"</div>".
									        "</div>".
									    "</body>".
									"</html>";	
						
						mail($to, $objet, $contenu, $header);
				
		
						$req=$DB->prepare("UPDATE user SET password = ?, new_password = ? WHERE mail = ?");
						$req->execute([$new_pass1, 1, $mail]);
							
						$_SESSION['flash']['success'] = 'Un nouveau mot de passe vous a été envoyé !';
			            header('Location: ' . URL . 'forgot?n=');
			            exit;
			            
		        	} else {
			        	$_SESSION['flash']['warning'] = "L'adresse mail est incorrecte";
			        	echo "<div class='alert-warning' style='text-align:center'>".$_SESSION['flash']['warning']."</div>";
		        	}
		        }
		    }else{
			        	$_SESSION['flash']['warning'] = "L'adresse mail est incorrecte";
			        	echo "<div class='alert-warning' style='text-align:center'>".$_SESSION['flash']['warning']."</div>";
		        	}
		    }
	 	}   
	}

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<base href="<?= URL ?>"/>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title> A N S Y  | Mot de passe oublié</title>
        <?php
			include_once('_head/link.php');
			include_once('_head/script.php');
		?>
	</head>
	<body>
		<?php
			if (isset($_GET['n'])) {
				echo "<div class='alert-success' style='text-align:center'>".$_SESSION['flash']['success']."</div>";
			}

			include_once('first_navbar.php');
		?>
<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="POST">
						<div class="module-head">
							<h3>Mot de passe oublié</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
							<p><center><i>Un mail vous sera envoyé avec votre nouveau mot de passe</i></center></p>
                        	<input type="email" class="span12" name="mail" placeholder="Renseigner votre email" value="<?php if (isset($email)) echo $email; ?>" required="required">        
	                        <?php	
		                        if($_SERVER['SERVER_NAME'] == "genesis-compagnie"){
									if(isset($new_pass)){
		                            	echo ("</br>Mot de passe : ".$new_pass);
		                            }
		                        }
		                    ?></div></div></div>
							<div class="signin__body__btn__con">
								<button type="submit" name="fgt" class="btn btn-primary">Envoyer</button>
							</div>
	                    </form>
					</div>
				</div>
			</div>
		</div>
</div>
		<?php
			include_once('footer.php');
		?>
	</body>
</html>