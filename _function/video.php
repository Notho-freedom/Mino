<?php
	class Video {

		private $name;
		private $type;
		private $tmp_name;
		private $error;
		private $size;

		public function __construct($p_file = ''){
			
			if(!isset($p_file)){
				return [];
			}

			if(isset($p_file['name'])){
				$this->name = $p_file['name'];	
			}
			
			if(isset($p_file['type'])){
				$this->type = $p_file['type'];
			}

			if(isset($p_file['tmp_name'])){
				$this->tmp_name = $p_file['tmp_name'];
			}

			if(isset($p_file['error'])){
				$this->error = $p_file['error'];
			}

			if(isset($p_file['size'])){
				$this->size = $p_file['size'];
			}
		}

		public function is_movie(){

					
		function move_movie($size,$tmp_name,$ext){

			global $DB;
			$nom = md5(uniqid(rand(), true));
			$dossier = "public/videos/" . $_SESSION['guid'] . "/";
			if (!is_dir($dossier)){mkdir($dossier);}
			$chemin = $dossier.$nom.$ext;
			$error="";
			if ($size<=5242880) {if (move_uploaded_file($tmp_name, $chemin)){
				$req = $DB->prepare("INSERT INTO video (pseudo_id, name, date_upload)VALUES (?, ?, ?)");
				$req->execute(array($_SESSION['id'], ($nom . $ext), date('Y-m-d H:i:s')));

				$error= "Your movie is uploaded!";
			}else {$error= "Sorry, your browser has not upload your movie. Please try again!";}} else {$error= "\nsize of movie is not acceptable!:: ".$_FILES['video']['size']."/5242880";}
			return $error;
			}


			if (!isset($this->name)) {
				return false;
			}

			$ext = array('.mp4','.avi', '.flv', '.wmv', '.mov', '.mkv');
			$j=0;
			for($i=0;$i<=5;$i++){$nfile_name = str_replace($ext[$i], "", $this->name);if ($nfile_name != $this->name) {$error = move_movie($this->size,$this->tmp_name,$ext[$i]);return $error;} else {$j+=1;}
			if ($j==5) {return false;}}
			
		}

	}
?>