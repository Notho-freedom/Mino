<?php
session_start();
  class connexionDB2 {
    private $host = 'localhost';
    private $name = 'sitederencontres';
    private $user = "root";
    private $pass = '';
    private $connexion;
  
    function __construct($host = null, $name = null, $user = null, $pass = null){
      if($host != null){
        $this->host = $host;
        $this->name = $name;
        $this->user = $user;
        $this->pass = $pass;
      }
      
      try{
        $this->connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->name,
        $this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8mb4', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
      }catch (PDOException $e){
        echo 'Erreur : Impossible de se connecter  à la BDD !';
        die();
      }
    }
    
    public function connexion(){
      return $this->connexion;
    }
  }

  $BDD = new connexionDB2();
  $DB = $BDD->connexion();
  		
			if(isset($_POST['id'])) {
				$id=(int)$_SESSION['id']+(int)$_POST['id'];
        echo $_SESSION['id'],$_POST['id'],$id;
				$req = $DB->prepare("INSERT INTO view (id, media_id) VALUES (?, ?)");
				$req->execute(array($id, $_POST['id']));
				
				if($req){

				$req = $DB->prepare("SELECT liked
					FROM statut
					WHERE id = ?");
				
				$req->execute(array($_POST['id']));
				$reqs = $req->fetch();

				$reqs['liked']+=1;

				$req = $DB->prepare("UPDATE statut set liked=? WHERE id = ?");
				$req->execute(array($reqs['liked'], $_POST['id']));

        echo "true";

				}else{
					die();
				}
			}