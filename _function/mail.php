<?php
	/**
	* Send a mail
	*/
	class Email {
		
		public function __construct(){
			
		}
		
		public function send_mail($to, $subject, $message, $header){
			
			if(mail($to, $subject, $message, $header)){
				return true;
			}else{
				return false;
			}
				
		}

		public function comment_mail($pseudo_to, $pseudo_from, $contenu, $to){
			
			$subject = "Un Nouveau commentaire de ". $pseudo_to." sur ta publication!";
			
			//=====Création du header de l'e-mail.
			$header = "From: A N S Y <CompanyGenesis@gmail.com>\n";
			$header .= "MIME-version: 1.0\n";
	        $header .= "Content-type: text/html; charset=utf-8\n";
	        $header .= "Content-Transfer-Encoding: 8bit";

			//==========
			
			//=====Ajout du message au format HTML
	        $message = 	"<html>".
		    				"<head>" .
		    				'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">' .
		    				"</head>".
		    				"<style>
								html {
									height: 100%;
									box-sizing: border-box;
								}
								*,
								*:before,
								*:after {
								 	box-sizing: inherit;
								}
								body {
									margin: 0;
									position: relative;
									padding-bottom: 10rem;
									min-height: 100%;
								}
								.menu{
									color: #e74c3c;
									background: transparent;
									border-bottom: 1px solid #e74c3c;
									padding: 20px
								}
								footer{
									position: absolute; 
									right: 0; 
									bottom: 0; 
									left: 0; 
									padding: 2rem; 
									background: white; 
									border-top: 1px solid #e74c3c; 
									text-align: center;
								}
								.social-cust {
									border: 1px solid #e74c3c;
									border-radius: 50%;
									color: #e74c3c;
									font-size: 24px !important;
									padding: 10px;
									margin: 0 10px;
									width: 48px;
									transition: all 0.5s ease-out;
								}
								.social-cust:hover, .social-cust:focus {
									background: #e74c3c;
									color: white;
								}	
							</style>" .
							"<body style='padding: 0%; margin: 0; font-family: Helvetica, Arial , sans-serif'>".
								"<div bgcolor='#22313F' class='menu'>".
									"<a href='https://www.ansy.genesis-compagnie.go.yj.fr' style='color: #e74c3c; text-decoration: none; font-weight: 100;font-size: 24px'>A N S Y</a>".
								"</div>".
								"<div style='padding: 2%'>".
									"<p style='text-align: center; font-size: 18px'><b>Hey $pseudo_from,</b></p><br/>".
							        "<p>" . nl2br(trim($contenu)) . "</p><br/>" .
					
						        "</div>".
								
						        '<footer bgcolor="white">' .
									'<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter social-cust"></i></a>' .
									'<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook social-cust"></i></a>' .
									'<a href="https://google.com" target="_blank"><i class="fa fa-google-plus social-cust"></i></a>' .
								'</footer>' .
						    "</body>".
						"</html>";
			//==========
			
			if(isset($to)){
				Email::send_mail($to, $subject, $message, $header);
			}
		}

		public function like_mail($pseudo_to, $pseudo_from, $contenu, $to){
			
			$subject = "Nouvelle mention j'aime de " . $pseudo_to;
			
			//=====Création du header de l'e-mail.
			$header = "From: A N S Y <CompanyGenesis@gmail.com>\n";
			$header .= "MIME-version: 1.0\n";
	        $header .= "Content-type: text/html; charset=utf-8\n";
	        $header .= "Content-Transfer-Encoding: 8bit";

			//==========
			
			//=====Ajout du message au format HTML
	        $message = 	"<html>".
		    				"<head>" .
		    				'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">' .
		    				"</head>".
		    				"<style>
								html {
									height: 100%;
									box-sizing: border-box;
								}
								*,
								*:before,
								*:after {
								 	box-sizing: inherit;
								}
								body {
									margin: 0;
									position: relative;
									padding-bottom: 10rem;
									min-height: 100%;
								}
								.menu{
									color: #e74c3c;
									background: transparent;
									border-bottom: 1px solid #e74c3c;
									padding: 20px
								}
								footer{
									position: absolute; 
									right: 0; 
									bottom: 0; 
									left: 0; 
									padding: 2rem; 
									background: white; 
									border-top: 1px solid #e74c3c; 
									text-align: center;
								}
								.social-cust {
									border: 1px solid #e74c3c;
									border-radius: 50%;
									color: #e74c3c;
									font-size: 24px !important;
									padding: 10px;
									margin: 0 10px;
									width: 48px;
									transition: all 0.5s ease-out;
								}
								.social-cust:hover, .social-cust:focus {
									background: #e74c3c;
									color: white;
								}	
							</style>" .
							"<body style='padding: 0%; margin: 0; font-family: Helvetica, Arial , sans-serif'>".
								"<div bgcolor='#22313F' class='menu'>".
									"<a href='https://www.ansy.genesis-compagnie.go.yj.fr' style='color: #e74c3c; text-decoration: none; font-weight: 100;font-size: 24px'>A N S Y</a>".
								"</div>".
								"<div style='padding: 2%'>".
									"<p style='text-align: center; font-size: 18px'><b>Hey $pseudo_from,</b></p><br/>".
							        "<p style='text-align: justify;'>Une Nouvelle mention j'aime sur ta publication!</p>".
							        "<p>" . nl2br(trim($contenu)) . "</p><br/>" .
					
						        "</div>".
								
						        '<footer bgcolor="white">' .
									'<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter social-cust"></i></a>' .
									'<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook social-cust"></i></a>' .
									'<a href="https://google.com" target="_blank"><i class="fa fa-google-plus social-cust"></i></a>' .
								'</footer>' .
						    "</body>".
						"</html>";
			//==========
			
			if(isset($to)){
				Email::send_mail($to, $subject, $message, $header);
			}
		}


		public function welcome_mail($pseudo_to, $contenu, $to){
			
			$subject = " A N S Y , Bienvenue";
			
			//=====Création du header de l'e-mail.
			$header = "From: A N S Y <CompanyGenesis@gmail.com>\n";
			$header .= "MIME-version: 1.0\n";
	        $header .= "Content-type: text/html; charset=utf-8\n";
	        $header .= "Content-Transfer-Encoding: 8bit";

			//==========
			
			//=====Ajout du message au format HTML
	        $message = 	"<html>".
		    				"<head>" .
		    				'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">' .
		    				"</head>".
		    				"<style>
								html {
									height: 100%;
									box-sizing: border-box;
								}
								*,
								*:before,
								*:after {
								 	box-sizing: inherit;
								}
								body {
									margin: 0;
									position: relative;
									padding-bottom: 10rem;
									min-height: 100%;
								}
								.menu{
									color: #e74c3c;
									background: transparent;
									border-bottom: 1px solid #e74c3c;
									padding: 20px
								}
								footer{
									position: absolute; 
									right: 0; 
									bottom: 0; 
									left: 0; 
									padding: 2rem; 
									background: white; 
									border-top: 1px solid #e74c3c; 
									text-align: center;
								}
								.social-cust {
									border: 1px solid #e74c3c;
									border-radius: 50%;
									color: #e74c3c;
									font-size: 24px !important;
									padding: 10px;
									margin: 0 10px;
									width: 48px;
									transition: all 0.5s ease-out;
								}
								.social-cust:hover, .social-cust:focus {
									background: #e74c3c;
									color: white;
								}	
							</style>" .
							"<body style='padding: 0%; margin: 0; font-family: Helvetica, Arial , sans-serif'>".
								"<div bgcolor='#22313F' class='menu'>".
									"<a href='https://www.ansy.genesis-compagnie.go.yj.fr' style='color: #e74c3c; text-decoration: none; font-weight: 100;font-size: 24px'>A N S Y</a>".
								"</div>".
								"<div style='padding: 2%'>".
									"<p style='text-align: center; font-size: 18px'><b>$pseudo_to,</b></p><br/>".
							        "<p>" . nl2br(trim($contenu)) . "</p><br/>" .
							        "<p style='text-align: justify;'>Connecte-toi sur <a href='https://ansy.genesis-compagnie.go.yj.fr' target='_blank'>A N S Y</a>.</p><br/> et discute avec qui tu veut de ce que tu veut!".
					
						        "</div>".
								
						        '<footer bgcolor="white">' .
									'<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter social-cust"></i></a>' .
									'<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook social-cust"></i></a>' .
									'<a href="https://google.com" target="_blank"><i class="fa fa-google-plus social-cust"></i></a>' .
								'</footer>' .
						    "</body>".
						"</html>";
			//==========
			
			if(isset($to)){
				Email::send_mail($to, $subject, $message, $header);
			}
		}
		
		public function message_mail($pseudo_to, $pseudo_from, $contenu, $to){
			
			$subject = "Message : dernier message de " . $pseudo_to;
			
			//=====Création du header de l'e-mail.
			$header = "From: A N S Y <CompanyGenesis@gmail.com>\n";
			$header .= "MIME-version: 1.0\n";
	        $header .= "Content-type: text/html; charset=utf-8\n";
	        $header .= "Content-Transfer-Encoding: 8bit";

			//==========
			
			//=====Ajout du message au format HTML
	        $message = 	"<html>".
		    				"<head>" .
		    				'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">' .
		    				"</head>".
		    				"<style>
								html {
									height: 100%;
									box-sizing: border-box;
								}
								*,
								*:before,
								*:after {
								 	box-sizing: inherit;
								}
								body {
									margin: 0;
									position: relative;
									padding-bottom: 10rem;
									min-height: 100%;
								}
								.menu{
									color: #e74c3c;
									background: transparent;
									border-bottom: 1px solid #e74c3c;
									padding: 20px
								}
								footer{
									position: absolute; 
									right: 0; 
									bottom: 0; 
									left: 0; 
									padding: 2rem; 
									background: white; 
									border-top: 1px solid #e74c3c; 
									text-align: center;
								}
								.social-cust {
									border: 1px solid #e74c3c;
									border-radius: 50%;
									color: #e74c3c;
									font-size: 24px !important;
									padding: 10px;
									margin: 0 10px;
									width: 48px;
									transition: all 0.5s ease-out;
								}
								.social-cust:hover, .social-cust:focus {
									background: #e74c3c;
									color: white;
								}	
							</style>" .
							"<body style='padding: 0%; margin: 0; font-family: Helvetica, Arial , sans-serif'>".
								"<div bgcolor='#22313F' class='menu'>".
									"<a href='https://www.ansy.genesis-compagnie.go.yj.fr' style='color: #e74c3c; text-decoration: none; font-weight: 100;font-size: 24px'>A N S Y</a>".
								"</div>".
								"<div style='padding: 2%'>".
									"<p style='text-align: center; font-size: 18px'><b>Bonjour $pseudo_from,</b></p><br/>".
							        "<p style='text-align: justify;'>Voici le dernier message que tu as reçu de </p>".
							        "<p>" . nl2br(trim($contenu)) . "</p><br/>" .
							        "<p style='text-align: justify;'>Pour répondre au message, connecte-toi sur <a href='https://ansy.genesis-compagnie.go.yj.fr' target='_blank'>A N S Y</a>.</p><br/>".
					
						        "</div>".
								
						        '<footer bgcolor="white">' .
									'<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter social-cust"></i></a>' .
									'<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook social-cust"></i></a>' .
									'<a href="https://google.com" target="_blank"><i class="fa fa-google-plus social-cust"></i></a>' .
								'</footer>' .
						    "</body>".
						"</html>";
			//==========
			
			if(isset($to)){
				Email::send_mail($to, $subject, $message, $header);
			}
		}
		
		public function change_password_mail($pseudo, $contenu, $to){
			
			$subject = "Changement de mot de passe";
			
			//=====Création du header de l'e-mail.
			$header = "From: A N S Y <CompanyGenesis@gmail.com>\n";
			$header .= "MIME-version: 1.0\n";
	        $header .= "Content-type: text/html; charset=utf-8\n";
	        $header .= "Content-Transfer-Encoding: 8bit";

			//==========
			
			//=====Ajout du message au format HTML
	        $message = 	"<html>".
		    				"<head>" .
		    				'<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">' .
		    				"</head>".
		    				"<style>
								html {
									height: 100%;
									box-sizing: border-box;
								}
								*,
								*:before,
								*:after {
								 	box-sizing: inherit;
								}
								body {
									margin: 0;
									position: relative;
									padding-bottom: 10rem;
									min-height: 100%;
								}
								.menu{
									color: #e74c3c;
									background: transparent;
									border-bottom: 1px solid #e74c3c;
									padding: 20px
								}
								footer{
									position: absolute; 
									right: 0; 
									bottom: 0; 
									left: 0; 
									padding: 2rem; 
									background: white; 
									border-top: 1px solid #e74c3c; 
									text-align: center;
								}
								.social-cust {
									border: 1px solid #e74c3c;
									border-radius: 50%;
									color: #e74c3c;
									font-size: 24px !important;
									padding: 10px;
									margin: 0 10px;
									width: 48px;
									transition: all 0.5s ease-out;
								}
								.social-cust:hover, .social-cust:focus {
									background: #e74c3c;
									color: white;
								}	
							</style>" .
							"<body style='padding: 0%; margin: 0; font-family: Helvetica, Arial , sans-serif'>".
								"<div bgcolor='#22313F' class='menu'>".
									"<a href='https://www.ansy.genesis-compagnie.go.yj.fr' style='color: #e74c3c; text-decoration: none; font-weight: 100;font-size: 24px'>A N S Y</a>".
								"</div>".
								"<div style='padding: 2%'>".
									"<p style='text-align: center; font-size: 18px'><b>Bonjour $pseudo,</b></p><br/>".
							        "<p style='text-align: justify;'>Voici votre nouveau mot de passe suite à votre changement de ce dernier sur notre site.</p>".
							        "<p>" . nl2br(trim($contenu)) . "</p><br/>" .
							        "<p style='text-align: justify;'>Attention ! Votre mot de passe est personnel. Jamais un administrateur ou un modérateur ne vous demandera votre mot de passe.</p><br/>".

							        "<p style='text-align: justify;'>Si ce n'est pas vous qui avez fait ce changement veuillez changer à nouveau de mot de passe ou contacter les administrateurs ou modérateurs.</p><br/>".
					
						        "</div>".
								
						        '<footer bgcolor="white">' .
									'<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter social-cust"></i></a>' .
									'<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook social-cust"></i></a>' .
									'<a href="https://google.com" target="_blank"><i class="fa fa-google-plus social-cust"></i></a>' .
								'</footer>' .
						    "</body>".
						"</html>";
			//==========
			
			if(isset($to)){
				Email::send_mail($to, $subject, $message, $header);
			}
		}
	}