<?php
	class User {

		private $id;
		public $guid;
		private $pseudo;		
		private $email;
		private $role;
		
		private $valid;
		private $err_pseudo;
		private $err_mail;
		private $err_password;
		private $err_birthday;
		private $err_sex;
		private $err_ville;

		public function __construct($guid = 0){

			global $DB;

			$guid = (String) $guid;

			if($guid <= 0){
				return [];
			}
			
			$req = $DB->prepare("SELECT id, pseudo, guid, mail, avatar, role
				FROM user
				WHERE guid = ?");

			$req->execute([$guid]);

			$req = $req->fetch();

			if(!isset($req['id'])){
				return [];
			}
			
			$this->id = $req['id'];
			$this->pseudo = $req['pseudo'];
			$this->guid = $req['guid'];
			$this->email = $req['mail'];
			$this->avatar = $req['avatar'];
			$this->role = $req['role'];
		}
		
		public function getID(){
			return $this->id;
		}

		public function getPseudo(){
			return $this->pseudo;
		}

		public function getRole(){
			return $this->role;
		}

		public function form_inscription($p_pseudo,$p_spseudo, $p_mail, $p_psw,$p_day, $p_month, $p_year,$p_sex,$p_actu){
			global $DB;
			global $__GUID;
			global $__Crypt_password;
			
			$p_pseudo	= (String) trim($p_pseudo);
			$p_spseudo	= (String) trim($p_spseudo);
			$p_mail		= (String) strtolower(trim($p_mail));
			$p_psw 		= (String) trim($p_psw);
			$p_sex 		= (int) trim($p_sex);
			$p_day 		= (int) trim($p_day);
			$p_month 	= (int) trim($p_month);
			$p_year 	= (int) trim($p_year);
			$p_actu 		= (String) trim($p_actu);

			$this->err_pseudo = (String) '';
			$this->err_spseudo = (String) '';
			$this->err_mail = (String) '';
			$this->err_password = (String) '';
			$this->err_birthday = (String) '';
			$this->err_sex = (String) '';
			$this->err_actu = (String) '';

			$this->valid = (boolean) true;

			$this->verif_pseudo($p_pseudo);
			$this->verif_pseudo($p_spseudo);
			$this->verif_mail($p_mail);
			$this->verify_password($p_psw);
			$this->verify_birthday($p_day, $p_month, $p_year);
			$this->verify_sex($p_sex);

			if($this->valid){
				$code = $__Crypt_password->gen_reg_key();
				
				$crytp_password = $__Crypt_password->crypt_pass($p_psw);

				$unique_guid = $__GUID->check_guid();	
				
				$date_registration_connection = date('Y-m-d H:i:s');
				
				$req = $DB->prepare("INSERT INTO user (guid, nom ,pseudo , sexe, birthday, 
					mail, password, date_registration, date_connection, code, actu) VALUES 
					(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
					
				$req->execute([$unique_guid, $p_pseudo, $p_spseudo, $p_sex, ($p_year . "-" . $p_month . "-" . $p_day),$p_mail, $crytp_password, $date_registration_connection, $date_registration_connection,$code,$p_actu]);
				
				$_SESSION['notification'] = "Votre compte a bien ??t?? cr????.";
				header('Location:' . CURRENT_URL);
				exit;
			}	

			return [$this->err_pseudo,$this->err_spseudo, $this->err_mail, $this->err_password, $this->err_birthday, $this->err_sex];

		}
		
		public function form_connexion($p_mail, $p_psw, $p_remember){
			global $DB;
			global $__Crypt_password;
			global $__Crypto;
			global $__Email;
			global $__Secret__key;
			
			$p_mail = (String) htmlentities(trim($p_mail));
			$p_psw = (String) trim($p_psw);
			$p_remember = (int) trim($p_remember);
			
			$this->err_mail = (String) '';
			$this->err_password = (String) '';

			$this->valid = (boolean) true;
			
			$req = $DB->prepare("SELECT * 
				FROM user 
				WHERE mail = ?");
			$req->execute([$p_mail]);
	
			$signin = $req->fetch();
			
			if(!isset($signin['id'])){
				$this->valid = false;
				$this->err_mail = "Mail or password is incorrect.";
			
			}elseif(!password_verify($p_psw, $signin['password'])){
				$this->valid = false;
				$this->err_mail = "Mail or password is incorrect.";

			}elseif(isset($signin['id']) && $signin['state'] > 1){
				$this->valid = false;
				$this->err_mail = "Votre compte a ??t?? bloqu??, veuillez essayer plus tard.";
			}
			
			if($this->valid){
				$update_date_connection = date('Y-m-d H:i:s');
				
				if ($signin['state'] == 1){
					$req = $DB->prepare("UPDATE user SET date_connection = ?, state = ? WHERE id = ?");
					$req->execute(array($update_date_connection, 0, $signin['id']));
				
				}else{
					$req = $DB->prepare("UPDATE user SET date_connection = ? WHERE id = ?");
					$req->execute(array($update_date_connection, $signin['id']));
				}	
								
				$_SESSION['id']					= $signin['id']; // id pour les requ??tes 
				$_SESSION['guid'] 				= $signin['guid']; // id public
				$_SESSION['name'] 			= $signin['pseudo'];
				$_SESSION['surname'] 			= $signin['nom'];
				$_SESSION['sexe'] 				= $signin['sexe'];
				$_SESSION['birthday'] 			= $signin['birthday'];
				$_SESSION['mail'] 				= $signin['mail'];
				$_SESSION['avatar']				= $signin['avatar'];
				$_SESSION['date_connection'] 	= $update_date_connection;	
				$_SESSION['code']				= $signin['code'];
				$_SESSION['actu']				= $signin['actu'];

					
				if(isset($p_remember)){			
					setcookie("comail", urlencode($_SESSION['mail']), time()+60*60*24*100, "/");  
					setcookie("copassword", $__Crypto::encryptWithPassword($p_psw, $__Secret__key), time()+60*60*24*100, "/");  
				} else {
					setcookie("comail", NULL , -1, "/");  
					setcookie("copassword", NULL , -1, "/");  
				}
				
				if ($signin['state']==1) {
					$_SESSION['notification'] = "Bon retour " . $_SESSION['name']."!";
				} else {
					$message=" Bienvenue sur Felix";
					$_SESSION['notification']=$_SESSION['name']." ".$_SESSION['surname']." Bienvenue sur Felix";
				//$__Email->welcome_mail($signin['pseudo'],$message,$signin['mail']);
				}

				header('Location: ' . URL . 'feed.php');
				exit;
			
			}else{
				return [$this->err_mail, $this->err_password];	
			}
		}

		public function form_modification_user($p_pseudo, $p_mail){
			global $DB;

			$p_pseudo = (String) trim($p_pseudo);
			$p_mail = (String) trim($p_mail);
			

			$this->err_pseudo = (String) '';
			$this->err_mail = (String) '';

			$this->valid = (boolean) true;

			$this->verif_pseudo($p_pseudo);
			$this->verif_mail($p_mail);

			if($this->valid){
				$req = $DB->prepare("UPDATE user SET pseudo = ?, mail = ? 
					WHERE guid = ?");
				$req->execute(array($p_pseudo, $p_mail, $_SESSION['guid']));	
				
				$_SESSION['pseudo'] = $p_pseudo;
				$_SESSION['mail'] 	= $p_mail;
				
				$_SESSION['notification'] = "Modifications du profil effectu??es !";
			}

			return [$this->err_pseudo, $this->err_mail,$_SESSION['notification']];
		}


		public function form_change_password($p_oldpsd, $p_newpsd, $p_confpsw){
			global $DB;
			global $__Crypt_password;
			global $__Email;

			$p_oldpsd = trim($p_oldpsd);
			$p_newpsd = trim($p_newpsd);
			$p_confpsw = trim($p_confpsw);

			$this->err_password = (String) '';
			
			$this->valid = (boolean) true;
			
			if(empty($p_oldpsd)){
				$this->valid = false;
				$this->$err_password = "Il faut renseigner votre mot de passe actuel";
			
			}elseif(!$this->getPassword($p_oldpsd)){
				$this->valid = false;
				$this->err_password = "Le mot de passe actuel n'est correct";

			}else{
				$this->verify_password($p_newpsd);
			}

			if ($this->valid){

				$crytp_password = $__Crypt_password->crypt_pass($p_newpsd);

				$req = $DB->prepare("UPDATE user SET password = ? WHERE guid = ?");
				$req->execute(array($crytp_password, $_SESSION['guid']));
				
				$__Email->change_password_mail($_SESSION['pseudo'], $newpsd, $_SESSION['mail']);

				$_SESSION['flash']['success'] = "Votre mot de passe a bien ??t?? chang??";
				header('Location:' . CURRENT_URL);
				exit;
			}

			return [$this->err_password];

		}

		public function getPassword($p_password){
			global $DB;

			if(!isset($_SESSION['id'])){
				return false;
			}

			$req = $DB->prepare("SELECT id, password
				FROM user 
				WHERE id = ?");

			$req->execute([$_SESSION['id']]);

			$req = $req->fetch();

			if(!$req){
				return false;
			}

			if(!password_verify($p_password, $req['password'])){
				return false;
			}

			return true;
		}
		
		public function getAvatar($p_guid){
			global $DB;
			
			$chemin_avatar = NULL;
			
			$req = $DB->prepare("SELECT guid, avatar, sexe
				FROM user 
				WHERE guid = ?");
				
			$req->execute(array($p_guid));
			
			$req = $req->fetch();
			
			if(isset($req['guid']) && (file_exists(__DIR__ . "/../public/avatars/" . $req['guid'] . "/" . $req['avatar']))){
				$chemin_avatar = "public/avatars/" . $req['guid'] . "/" . $req['avatar'] ; 
			}elseif($req['sexe'] == 1){
				$chemin_avatar = "public/avatars/defaults/man.svg";
			}else{
				$chemin_avatar = "public/avatars/defaults/women.svg";
			}
			
			return $chemin_avatar;
		}
		
		public function verif_pseudo($p_pseudo){
			global $DB;
			global $__Insulte;

			$p_pseudo = trim($p_pseudo);
			
			if(empty($p_pseudo)){
				$this->valid = false;
				$this->err_pseudo = "Le nom d'utilisateur ne peut pas ??tre vide";
				
			}elseif(grapheme_strlen($p_pseudo) < 4){
				$this->valid = false;
				$this->err_pseudo = "Le pseudo doit ??tre compris entre 4 et 20 caract??res";
			
			}elseif(grapheme_strlen($p_pseudo) > 20){
				$this->valid = false;
				$this->err_pseudo = "Le pseudo doit faire moins de 21 caract??res. (" . grapheme_strlen($p_pseudo) . "/21)";
				
			}elseif($__Insulte->insulte(strtolower($p_pseudo))){
				$this->valid = false;
				$this->err_pseudo = "Le pseudo ne peut pas ??tre une insulte";
			}	
		}
		
		public function verif_mail($p_mail){
			global $DB;

			$p_mail = strtolower(trim($p_mail));
			
			if(empty($p_mail)){
				$this->valid = false;
				$this->err_mail = "Veuillez renseigner ce champ";
				
			}elseif(!preg_match("/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/", $p_mail)) {
				$this->valid = false;
				$this->err_mail = "Le mail n'est pas valide";
			
			}else{
				if(isset($_SESSION['id'])){
					$req = $DB->prepare("SELECT id 
						FROM user 
						WHERE mail = ? AND id <> ?");

					$req->execute([$p_mail, $_SESSION['id']]);
				}else{
					$req = $DB->prepare("SELECT id 
						FROM user 
						WHERE mail = ?");
						
					$req->execute(array($p_mail));
				}

				$req = $req->fetch();

				if(isset($req['id'])){
					$this->valid = false;
					$this->err_mail = "Ce mail existe d??j??";
				}
			}
		}
		
		public function verify_password($p_password){
			
			// Il faut au minimum : 
			//  - 1 Majuscule
			//  - 1 Minuscule
			//  - 1 chiffre
			//  - 1 caract??re sp??cial
			$uppercase = preg_match('@[A-Z]@', $p_password);
			$lowercase = preg_match('@[a-z]@', $p_password);
			$number    = preg_match('@[0-9]@', $p_password);
			$specialChars = preg_match('@[^\w]@', $p_password);

			if(empty($p_password)) {
				$this->valid = false;
				$this->err_password = "Le mot de passe ne peut pas ??tre vide";
			
			}elseif(grapheme_strlen($p_password) < 7) {
				$this->valid = false;
				$this->err_password = "Le mot de passe doit faire plus de 7 caract??res";
				
			}elseif(!$uppercase){
				$this->valid = false;
				$this->err_password = "Le mot de passe doit contenir au minimum 1 majuscule";

			}elseif(!$lowercase){
				$this->valid = false;
				$this->err_password = "Le mot de passe doit contenir au minimum 1 minuscule";

			}elseif(!$number){
				$this->valid = false;
				$this->err_password = "Le mot de passe doit contenir au minimum 1 chiffre";

			}elseif(!$specialChars){
				$this->valid = false;
				$this->err_password = "Le mot de passe doit contenir au minimum 1 caract??re sp??ciale";

			}
		}

		public function verify_birthday($p_day, $p_month, $p_year){

			if((!isset($p_day) && empty($p_day)) || (!isset($p_month) && empty($p_month)) || (!isset($p_year) && empty($p_year))){
				$this->valid = false;
				$this->err_birthday = "Entrez une date de naissance valide";
	
			}elseif(($p_day < 0 || $p_day > 31) || !preg_match("/^[0-9]{1,2}$/u", $p_day)){
				$this->valid = false;
				$this->err_birthday = "Le jour est compris entre 1 et 31";
				
			}elseif(($p_month < 0 || $p_month > 12) || !preg_match("/^[0-9]{1,2}$/u", $p_month)){
				$this->valid = false;
				$this->err_birthday = "Le mois est compris entre 1 et 12";
				
			}elseif(($p_year < date('Y', strtotime(date('Y-m-d') . '-80 years')) || $p_year > date('Y', strtotime(date('Y-m-d') . '-18 years'))) || !preg_match("/^[0-9]{4}$/u", $p_year)){
				$this->valid = false;
				$this->err_birthday = "L'ann??e est compris entre " . date('Y', strtotime(date('Y-m-d') . '-80 years')) . " et " . date('Y', strtotime(date('Y-m-d') . '-18 years')) . "";
				
			}elseif(!checkdate($p_month, $p_day, $p_year)){
				$this->valid = false;
				$this->err_birthday = "Entrez une date de naissance valide";
				
			}
		}

		public function verify_sex($p_sex){

			if(!in_array($p_sex, [1, 2, 3])) {
				$this->valid = false;
				$this->err_sex = "Ce champ ne peut pas ??tre vide";
			}
		}

		public function verify_ville($p_ville){
			global $DB;

			if(empty($p_ville)){
				$this->valid = false;
				$this->err_ville = "Veuillez renseigner une ville";
				
			}else{
				
				$rt_ville = explode(", ", $p_ville);
				
				if(!in_array(count($rt_ville), array(1, 2))){
					$this->valid = false;
					$this->err_ville = "La ville n'existe pas";
				}else{
					switch(count($rt_ville)){
						case 1:
							$ville_name = $rt_ville[0];
														
							$req_ville = $DB->prepare("SELECT v.ville_nom_reel as a, d.departement_nom as b, v.ville_id as c, d.departement_code as d 
									FROM villes_france v, departement d 
									WHERE d.departement_code = v.ville_departement AND ville_nom_reel = ? 
									LIMIT 1");
							$req_ville->execute(array($ville_name));
							
							$req_ville = $req_ville->fetch();
							
							if (isset($req_ville['a']) && isset($req_ville['b'])){
								$id_ville = $req_ville['c'];
								$code_dep = $req_ville['d'];

								return [$code_dep, $id_ville];
							}else{
								$this->valid = false;
								$this->err_ville = "La ville n'existe pas";
							}
						break;
						
						case 2:
							$ville_name = $rt_ville[0];
							$dep_name = $rt_ville[1];
							
							$req_ville = $DB->prepare("SELECT v.ville_nom_reel as a, d.departement_nom as b, v.ville_id as c, d.departement_code as d 
									FROM villes_france v, departement d 
									WHERE d.departement_code = v.ville_departement AND ville_nom_reel = ? 
									AND d.departement_nom = ? 
									LIMIT 1");
							$req_ville->execute(array($ville_name, $dep_name));
							
							$req_ville = $req_ville->fetch();
							
							if (isset($req_ville['a']) && isset($req_ville['b'])){
								$id_ville = $req_ville['c'];
								$code_dep = $req_ville['d'];

								return [$code_dep, $id_ville];
							}else{
								$this->valid = false;
								$this->err_ville = "La ville n'existe pas";
							}
						break;
						
						default:
							$this->valid = false;
							$this->err_ville = "La ville n'existe pas";
						break;
					}
				}
			}
		}
	}
?>