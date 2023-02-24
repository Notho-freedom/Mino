<?php
	/**
	* Notifications
	*/
	class Notification {
		
	
		public function __construct(){
						
		}
		
		public function notif_mess(){
			
			$nb_mess = 0;
			
			global $DB;
			
			$nb_mess = $DB->prepare("SELECT count(m.id) as nb
				FROM user u
				INNER JOIN relation r ON (r.id_from = u.id) OR (r.id_to = u.id)
				INNER JOIN messagerie m ON (m.id_from, m.id_to) = (r.id_from, r.id_to) OR (m.id_from, m.id_to) = (r.id_to, r.id_from)
				WHERE u.id = ? AND r.statut = 2 AND m.id_to = ? AND m.lu = 1 
				ORDER BY m.date_message DESC");
				
			$nb_mess->execute(array($_SESSION['id'], $_SESSION['id']));

			$nb_mess = $nb_mess->fetch();
			
            if(isset($nb_mess['nb'])){
                $nb_mess = (int) $nb_mess['nb'];
            }else{
                $nb_mess = 0;
            }
			
			if ($nb_mess == 0){
				
				return 0;
				
			}elseif($nb_mess > 999){
				
				return "+999";
					
			}else{
				
				return $nb_mess;
				
			}
		}




public function notif($title='Mino',$text="Welcome",$time='2',$mot='primary')
{


echo "


    <div class='notifications fixed-bottom right-100 p-3'>
      <div id='toastAutoHide' class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-bs-delay='".$time."000'  style='width: 100%; height: 50%;'>

        <div class='toast-header'>
          <span class='d-block bg-".$mot." fab rounded-circle me-2shadow me-2' style='width: 42px; height: 38px;text-align:center;color:white;border-radius:100px;font-size: 1.6em;font-family: Roman;background: rgb(2,0,36);background: linear-gradient(120deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);justify-content: center;padding-top: 1%;padding-left: 1px;'>M</i></span>
          <strong class='me-auto'>".$title."</strong><small>Just now</small>
        </div>

        <div class='toast-body bg-white'>
          ".$text."
        </div>

      </div>
    </div>



    <script>
      window.addEventListener('load', function () {
        Array.from(document.querySelectorAll('.toast'))
          .forEach(function (toastNode) {
            new Toast(toastNode)
          })

            Array.from(document.querySelectorAll('.toast'))
              .forEach(function (toastNode) {
                var toast = Toast.getInstance(toastNode)
                toast.show()
              })
      })
    </script>


    ";
}

public function notification()
{
  if (empty($_SESSION['mode'])) {
    $_SESSION['mode']='primary';
  }

  if (empty($_SESSION['title'])) {
    $_SESSION['title']='Mino';
  }


  if (empty($_SESSION['time'])) {
    $_SESSION['time']='2';
  }

	if (!empty($_SESSION['notification'])) {

echo "


    <div class='notifications fixed-bottom right-100 p-3'>
      <div id='toastAutoHide' class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-bs-delay='".$_SESSION['time']."000'  style='width: 100%; height: 50%;'>

        <div class='toast-header'>
          <span class='d-block bg-".$_SESSION['mode']." fab rounded-circle me-2shadow me-2' style='width: 42px; height: 38px;text-align:center;color:white;border-radius:100px;font-size: 1.6em;font-family: Roman;background: rgb(2,0,36);background: linear-gradient(120deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);justify-content: center;padding-top: 1%;padding-left: 1px;'>M</i></span>
          <strong class='me-auto'>".$_SESSION['title']."</strong><small>now</small>
        </div>
        <div class='toast-body bg-white'>
          ".$_SESSION['notification']."
        </div>
      </div>
    </div>



    <script>
      window.addEventListener('load', function () {
        Array.from(document.querySelectorAll('.toast'))
          .forEach(function (toastNode) {
            new Toast(toastNode)
          })

            Array.from(document.querySelectorAll('.toast'))
              .forEach(function (toastNode) {
                var toast = Toast.getInstance(toastNode)
                toast.show()
              })
      })
    </script>


    ";
    $_SESSION['notification']='';
	}
}

}
?>