<?php include_once('include.php');

  if(!isset($_SESSION['id'])){header('Location: ' . URL);}
  echo "
<script type='text/javascript'>
  setTimeout(function(){
    ".$__Notification->notification()."
  },1000);
</script>
  ";
 ?>
 <script type='text/javascript'>


function like(e) {
var id=e.target.id;
var idf=id+'l';
var xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      console.log(this.response);
      var a="<span>"+this.response+" </span>";
        if (this.response.length!=0) {
            document.getElementById(idf).innerHTML=a;
        }
    }

};

xhttp.open("POST", "like.php?id="+id, true);
xhttp.send("id="+id);

}

function comments(e) {
}



function com(id) {
var idr = id+'r';
var xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
        if (this.response.length<10) {
            document.getElementById(idr).innerHTML=this.response;
        }
    }

};

xhttp.open("POST", "comments.php?st_id="+id+"&comment="+comment, true);
xhttp.send();

}


function test_video(e,s) {

    var file=e.target.files;
    console.log(e);
    console.log(e.target);
    console.log(file);
    console.log(file[0]);
    console.log(file[0]['type']);

if (
  (file[0]['type'] != "video/mp4")&&
  (file[0]['type'] != "video/mkv")&&
  (file[0]['type'] != "video/avi")&&
  (file[0]['type'] != "video/webm")&&
  (file[0]['type'] != "video/flv")&&
  (file[0]['type'] != "video/wmv")&&
  (file[0]['type'] != "video/mov")
   ){
        if (s!=0) {
          window.alert("ce fichier n'est pas une video!");
        }
    return false;
    }else{
      document.getElementById('post').placeholder='fichier(s) sélectionné(s)!';
      return true;
    }
}



function test_image(e,s) {

    var file=e.target.files;
    console.log(e);
    console.log(e.target);
    console.log(file);
    console.log(file[0]);
    console.log(file[0]['type']);

if (
    (file[0]['type'] != 'image/jpg')&&
    (file[0]['type'] != 'image/jpeg')&&
    (file[0]['type'] != 'image/png')&&
    (file[0]['type'] != 'image/gif')
   ){
        if (s!=0) {
          window.alert("ce fichier n'est pas une image!");
        }
    return false;
    }else{
      document.getElementById('post').placeholder='fichier(s) sélectionné(s)!';
      return true;
    }
}


function test_images_videos(e) {

  if (!test_image(e,0)) {
    if (!test_video(e,0)) {
    window.alert("ce fichier n'est pas un media acceptable!");
      return false;
    }else{
      window.alert('fichier(s) sélectionné(s)!');
      return true;
    }
  }else{
      window.alert('fichier(s) sélectionné(s)!');
      return true;
    }
  
}


function color() {
  console.log("open");
  var color='';
  color=document.getElementById('text-color').value;
  console.log(color);
  document.getElementById('imc').style.border="3px solid "+color;
}
</script>

    <title>Mino</title>
  </head>
  <body class="bg-gray postion-relative">
    <!-- ================= Appbar ================= -->
    <div
      class="bg-white d-flex align-items-center fixed-top shadow"
      style="min-height: 56px; z-index: 5"
    >
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- search -->
          <div class="col d-flex align-items-center">
            <!-- logo -->
            
            <i class="fab rounded-circle me-2shadow" style='width: 42px; height: 38px;text-align:center;color:white;border-radius:100px;font-size: 1.6em;font-family: Roman;background: rgb(2,0,36);
background: linear-gradient(120deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);justify-content: center;padding-top: 1%;padding-left: 1px;'>M</i>
            <!-- search bar -->
            <div class="input-group ms-2" type="button">
              <!-- mobile -->
              <span
                class="input-group-prepend d-lg-none"
                id="searchMenu"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                data-bs-auto-close="outside"
              >
                <div
                  class="input-group-text bg-gray border-0 rounded-circle"
                  style="min-height: 40px"
                >
                  <i class="fas fa-search text-muted"></i>
                </div>
              </span>
              <!-- desktop -->
              <span
                class="input-group-prepend d-none d-lg-block"
                id="searchMenu"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                data-bs-auto-close="outside"
              >
                <div
                  class="input-group-text bg-gray border-0 rounded-pill"
                  style="min-height: 40px; min-width: 230px"
                >
                  <i class="fas fa-search me-2 text-muted"></i>
                  <p class="m-0 fs-7 text-muted">Search Mino..</p>
                </div>
              </span>
              <!-- search menu -->
              <ul
                class="dropdown-menu overflow-auto border-0 shadow p-3"
                aria-labelledby="searchMenu"
                style="width: 20em; max-height: 600px"
              >
                <!-- search input -->
                <li>
                  <input
                    type="text"
                    class="rounded-pill border-0 bg-gray dropdown-item"
                    placeholder="Search Mino..."
                    style="background-color: transparent !important;border: none !important;border-color: transparent !important;"
                    autofocus
                  />
                </li>
                <!-- search 1 -->
                <li class="my-4">
                  <div
                    class="
                      alert
                      fade
                      show
                      dropdown-item
                      p-1
                      m-0
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                    role="alert"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="https://source.unsplash.com/random/1"
                        alt="avatar"
                        class="rounded-circle me-2"
                        style="width: 35px; height: 35px; object-fit: cover"
                      />
                      <p class="m-0">Lorem ipsum</p>
                    </div>
                    <button
                      type="button"
                      class="btn-close p-0 m-0"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                  </div>
                </li>
                <!-- search 2 -->
                <li class="my-4">
                  <div
                    class="
                      alert
                      fade
                      show
                      dropdown-item
                      p-1
                      m-0
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                    role="alert"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="https://source.unsplash.com/random/2"
                        alt="avatar"
                        class="rounded-circle me-2"
                        style="width: 35px; height: 35px; object-fit: cover"
                      />
                      <p class="m-0">Lorem ipsum</p>
                    </div>
                    <button
                      type="button"
                      class="btn-close p-0 m-0"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                  </div>
                </li>
                <!-- search 3 -->
                <li class="my-4">
                  <div
                    class="
                      alert
                      fade
                      show
                      dropdown-item
                      p-1
                      m-0
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                    role="alert"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="https://source.unsplash.com/random/3"
                        alt="avatar"
                        class="rounded-circle me-2"
                        style="width: 35px; height: 35px; object-fit: cover"
                      />
                      <p class="m-0">Lorem ipsum</p>
                    </div>
                    <button
                      type="button"
                      class="btn-close p-0 m-0"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- nav -->
          <div class="col d-none d-xl-flex justify-content-center">
            <!-- home -->
            <div class="mx-4 nav__btn nav__btn-active">
              <button type="button" class="btn px-4">
                <i class="fas fa-home text-muted fs-4"></i>
              </button>
            </div>
            <!-- market -->
            <div class="mx-4 nav__btn">
              <button type="button" class="btn px-4">
                <i class="fas fa-store text-muted fs-4"></i>
              </button>
            </div>
            <!-- group -->
            <div class="mx-4 nav__btn">
              <button type="button" class="btn px-4">
                <i
                  type="button"
                  class="position-relative fas fa-users text-muted fs-4"
                >
                  <span
                    class="
                      position-absolute
                      top-0
                      start-100
                      translate-middle
                      badge
                      rounded-pill
                      bg-danger
                    "
                    style="font-size: 0.5rem"
                  >
                    1
                    <span class="visually-hidden"></span>
                  </span>
                </i>
              </button>
            </div>
            <!-- gaming -->
            <div class="mx-4 nav__btn">
              <button type="button" class="btn px-4">
                <i class="fas fa-gamepad text-muted fs-4"></i>
              </button>
            </div>
          </div>
          <!-- menus -->
          <div class="col d-flex align-items-center justify-content-end">
            <!-- avatar -->
            <div
              class="align-items-center justify-content-center d-none d-xl-flex"
            >
              <img
                src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                class="rounded-circle me-2"
                alt="avatar"
                style="width: 38px; height: 38px; object-fit: cover"
              />
              <p class="m-0"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
            </div>
            <!-- main menu -->
            <div
              class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              "
              style="width: 38px; height: 38px"
              type="button"
              id="mainMenu"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              data-bs-auto-close="outside"
            >
              <i class="fas fa-ellipsis-h"></i>
            </div>
            <!-- main menu dd -->
            <ul
              class="dropdown-menu border-0 shadow p-3 overflow-auto"
              aria-labelledby="mainMenu"
              style="width: 23em; max-height: 600px"
            >
              <!-- menu -->
              <div>
                <!-- header -->
                <li class="p-1 mx-2">
                  <h2>Menu</h2>
                </li>
                <!-- search -->
                <li class="p-1">
                  <div
                    class="input-group-text bg-gray border-0 rounded-pill"
                    style="min-height: 40px; min-width: 230px"
                  >
                    <i class="fas fa-search me-2 text-muted"></i>
                    <input
                      type="text"
                      class="form-control rounded-pill border-0 bg-gray"
                      placeholder="Search Menu"
                      style="background-color: transparent !important;border: none !important;border-color: transparent !important;"
                    />
                  </div>
                </li>
                <!-- social items -->
                <h4 class="m-2">Social</h4>
                <!-- s1 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Y7r38CcFEw5.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Campus</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
                <!-- s2 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/N7UOh8REweU.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Events</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
                <!-- s3 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Friends</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
                <!-- s4 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Groups</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
                <!-- s5 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/hLkEFzsCyXC.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">News Feed</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
                <!-- s6 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/0gH3vbvr8Ee.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Pages</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
                <hr />
                <!-- ent items -->
                <h4 class="m-2">Entertainment</h4>
                <!-- e1 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Y7r38CcFEw5.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Campus</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
                <!-- e2 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/N7UOh8REweU.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Events</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
                <!-- e3 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                  >
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png"
                        alt="icon from fb"
                        class="rounded-circle"
                        style="width: 48px; height: 48px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Friends</p>
                      <span class="fs-7 text-muted"
                        >Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Odio, commodi.</span
                      >
                    </div>
                  </a>
                </li>
              </div>
              <hr />
              <!-- create -->
              <div>
                <!-- header -->
                <li class="p-1 mx-2">
                  <h2>Create</h2>
                </li>
                <!-- c-1 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-edit"></i>
                    </div>
                    <div>
                      <p class="m-0">Post</p>
                    </div>
                  </a>
                </li>
                <!-- c-2 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-book-open"></i>
                    </div>
                    <div>
                      <p class="m-0">Story</p>
                    </div>
                  </a>
                </li>
                <!-- c-3 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-video"></i>
                    </div>
                    <div>
                      <p class="m-0">Video</p>
                    </div>
                  </a>
                </li>
                <hr />
                <!-- c-4 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-flag"></i>
                    </div>
                    <div>
                      <p class="m-0">Page</p>
                    </div>
                  </a>
                </li>
                <!-- c-5 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-bullhorn"></i>
                    </div>
                    <div>
                      <p class="m-0">Add</p>
                    </div>
                  </a>
                </li>
                <!-- c-6 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-users"></i>
                    </div>
                    <div>
                      <p class="m-0">Group</p>
                    </div>
                  </a>
                </li>
                <!-- c-7-->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-book"></i>
                    </div>
                    <div>
                      <p class="m-0">Event</p>
                    </div>
                  </a>
                </li>
                <!-- c-8 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div>
                      <p class="m-0">Marketplace Listing</p>
                    </div>
                  </a>
                </li>
                <!-- c-9 -->
                <li class="my-2 p-1">
                  <a
                    href="#"
                    class="
                      text-decoration-none text-dark
                      d-flex
                      align-items-center
                    "
                  >
                    <div
                      class="
                        rounded-circle
                        bg-gray
                        p-1
                        d-flex
                        align-items-center
                        justify-content-center
                        me-3
                      "
                      style="width: 38px; height: 38px"
                    >
                      <i class="fas fa-suitcase"></i>
                    </div>
                    <div>
                      <p class="m-0">Job</p>
                    </div>
                  </a>
                </li>
              </div>
            </ul>
            <!-- chat -->
            <div
              class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              "
              style="width: 38px; height: 38px"
              type="button"
              id="chatMenu"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              data-bs-auto-close="outside"
            >
              <i class="fas fa-comment"></i>
            </div>
            <!-- chat  dd -->
            <ul
              class="dropdown-menu border-0 shadow p-3 overflow-auto"
              aria-labelledby="chatMenu"
              style="width: 23em; max-height: 600px"
            >
              <!-- header -->
              <li class="p-1">
                <div class="d-flex justify-content-between">
                  <h2>Message</h2>
                  <div>
                    <!-- setting -->
                    <i
                      class="fas fa-ellipsis-h text-muted mx-2"
                      type="button"
                      data-bs-toggle="dropdown"
                    ></i>
                    <!-- setting dd -->
                    <ul class="dropdown-menu shadow" style="width: 18em">
                      <!-- title -->
                      <div class="p-2">
                        <h5>Chat Settings</h5>
                        <span class="text-muted fs-7"
                          >Customize your Messenger experience.</span
                        >
                      </div>
                      <hr />
                      <!-- incoming sound -->
                      <li>
                        <div
                          class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          "
                        >
                          <!-- icon -->
                          <div class="d-flex align-items-center">
                            <i class="fas fa-phone-alt me-3"></i>
                            <p class="m-0">Incoming call sounds</p>
                          </div>
                          <!-- toggle -->
                          <div class="form-check form-switch m-0">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="flexSwitchCheckChecked"
                              checked
                            />
                            <label
                              class="form-check-label"
                              for="flexSwitchCheckChecked"
                            ></label>
                          </div>
                        </div>
                      </li>
                      <!-- message sound -->
                      <li>
                        <div
                          class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          "
                        >
                          <!-- icon -->
                          <div class="d-flex align-items-center">
                            <i class="fas fa-volume-off me-4 fs-4"></i>
                            <p class="m-0">Message sounds</p>
                          </div>
                          <!-- toggle -->
                          <div class="form-check form-switch m-0">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="flexSwitchCheckChecked"
                              checked
                            />
                            <label
                              class="form-check-label"
                              for="flexSwitchCheckChecked"
                            ></label>
                          </div>
                        </div>
                      </li>
                      <!-- popup message -->
                      <li>
                        <div
                          class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          "
                        >
                          <!-- icon -->
                          <div class="d-flex align-items-center">
                            <i class="fas fa-spinner me-3"></i>
                            <p class="m-0">Pop-up new messages</p>
                          </div>
                          <!-- toggle -->
                          <div class="form-check form-switch m-0">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="flexSwitchCheckChecked"
                              checked
                            />
                            <label
                              class="form-check-label"
                              for="flexSwitchCheckChecked"
                            ></label>
                          </div>
                        </div>
                        <span class="ms-5 text-muted fs-7"
                          >Automatically open new messages.</span
                        >
                      </li>
                      <hr class="m-0" />
                      <!-- item 1 -->
                      <li>
                        <div
                          class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          "
                        >
                          <!-- icon -->
                          <div class="d-flex align-items-center">
                            <i class="fas fa-toggle-off me-3"></i>
                            <p class="m-0">Turn Off Active Status</p>
                          </div>
                        </div>
                      </li>
                      <!-- item 2 -->
                      <li>
                        <div
                          class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          "
                        >
                          <!-- icon -->
                          <div class="d-flex align-items-center">
                            <i class="far fa-comment-alt me-3"></i>
                            <p class="m-0">Message Request</p>
                          </div>
                        </div>
                      </li>
                      <!-- item 3 -->
                      <li>
                        <div
                          class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          "
                        >
                          <!-- icon -->
                          <div class="d-flex align-items-center">
                            <i class="fas fa-share-square me-3"></i>
                            <p class="m-0">Message delivery settings</p>
                          </div>
                        </div>
                      </li>
                      <!-- item 4 -->
                      <li>
                        <div
                          class="
                            dropdown-item
                            d-flex
                            align-items-center
                            justify-content-between
                          "
                        >
                          <!-- icon -->
                          <div class="d-flex align-items-center">
                            <i class="fas fa-shield-alt me-3"></i>
                            <p class="m-0">Block settings</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <i
                      class="fas fa-expand-arrows-alt text-muted mx-2"
                      type="button"
                    ></i>
                    <!-- new message -->
                    <i
                      class="fas fa-edit text-muted mx-2"
                      type="button"
                      data-bs-toggle="modal"
                      data-bs-target="#newChat"
                    ></i>
                  </div>
                </div>
              </li>
              <!-- search -->
              <li class="p-1">
                <div
                  class="input-group-text bg-gray border-0 rounded-pill"
                  style="min-height: 40px; min-width: 230px"
                >
                  <i class="fas fa-search me-2 text-muted"></i>
                  <input
                    type="text"
                    class="form-control rounded-pill border-0 bg-gray"
                    placeholder="Search Messenger"
                    style="background-color: transparent !important;border: none !important;border-color: transparent !important;"
                  />
                </div>
              </li>
              <!-- message 1 -->
              <li
                class="my-2 p-1"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat1"
              >
                <div class="d-flex align-items-center justify-content-between">
                  <!-- big avatar -->
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/1"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">Mike</p>
                      <span class="fs-7 text-muted"
                        >Lorem ipsum &#8226; 7d</span
                      >
                    </div>
                  </div>
                  <!-- small avatar -->
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/1"
                      alt="avatar"
                      class="rounded-circle"
                      style="width: 15px; height: 15px; object-fit: cover"
                    />
                  </div>
                </div>
              </li>
              <!-- message 2 -->
              <li
                class="my-2 p-1"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat2"
              >
                <div class="d-flex align-items-center justify-content-between">
                  <!-- big avatar -->
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/2"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">
                        Tuan
                        <span class="fs-7 text-muted"
                          >Lorem ipsum &#8226; 7d</span
                        >
                      </p>
                    </div>
                  </div>
                  <!-- small avatar -->
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/2"
                      alt="avatar"
                      class="rounded-circle"
                      style="width: 15px; height: 15px; object-fit: cover"
                    />
                  </div>
                </div>
              </li>
              <!-- message 3 -->
              <li
                class="my-2 p-1"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat3"
              >
                <div class="d-flex align-items-center justify-content-between">
                  <!-- big avatar -->
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/3"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">Jerry</p>
                      <span class="fs-7 text-muted"
                        >Lorem ipsum &#8226; 7d</span
                      >
                    </div>
                  </div>
                  <!-- small avatar -->
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/3"
                      alt="avatar"
                      class="rounded-circle"
                      style="width: 15px; height: 15px; object-fit: cover"
                    />
                  </div>
                </div>
              </li>
              <!-- message 4 -->
              <li
                class="my-2 p-1"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat4"
              >
                <div class="d-flex align-items-center justify-content-between">
                  <!-- big avatar -->
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/4"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">Tony</p>
                      <span class="fs-7 text-muted"
                        >Lorem ipsum &#8226; 7d</span
                      >
                    </div>
                  </div>
                  <!-- small avatar -->
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/4"
                      alt="avatar"
                      class="rounded-circle"
                      style="width: 15px; height: 15px; object-fit: cover"
                    />
                  </div>
                </div>
              </li>
              <!-- message 5 -->
              <li
                class="my-2 p-1"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat5"
              >
                <div class="d-flex align-items-center justify-content-between">
                  <!-- big avatar -->
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/5"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">Phu</p>
                      <span class="fs-7 text-muted"
                        >Lorem ipsum &#8226; 7d</span
                      >
                    </div>
                  </div>
                  <!-- small avatar -->
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/5"
                      alt="avatar"
                      class="rounded-circle"
                      style="width: 15px; height: 15px; object-fit: cover"
                    />
                  </div>
                </div>
              </li>
              <hr class="m-0" />
              <a href="#" class="text-decoration-none">
                <p class="fw-bold text-center pt-3 m-0">See All in Messenger</p>
              </a>
            </ul>
            <!-- notifications -->
            <div
              class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              "
              style="width: 38px; height: 38px"
              type="button"
              id="notMenu"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              data-bs-auto-close="outside"
            >
              <i class="fas fa-bell"></i>
            </div>
            <!-- notifications dd -->
            <ul
              class="dropdown-menu border-0 shadow p-3"
              aria-labelledby="notMenu"
              style="width: 23em; max-height: 600px; overflow-y: auto"
            >
              <!-- header -->
              <li class="p-1">
                <div class="d-flex justify-content-between">
                  <h2>Notifications</h2>
                  <div>
                    <i
                      class="
                        fas
                        fa-ellipsis-h
                        pointer
                        p-2
                        rounded-circle
                        bg-gray
                      "
                      type="button"
                      data-bs-toggle="dropdown"
                    ></i>
                    <ul class="dropdown-menu">
                      <li
                        class="dropdown-item d-flex align-items-center"
                        type="button"
                      >
                        <i class="fas fa-check me-3 text-muted"></i>
                        <p class="m-0">Mark all as read</p>
                      </li>
                      <li
                        class="dropdown-item d-flex align-items-center"
                        type="button"
                      >
                        <i class="fas fa-cog me-3 text-muted"></i>
                        <p class="m-0">Privacy Checkup</p>
                      </li>
                      <li
                        class="dropdown-item d-flex align-items-center"
                        type="button"
                      >
                        <i class="fas fa-desktop me-3 text-muted"></i>
                        <p class="m-0">Privacy Shortcuts</p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="d-flex" type="button">
                  <p class="rounded-pill bg-gray p-2">All</p>
                  <p class="ms-3 rounded-pill bg-primary p-2 text-white">
                    Unread
                  </p>
                </div>
              </li>
              <!-- news -->
              <div class="d-flex justify-content-between mx-2">
                <h5>New</h5>
                <a href="#" class="text-decoration-none">See All</a>
              </div>
              <!-- news 1 -->
              <li class="my-2 p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  "
                >
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/1"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Harum unde amet at nulla quae porro.
                      </p>
                      <span class="fs-7 text-primary">about an hour ago</span>
                    </div>
                  </div>
                  <i class="fas fa-circle fs-7 text-primary"></i>
                </a>
              </li>
              <!-- news 2 -->
              <li class="my-2 p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  "
                >
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/2"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Harum unde amet at nulla quae porro.
                      </p>
                      <span class="fs-7 text-primary">about an hour ago</span>
                    </div>
                  </div>
                  <i class="fas fa-circle fs-7 text-primary"></i>
                </a>
              </li>
              <!-- news 3 -->
              <li class="my-2 p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  "
                >
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/3"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Harum unde amet at nulla quae porro.
                      </p>
                      <span class="fs-7 text-primary">about an hour ago</span>
                    </div>
                  </div>
                  <i class="fas fa-circle fs-7 text-primary"></i>
                </a>
              </li>
              <!-- news 4 -->
              <li class="my-2 p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  "
                >
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/4"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Harum unde amet at nulla quae porro.
                      </p>
                      <span class="fs-7 text-primary">about an hour ago</span>
                    </div>
                  </div>
                  <i class="fas fa-circle fs-7 text-primary"></i>
                </a>
              </li>
              <!-- news 5 -->
              <li class="my-2 p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    justify-content-evenly
                    text-decoration-none text-dark
                  "
                >
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/5"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Harum unde amet at nulla quae porro.
                      </p>
                      <span class="fs-7 text-primary">about an hour ago</span>
                    </div>
                  </div>
                  <i class="fas fa-circle fs-7 text-primary"></i>
                </a>
              </li>
            </ul>
            <!-- secondary menu -->
            <div
              class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              "
              style="width: 38px; height: 38px"
              type="button"
              id="secondMenu"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              data-bs-auto-close="outside"
            >
              <i class="fas fa-caret-down"></i>
            </div>
            <!-- secondary menu dd -->
            <ul
              class="dropdown-menu border-0 shadow p-3"
              aria-labelledby="secondMenu"
              style="width: 23em"
            >
              <!-- avatar -->
              <li class="dropdown-item p-1 rounded d-flex" type="button">
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 45px; height: 45px; object-fit: cover"
                />
                <div>
                  <p class="m-0"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
                  <p class="m-0 text-muted">See your profile</p>
                </div>
              </li>
              <hr />
              <!-- feedback -->
              <li
                class="dropdown-item p-1 rounded d-flex align-items-center"
                type="button"
              >
                <i
                  class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"
                ></i>
                <div class="ms-3">
                  <p class="m-0">Give Feedback</p>
                  <p class="m-0 text-muted fs-7">
                    Help us improve the new Mino.
                  </p>
                </div>
              </li>
              <hr />
              <!-- options -->
              <!-- 1 -->
              <li class="dropdown-item p-1 my-3 rounded" type="button">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="d-flex" data-bs-toggle="dropdown">
                      <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                      <div
                        class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        "
                      >
                        <p class="m-0">Settings & Privacy</p>
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </div>
                    <!-- nested menu -->
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-cog"></i>
                          </div>
                          <p class="m-0">Settings</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-lock"></i>
                          </div>
                          <p class="m-0">Privacy Checkup</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-unlock-alt"></i>
                          </div>
                          <p class="m-0">Privacy Shortcuts</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-list"></i>
                          </div>
                          <p class="m-0">Activity Log</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-newspaper"></i>
                          </div>
                          <p class="m-0">News Feed Preferences</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-globe"></i>
                          </div>
                          <p class="m-0">Language</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- 2 -->
              <li class="dropdown-item p-1 my-3 rounded" type="button">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="d-flex" data-bs-toggle="dropdown">
                      <i
                        class="
                          fas
                          fa-question-circle
                          bg-gray
                          p-2
                          rounded-circle
                        "
                      ></i>
                      <div
                        class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        "
                      >
                        <p class="m-0">Help & Support</p>
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </div>
                    <!-- nested menu -->
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-cog"></i>
                          </div>
                          <p class="m-0">Settings</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-lock"></i>
                          </div>
                          <p class="m-0">Privacy Checkup</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-unlock-alt"></i>
                          </div>
                          <p class="m-0">Privacy Shortcuts</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-list"></i>
                          </div>
                          <p class="m-0">Activity Log</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-newspaper"></i>
                          </div>
                          <p class="m-0">News Feed Preferences</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-globe"></i>
                          </div>
                          <p class="m-0">Language</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- 3 -->
              <li class="dropdown-item p-1 my-3 rounded" type="button">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="d-flex" data-bs-toggle="dropdown">
                      <i class="fas fa-moon bg-gray p-2 rounded-circle"></i>
                      <div
                        class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        "
                      >
                        <p class="m-0">Display & Accessibility</p>
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </div>
                    <!-- nested menu -->
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-cog"></i>
                          </div>
                          <p class="m-0">Settings</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-lock"></i>
                          </div>
                          <p class="m-0">Privacy Checkup</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-unlock-alt"></i>
                          </div>
                          <p class="m-0">Privacy Shortcuts</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-list"></i>
                          </div>
                          <p class="m-0">Activity Log</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-newspaper"></i>
                          </div>
                          <p class="m-0">News Feed Preferences</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-globe"></i>
                          </div>
                          <p class="m-0">Language</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- 4 -->
              <li class="dropdown-item p-1 my-3 rounded" type="button">
                    <a
                      href="./logout.php"
                      class="d-flex text-decoration-none text-dark"
                    >
                      <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                      <div
                        class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        "
                      >
                      <p class="m-0">Log Out</p>
                      </div>
                    </a>
              </li>
            </ul>
            <!-- end -->
          </div>
        </div>
      </div>
    </div>
    <!-- =============== New Chat Mobile =============== -->
    <div
      class="modal fade"
      id="newChat"
      tabindex="-1"
      aria-labelledby="newChatLabel"
      aria-hidden="true"
      data-bs-backdrop="false"
    >
      <div
        class="
          modal-dialog modal-sm
          position-absolute
          bottom-0
          end-0
          w-75
          shadow
        "
        style="transform: translateX(-80px)"
      >
        <div class="modal-content border-0">
          <!-- head -->
          <div class="modal-header align-items-start">
            <div>
              <h6 class="modal-title text-dark mb-2" id="newChat1Label">
                New Message
              </h6>
              <label class="text-dark">To:</label>
              <input type="text" class="border-0" />
            </div>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <!-- body -->
          <div class="modal-body shadow m-0 chat-border">
            <p class="m-0 text-primary ms-4">Suggested</p>
          </div>
          <!-- footer -->
          <div class="modal-footer border-0" style="min-height: 300px"></div>
        </div>
      </div>
    </div>
    <!-- ================= Chat Modal Mobile ================= -->
    <!-- chat 1 -->
    <div
      class="modal fade"
      id="singleChat1"
      tabindex="-1"
      aria-labelledby="singleChat1Label"
      aria-hidden="true"
      data-bs-backdrop="false"
    >
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-80px)"
      >
        <div class="modal-content border-0 shadow">
          <!-- head -->
          <div class="modal-header">
            <div
              class="dropdown-item d-flex rounded"
              type="button"
              data-bs-container="body"
              data-bs-toggle="popover"
              data-bs-placement="left"
              data-bs-content='
              <div>
                <div class="popover-body d-flex flex-column p-0">
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-comment me-3 fs-4"></i>
                    <p class="m-0">Open Messenger App</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-user me-3 fs-4"></i>
                    <p class="m-0">Open Messenger App</p>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="fas fa-fill-drip me-3 fs-4"></i>
                    <p class="m-0">Color</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="far fa-smile-beam me-3 fs-4"></i>
                    <p class="m-0">Emoji</p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                    <i class="fas fa-pencil-alt me-3 fs-4"></i>
                    <p class="m-0">Nicknames</p>
                  </div>
                </div>
              </div>
              '
              data-bs-html="true"
            >
              <!-- avatar -->
              <div class="position-relative">
                <img
                  src="https://source.unsplash.com/random/1"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 38px; height: 38px; object-fit: cover"
                />
                <span
                  class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  "
                  style="left: 75%"
                >
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Mike <i class="fas fa-angle-down"></i></p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
            <i class="fas fa-video mx-2 text-muted pointer"></i>
            <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/1"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/1"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/1"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0">
            <div class="d-flex">
              <div class="d-flex align-items-center">
                <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
              </div>
              <div>
                <input
                  type="text"
                  class="form-control rounded-pill border-0 bg-gray"
                  placeholder="Aa"
                />
              </div>
              <div class="d-flex align-items-center mx-2">
                <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chat 2 -->
    <div
      class="modal fade"
      id="singleChat2"
      tabindex="-1"
      aria-labelledby="singleChat2Label"
      aria-hidden="true"
      data-bs-backdrop="false"
    >
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-80px)"
      >
        <div class="modal-content border-0 shadow">
          <!-- head -->
          <div class="modal-header">
            <div
              class="dropdown-item d-flex rounded"
              type="button"
              data-bs-container="body"
              data-bs-toggle="popover"
              data-bs-placement="left"
              data-bs-content='
                <div>
                  <div class="popover-body d-flex flex-column p-0">
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-comment me-3 fs-4"></i>
                      <p class="m-0">Open Messenger App</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-user me-3 fs-4"></i>
                      <p class="m-0">Open Messenger App</p>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="fas fa-fill-drip me-3 fs-4"></i>
                      <p class="m-0">Color</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="far fa-smile-beam me-3 fs-4"></i>
                      <p class="m-0">Emoji</p>
                    </div>
                    <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                      <i class="fas fa-pencil-alt me-3 fs-4"></i>
                      <p class="m-0">Nicknames</p>
                    </div>
                  </div>
                </div>
                '
              data-bs-html="true"
            >
              <!-- avatar -->
              <div class="position-relative">
                <img
                  src="https://source.unsplash.com/random/2"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 38px; height: 38px; object-fit: cover"
                />
                <span
                  class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  "
                  style="left: 75%"
                >
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Tuan <i class="fas fa-angle-down"></i></p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
            <i class="fas fa-video mx-2 text-muted pointer"></i>
            <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/2"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/2"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/2"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0">
            <div class="d-flex">
              <div class="d-flex align-items-center">
                <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
              </div>
              <div>
                <input
                  type="text"
                  class="form-control rounded-pill border-0 bg-gray"
                  placeholder="Aa"
                />
              </div>
              <div class="d-flex align-items-center mx-2">
                <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chat 3 -->
    <div
      class="modal fade"
      id="singleChat3"
      tabindex="-1"
      aria-labelledby="singleChat3Label"
      aria-hidden="true"
      data-bs-backdrop="false"
    >
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-80px)"
      >
        <div class="modal-content border-0 shadow">
          <!-- head -->
          <div class="modal-header">
            <div
              class="dropdown-item d-flex rounded"
              type="button"
              data-bs-container="body"
              data-bs-toggle="popover"
              data-bs-placement="left"
              data-bs-content='
                    <div>
                      <div class="popover-body d-flex flex-column p-0">
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-comment me-3 fs-4"></i>
                          <p class="m-0">Open Messenger App</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-user me-3 fs-4"></i>
                          <p class="m-0">Open Messenger App</p>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="fas fa-fill-drip me-3 fs-4"></i>
                          <p class="m-0">Color</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="far fa-smile-beam me-3 fs-4"></i>
                          <p class="m-0">Emoji</p>
                        </div>
                        <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                          <i class="fas fa-pencil-alt me-3 fs-4"></i>
                          <p class="m-0">Nicknames</p>
                        </div>
                      </div>
                    </div>
                    '
              data-bs-html="true"
            >
              <!-- avatar -->
              <div class="position-relative">
                <img
                  src="https://source.unsplash.com/random/2"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 38px; height: 38px; object-fit: cover"
                />
                <span
                  class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  "
                  style="left: 75%"
                >
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Jerry <i class="fas fa-angle-down"></i></p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
            <i class="fas fa-video mx-2 text-muted pointer"></i>
            <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/3"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/3"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/3"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0">
            <div class="d-flex">
              <div class="d-flex align-items-center">
                <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
              </div>
              <div>
                <input
                  type="text"
                  class="form-control rounded-pill border-0 bg-gray"
                  placeholder="Aa"
                />
              </div>
              <div class="d-flex align-items-center mx-2">
                <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chat 4 -->
    <div
      class="modal fade"
      id="singleChat4"
      tabindex="-1"
      aria-labelledby="singleChat4Label"
      aria-hidden="true"
      data-bs-backdrop="false"
    >
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-80px)"
      >
        <div class="modal-content border-0 shadow">
          <!-- head -->
          <div class="modal-header">
            <div
              class="dropdown-item d-flex rounded"
              type="button"
              data-bs-container="body"
              data-bs-toggle="popover"
              data-bs-placement="left"
              data-bs-content='
                      <div>
                        <div class="popover-body d-flex flex-column p-0">
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-comment me-3 fs-4"></i>
                            <p class="m-0">Open Messenger App</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-user me-3 fs-4"></i>
                            <p class="m-0">Open Messenger App</p>
                          </div>
                          <hr>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="fas fa-fill-drip me-3 fs-4"></i>
                            <p class="m-0">Color</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="far fa-smile-beam me-3 fs-4"></i>
                            <p class="m-0">Emoji</p>
                          </div>
                          <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                            <i class="fas fa-pencil-alt me-3 fs-4"></i>
                            <p class="m-0">Nicknames</p>
                          </div>
                        </div>
                      </div>
                      '
              data-bs-html="true"
            >
              <!-- avatar -->
              <div class="position-relative">
                <img
                  src="https://source.unsplash.com/random/2"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 38px; height: 38px; object-fit: cover"
                />
                <span
                  class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  "
                  style="left: 75%"
                >
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Tony <i class="fas fa-angle-down"></i></p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
            <i class="fas fa-video mx-2 text-muted pointer"></i>
            <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/4"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/4"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/4"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0">
            <div class="d-flex">
              <div class="d-flex align-items-center">
                <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
              </div>
              <div>
                <input
                  type="text"
                  class="form-control rounded-pill border-0 bg-gray"
                  placeholder="Aa"
                />
              </div>
              <div class="d-flex align-items-center mx-2">
                <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- chat 5 -->
    <div
      class="modal fade"
      id="singleChat5"
      tabindex="-1"
      aria-labelledby="singleChat5Label"
      aria-hidden="true"
      data-bs-backdrop="false"
    >
      <div
        class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-17"
        style="transform: translateX(-80px)"
      >
        <div class="modal-content border-0 shadow">
          <!-- head -->
          <div class="modal-header">
            <div
              class="dropdown-item d-flex rounded"
              type="button"
              data-bs-container="body"
              data-bs-toggle="popover"
              data-bs-placement="left"
              data-bs-content='
                          <div>
                            <div class="popover-body d-flex flex-column p-0">
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-comment me-3 fs-4"></i>
                                <p class="m-0">Open Messenger App</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-user me-3 fs-4"></i>
                                <p class="m-0">Open Messenger App</p>
                              </div>
                              <hr>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="fas fa-fill-drip me-3 fs-4"></i>
                                <p class="m-0">Color</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="far fa-smile-beam me-3 fs-4"></i>
                                <p class="m-0">Emoji</p>
                              </div>
                              <div class="d-flex align-items-center dropdown-item p-2 rounded pointer">
                                <i class="fas fa-pencil-alt me-3 fs-4"></i>
                                <p class="m-0">Nicknames</p>
                              </div>
                            </div>
                          </div>
                          '
              data-bs-html="true"
            >
              <!-- avatar -->
              <div class="position-relative">
                <img
                  src="https://source.unsplash.com/random/2"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 38px; height: 38px; object-fit: cover"
                />
                <span
                  class="
                    position-absolute
                    bottom-0
                    translate-middle
                    p-1
                    bg-success
                    border border-light
                    rounded-circle
                  "
                  style="left: 75%"
                >
                  <span class="visually-hidden">New alerts</span>
                </span>
              </div>
              <!-- name -->
              <div>
                <p class="m-0">Phu <i class="fas fa-angle-down"></i></p>
                <span class="text-muted fs-7">Active Now</span>
              </div>
            </div>
            <!-- close -->
            <i class="fas fa-video mx-2 text-muted pointer"></i>
            <i class="fas fa-phone-alt mx-2 text-muted pointer"></i>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <!-- body -->
          <div class="modal-body p-0 overflow-auto" style="max-height: 300px">
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/5"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/5"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
            <!-- message l -->
            <li class="list-group-item border-0 d-flex">
              <!-- avatar -->
              <div>
                <img
                  src="https://source.unsplash.com/random/5"
                  alt="avatar"
                  class="rounded-circle me-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
            </li>
            <!-- message r -->
            <li class="list-group-item border-0 d-flex justify-content-end">
              <!-- message -->
              <p class="bg-gray p-2 rounded">Lorem, ipsum dolor</p>
              <!-- avatar -->
              <div>
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  alt="avatar"
                  class="rounded-circle ms-2"
                  style="width: 28px; height: 28px; object-fit: cover"
                />
              </div>
            </li>
          </div>
          <!-- message input -->
          <div class="modal-footer p-0 m-0 border-0">
            <div class="d-flex">
              <div class="d-flex align-items-center">
                <i class="fas fa-plus-circle mx-1 fs-5 text-muted pointer"></i>
                <i class="far fa-file-image mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-portrait mx-1 fs-5 text-muted pointer"></i>
                <i class="fas fa-adjust mx-1 fs-5 text-muted pointer"></i>
              </div>
              <div>
                <input
                  type="text"
                  class="form-control rounded-pill border-0 bg-gray"
                  placeholder="Aa"
                />
              </div>
              <div class="d-flex align-items-center mx-2">
                <i class="fas fa-thumbs-up fs-5 text-muted pointer"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================= Main ================= -->
    <div class="container-fluid">
      <div class="row justify-content-evenly">
        <!-- ================= Sidebar ================= -->
        <div class="col-12 col-lg-3">
          <div
            class="d-none d-xl-flex d-xxl-block h-100 fixed-top overflow-hidden scrollbar"
            style="max-width: 360px; width: 100%; z-index: 4"
          >
            <ul
              class="navbar-nav mt-4 ms-3 d-flex flex-column pb-5 mb-5"
              style="padding-top: 56px"
            >
              <!-- top -->
              <!-- avatar -->
              <li class="dropdown-item p-1 rounded">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  "
                >
                  <div class="p-2">
                    <img
                      src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
                  </div>
                </a>
              </li>
              <!-- top 1 -->
              <li class="dropdown-item p-1 rounded">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  "
                >
                  <div class="p-2">
                    <img
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png"
                      alt="from fb"
                      class="rounded-circle"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Friends</p>
                  </div>
                </a>
              </li>
              <!-- top 2 -->
              <li class="dropdown-item p-1 rounded">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  "
                >
                  <div class="p-2">
                    <img
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png"
                      alt="from fb"
                      class="rounded-circle"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Groups</p>
                    <i
                      class="fas fa-circle text-primary"
                      style="font-size: 0.5rem !important"
                    ></i>
                    <span class="fs-7 text-primary"> 1 new</span>
                  </div>
                </a>
              </li>
              <!-- top 3 -->
              <li class="dropdown-item p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  "
                >
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/0gH3vbvr8Ee.png"
                        alt="from fb"
                        class="rounded-circle"
                        style="width: 38px; height: 38px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Pages</p>
                    </div>
                  </div>
                </a>
              </li>
              <!-- top 4 -->
              <li class="dropdown-item p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  "
                >
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/MN44Sm-CTHN.png"
                        alt="from fb"
                        class="rounded-circle"
                        style="width: 38px; height: 38px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Marketplace</p>
                    </div>
                  </div>
                </a>
              </li>
              <!-- top 5 -->
              <li class="dropdown-item p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    justify-content-between
                    text-decoration-none text-dark
                  "
                >
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/FhOLTyUFKwf.png"
                        alt="from fb"
                        class="rounded-circle"
                        style="width: 38px; height: 38px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Watch</p>
                      <i
                        class="fas fa-circle text-primary"
                        style="font-size: 0.5rem !important"
                      ></i>
                      <span class="fs-7 text-primary"> 9+ new videos</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- see more -->
              <li class="p-1" type="button">
                <div id="accordionFlushExample">
                  <div>
                    <!-- see more button -->
                    <div
                      class="d-flex align-items-center"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne"
                      aria-expanded="false"
                      aria-controls="flush-collapseOne"
                    >
                      <div class="p-2">
                        <i
                          class="fas fa-chevron-down rounded-circle p-2"
                          style="background-color: #d5d5d5 !important"
                        ></i>
                      </div>
                      <div>
                        <p class="m-0">See More</p>
                      </div>
                    </div>
                    <!-- content -->
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div>
                        <!-- item 1 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Y7r38CcFEw5.png"
                              alt="from fb"
                              class="rounded-circle"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Campus</p>
                          </div>
                        </div>
                        <!-- item 2 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/N7UOh8REweU.png"
                              alt="from fb"
                              class="rounded-circle"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Events</p>
                          </div>
                        </div>
                        <!-- item 3 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/hLkEFzsCyXC.png"
                              alt="from fb"
                              class="rounded-circle"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Newsfeed</p>
                          </div>
                        </div>
                        <!-- end -->
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <hr class="m-0" />
              <!-- shortcuts -->
              <!-- heading -->
              <div
                class="
                  d-flex
                  justify-content-between
                  align-items-center
                  mt-2
                  text-muted
                  edit-heading
                "
              >
                <h4 class="m-0 pointer">Your Shorcuts</h4>
                <p
                  class="m-0 text-primary me-3 pointer edit-button"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#shortCutModal"
                >
                  Edit
                </p>
                <!-- modal -->
                <div
                  class="modal fade"
                  id="shortCutModal"
                  tabindex="-1"
                  aria-labelledby="shortCutModalLabel"
                  aria-hidden="true"
                  data-bs-backdrop="false"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <!-- head -->
                      <div class="modal-header align-items-center">
                        <h5
                          class="text-dark text-center w-100 m-0"
                          id="exampleModalLabel"
                        >
                          Edit Your ShortCuts
                        </h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <!-- body -->
                      <div class="modal-body">
                        <p class="text-muted">
                          Shortcuts provide quick access to what you do most on
                          Facebook. Your Shortcuts are sorted automatically, but
                          you can pin something so it's always shown at the top
                          or hide it from the list.
                        </p>
                        <!-- Search -->
                        <div class="p-1">
                          <div
                            class="
                              input-group-text
                              bg-gray
                              border-0
                              rounded-pill
                            "
                            style="min-height: 40px; min-width: 230px"
                          >
                            <i class="fas fa-search me-2 text-muted"></i>
                            <input
                              type="text"
                              class="form-control rounded-pill border-0 bg-gray"
                              placeholder="Search your Pages, groups, games, and events"
                            />
                          </div>
                        </div>
                        <!-- short-1 -->
                        <li class="my-1 p-1">
                          <div
                            class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            "
                          >
                            <div
                              class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              "
                            >
                              <div class="p-2">
                                <img
                                  src="https://source.unsplash.com/random/1"
                                  alt="from fb"
                                  class="
                                    rounded
                                    border border-1 border-secondary
                                  "
                                  style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  "
                                />
                              </div>
                              <div>
                                <p class="m-0">Lorem Ipsum</p>
                              </div>
                            </div>
                            <select
                              class="form-select w-50 border-0 bg-gray"
                              aria-label="Default select example"
                            >
                              <option selected value="1">
                                Short Automatically
                              </option>
                              <option value="2">Pin To Top</option>
                              <option value="3">Hide</option>
                            </select>
                          </div>
                        </li>
                        <!-- short-2 -->
                        <li class="my-1 p-1">
                          <div
                            class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            "
                          >
                            <div
                              class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              "
                            >
                              <div class="p-2">
                                <img
                                  src="https://source.unsplash.com/random/2"
                                  alt="from fb"
                                  class="
                                    rounded
                                    border border-1 border-secondary
                                  "
                                  style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  "
                                />
                              </div>
                              <div>
                                <p class="m-0">Lorem Ipsum</p>
                              </div>
                            </div>
                            <select
                              class="form-select w-50 border-0 bg-gray"
                              aria-label="Default select example"
                            >
                              <option selected value="1">
                                Short Automatically
                              </option>
                              <option value="2">Pin To Top</option>
                              <option value="3">Hide</option>
                            </select>
                          </div>
                        </li>
                        <!-- short-3 -->
                        <li class="my-1 p-1">
                          <div
                            class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            "
                          >
                            <div
                              class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              "
                            >
                              <div class="p-2">
                                <img
                                  src="https://source.unsplash.com/random/3"
                                  alt="from fb"
                                  class="
                                    rounded
                                    border border-1 border-secondary
                                  "
                                  style="
                                    width: 38px;
                                    height: 38px;
                                    object-fit: cover;
                                  "
                                />
                              </div>
                              <div>
                                <p class="m-0">Lorem Ipsum</p>
                              </div>
                            </div>
                            <select
                              class="form-select w-50 border-0 bg-gray"
                              aria-label="Default select example"
                            >
                              <option selected value="1">
                                Short Automatically
                              </option>
                              <option value="2">Pin To Top</option>
                              <option value="3">Hide</option>
                            </select>
                          </div>
                        </li>
                        <!-- end -->
                      </div>
                      <!-- footer -->
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-light text-primary"
                          data-bs-dismiss="modal"
                        >
                          Close
                        </button>
                        <button type="button" class="btn btn-primary">
                          Save changes
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end -->
              </div>
              <!-- short 1 -->
              <li class="dropdown-item p-1">
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  "
                >
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/1"
                      alt="from fb"
                      class="rounded border border-1 border-secondary"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Lorem Ipsum</p>
                  </div>
                </a>
              </li>
              <!-- short-2 -->
              <li class="dropdown-item p-1">
                <a
                  href=""
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  "
                >
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/2"
                      alt="from fb"
                      class="rounded border border-1 border-secondary"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Lorem Ipsum</p>
                  </div>
                </a>
              </li>
              <!-- short-3 -->
              <li class="dropdown-item p-1">
                <a
                  href=""
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  "
                >
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/3"
                      alt="from fb"
                      class="rounded border border-1 border-secondary"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Lorem Ipsum</p>
                  </div>
                </a>
              </li>
              <!-- see more -->
              <li class="p-1" type="button">
                <div id="accordionFlushExample">
                  <div>
                    <!-- see more button -->
                    <div
                      class="d-flex align-items-center"
                      data-bs-toggle="collapse"
                      data-bs-target="#shortModal"
                      aria-expanded="false"
                      aria-controls="shortModal"
                    >
                      <div class="p-2">
                        <i
                          class="fas fa-chevron-down rounded-circle p-2"
                          style="background-color: #d5d5d5 !important"
                        ></i>
                      </div>
                      <div>
                        <p class="m-0">See More</p>
                      </div>
                    </div>
                    <!-- content -->
                    <div
                      id="shortModal"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div>
                        <!-- item 1 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://source.unsplash.com/random/4"
                              alt="from fb"
                              class="rounded border border-1 border-secondary"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Campus</p>
                          </div>
                        </div>
                        <!-- item 2 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://source.unsplash.com/random/5"
                              alt="from fb"
                              class="rounded border border-1 border-secondary"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Events</p>
                          </div>
                        </div>
                        <!-- item 3 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://source.unsplash.com/random/6"
                              alt="from fb"
                              class="rounded border border-1 border-secondary"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Newsfeed</p>
                          </div>
                        </div>
                        <!-- end -->
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- terms -->
          </div>
        </div>
        <style type="text/css">
          
#cb{
  margin-left: 0% !important;
}
@media only screen and (min-width: 1200px){
#cb {
  margin-left: -10% !important;
} 
}
        </style>
        <!-- ================= Timeline ================= -->
        <div class="col-12 col-lg-6 pb-5" id="cb">
          <div
            class="d-flex flex-column justify-content-center w-100 mx-auto"
            style="padding-top: 56px; max-width: 680px"
          >
            <!-- stories -->
            <div class="mt-5 d-flex justify-content-between position-relative">
              <!-- s 1 -->
              <div
                class="mx-1 bg-white rounded story"
                type="button"
                style="width: 6em; height: 190px"
              >
                <img
                  src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                  class="card-img-top"
                  alt="story posts"
                  style="min-height: 125px; object-fit: cover"
                />
                <div
                  class="
                    d-flex
                    align-items-center
                    justify-content-center
                    position-relative
                  "
                  style="min-height: 65px"
                >
                  <p class="mb-0 text-center fs-7 fw-bold">Create Story</p>
                  <div
                    class="position-absolute top-0 start-50 translate-middle"
                  >
                    <i
                      class="
                        fas
                        fa-plus-circle
                        fs-3
                        text-primary
                        bg-white
                        p-1
                        rounded-circle
                      "
                    ></i>
                  </div>
                </div>
              </div>
              <!-- s 2 -->
              <div
                class="rounded mx-1 story"
                type="button"
                style="width: 6em; height: 190px"
              >
                <img
                  src="https://source.unsplash.com/random/2"
                  class="card-img-top rounded"
                  alt="story posts"
                  style="min-height: 190px; object-fit: cover"
                />
              </div>
              <!-- s 3 -->
              <div
                class="rounded mx-1 story"
                type="button"
                style="width: 6em; height: 190px"
              >
                <img
                  src="https://source.unsplash.com/random/3"
                  class="card-img-top rounded"
                  alt="story posts"
                  style="min-height: 190px; object-fit: cover"
                />
              </div>
              <!-- s 4 -->
              <div
                class="rounded mx-1 story"
                type="button"
                style="width: 6em; height: 190px"
              >
                <img
                  src="https://source.unsplash.com/random/4"
                  class="card-img-top rounded"
                  alt="story posts"
                  style="min-height: 190px; object-fit: cover"
                />
              </div>
              <!-- s 5 -->
              <div
                class="d-none d-lg-block rounded mx-1 story"
                type="button"
                style="width: 6em; height: 190px"
              >
                <img
                  src="https://source.unsplash.com/random/5"
                  class="card-img-top rounded"
                  alt="story posts"
                  style="min-height: 190px; object-fit: cover"
                />
              </div>
              <!-- s 6 -->
              <div
                class="d-none d-lg-block rounded mx-1 story"
                type="button"
                style="width: 6em; height: 190px"
              >
                <img
                  src="https://source.unsplash.com/random/6"
                  class="card-img-top rounded"
                  alt="story posts"
                  style="min-height: 190px; object-fit: cover"
                />
              </div>
              <!-- next icon -->
              <div
                class="
                  position-absolute
                  top-50
                  start-100
                  translate-middle
                  pointer
                  d-none d-lg-block
                "
              >
                <i
                  class="
                    fas
                    fa-arrow-right
                    p-3
                    border
                    text-muted
                    bg-white
                    rounded-circle
                  "
                ></i>
              </div>
            </div>
            <!-- create post -->
            <div class="bg-white p-3 mt-3 rounded border shadow">
              <!-- avatar -->
              <div class="d-flex" type="button">
                <div class="p-1">
                  <img
                    src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                    alt="avatar"
                    class="rounded-circle me-2"
                    style="width: 38px; height: 38px; object-fit: cover"
                  />
                </div>
                <input
                  type="text"
                  class="form-control rounded-pill border-0 bg-gray pointer"
                  disabled
                  placeholder="What's on your mind, <?= $_SESSION['name']." ".$_SESSION['surname'] ?>?"
                  data-bs-toggle="modal"
                  data-bs-target="#createModal"
                />
              </div>
              <!-- create modal -->





              <div
                class="modal fade"
                id="createModal"
                tabindex="-1"
                aria-labelledby="createModalLabel"
                aria-hidden="true"
                data-bs-backdrop="false"
              >




                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <form method="POST" action="statut.php" enctype="multipart/form-data">
                    <!-- head -->
                    <div class="modal-header align-items-center">
                    <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">Create Post </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                      <div class="my-1 p-1">
                        <div class="d-flex flex-column">
                          <!-- name -->
                          <div class="d-flex align-items-center">
                            <div class="p-2">
                              <img
                                src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                                alt="from fb"
                                class="rounded-circle"
                                style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                "
                              />
                            </div>
                            <div>
                              <p class="m-0 fw-bold"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
                              <select
                                class="form-select border-0 bg-gray w-75 fs-7"
                                aria-label="Default select example"

                                name="view"
                              >
                                <option selected value="1">Public</option>
                                <option value="2">My Profil</option>
                                <option value="3">All</option>
                              </select>
                            </div>
                          </div>
                          <!-- text -->
                          <div>
                            <textarea
                              cols="30"
                              rows="5"
                              class="form-control border-0"
                              placeholder="Enter your post here..."
                              id='post'
                              name="description"
                            ></textarea>
                          </div>
                          <!-- emoji  -->
                          <div
                            class="
                              d-flex
                              justify-content-between
                              align-items-center
                            "
                          >

                          <span class="image-upload btn btn-large">
                          <label for="text-color">TEXT:
                          <input id="text-color" type="color" name="text_color" class="hide-upload"  onchange="color()"/>
                          <img id='imc' src="https://www.facebook.com/images/composer/SATP_Aa_square-2x.png"
                                class="pointer" alt="fb text" style="width: 30px;height: 30px;object-fit: cover;"/>
                          </label>
                          </span>
                          <span class="image-upload btn btn-large">
                          <label for="bg-color">:FONT:
                          <input id="bg-color" type="color" name="bg_color" class="hide-upload" />
                          <i class="far fa-laugh-wink fs-5 text-muted pointer"
                            ></i>
                          </label>
                          </span>
                            <i
                              class="far fa-laugh-wink fs-5 text-muted pointer"
                            ></i>
                          </div>
                          <!-- options -->
                          <div
                            class="
                              d-flex
                              justify-content-between
                              border border-1 border-light
                              rounded
                              p-3
                              mt-3
                            "
                          >
                            <p class="m-0">Add to your post</p>
                            <div>

                          <span class="image-upload">
                          <label for="images">
                          <input id="images" type="file" name="file[]" class="hide-upload" multiple  onchange="test_image(event)"/>
                          <i class=" fas fa-images fs-5 text-success pointer mx-1"></i>
                          </label>
                          </span>
                              <i
                                class="
                                  fas
                                  fa-user-check
                                  fs-5
                                  text-primary
                                  pointer
                                  mx-1
                                "
                              ></i>
                              <i
                                class="
                                  far
                                  fa-smile
                                  fs-5
                                  text-warning
                                  pointer
                                  mx-1
                                "
                              ></i>
                              <i
                                class="
                                  fas
                                  fa-map-marker-alt
                                  fs-5
                                  text-info
                                  pointer
                                  mx-1
                                "
                              ></i>
                              <i
                                class="
                                  fas
                                  fa-microphone
                                  fs-5
                                  text-danger
                                  pointer
                                  mx-1
                                "
                              ></i>
                              <i
                                class="
                                  fas
                                  fa-ellipsis-h
                                  fs-5
                                  text-muted
                                  pointer
                                  mx-1
                                "
                              ></i>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- end -->
                    </div>
                    <!-- footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary w-100">
                        Post
                      </button>
                    </div>
                    </form>
                  </div>

                </div>
              </div>
              <hr />




























              <!-- actions -->
              <div class="d-flex flex-column flex-lg-row mt-3">
                <!-- a 1 -->
                <div
                  class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  "
                  type="button"
                >
                  <i class="fas fa-video me-2 text-danger"></i>
                  <p class="m-0 text-muted">Live Video</p>
                </div>
                <!-- a 2 -->
                <div
                  class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  "
                  type="button"
                >
<span class="image-upload">
<label for="images_videos">
<input id="images_videos" type="file" name="image_video" class="hide-upload" multiple  onchange="test_images_videos(event)"/>
<i class="fas fa-photo-video me-2 text-success"></i><span class="m-0 text-muted">Photo/Video</span>
</label>
</span>          
                </div>
                <!-- a 3 -->
                <div
                  class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  "
                  type="button"
                >
                  <i class="fas fa-smile me-2 text-warning"></i>
                  <p class="m-0 text-muted">Feeling/Activity</p>
                </div>
              </div>
            </div>
            <!-- create room -->
<?php include ('sl.php') ?>
            <!-- posts -->

<?php include ('fp.php') ?>


          </div>
        </div>
        <!-- ================= Chatbar ================= -->
        <div class="col-12 col-lg-3">
          <div
            class="
              d-none d-xl-flex d-xxl-block
              h-100
              fixed-top
              end-0
              overflow-hidden
              scrollbar
            "
            style="
              max-width: 360px;
              width: 100%;
              z-index: 4;
              padding-top: 56px;
              left: initial !important;
            "
          >
            <div class="p-3 mt-4">
              <!-- sponsors -->
              <h5 class="text-muted">Sponsored</h5>
              <!-- s 1 -->
              <li class="dropdown-item my-2 d-flex justify-content-between">
                <!-- img -->
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none
                    link-dark
                  "
                >
                  <img
                    src="https://source.unsplash.com/random/1"
                    alt="ads"
                    style="width: 100px; height: 100px; object-fit: cover"
                    class="rounded me-3"
                  />
                  <div>
                    <p class="m-0">Lorem ipsum</p>
                    <span class="text-muted fs-7">loremipsum.com</span>
                  </div>
                </a>
                <!-- icon -->
                <div
                  class="
                    rounded-circle
                    p-1
                    bg-white
                    d-flex
                    align-items-center
                    justify-content-center
                    mx-2
                    sponsor-icon
                    nav-item
                  "
                  type="button"
                  style="width: 38px; height: 38px"
                >
                  <i
                    class="fas fa-ellipsis-h text-muted p-2"
                    data-bs-toggle="dropdown"
                  ></i>
                  <!-- menu -->
                  <ul class="dropdown-menu">
                    <!-- item 1 -->
                    <li class="dropdown-item">
                      <a
                        href="#"
                        class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        "
                      >
                        <i class="far fa-window-close"></i>
                        <div class="ms-3">
                          <p class="m-0">Hide Ad</p>
                          <span class="text-muted fs-7"
                            >Never see this add again.</span
                          >
                        </div>
                      </a>
                    </li>
                    <!-- item 2 -->
                    <li class="dropdown-item">
                      <a
                        href="#"
                        class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        "
                      >
                        <i class="fas fa-exclamation-triangle"></i>
                        <div class="ms-3">
                          <p class="m-0">Report Ad</p>
                          <span class="text-muted fs-7"
                            >Tell us a problem with this add.</span
                          >
                        </div>
                      </a>
                    </li>
                    <!-- item 3 -->
                    <li class="dropdown-item">
                      <a
                        href="#"
                        class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        "
                      >
                        <i class="fas fa-info-circle"></i>
                        <div class="ms-3">
                          <p class="m-0">Why am I seeing this ad?</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- s 2 -->
              <li class="dropdown-item my-2 d-flex justify-content-between">
                <!-- img -->
                <a
                  href="#"
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none
                    link-dark
                  "
                >
                  <img
                    src="https://source.unsplash.com/random/2"
                    alt="ads"
                    style="width: 100px; height: 100px; object-fit: cover"
                    class="rounded me-3"
                  />
                  <div>
                    <p class="m-0">Lorem ipsum</p>
                    <span class="text-muted fs-7">loremipsum.com</span>
                  </div>
                </a>
                <!-- icon -->
                <div
                  class="
                    rounded-circle
                    p-1
                    bg-white
                    d-flex
                    align-items-center
                    justify-content-center
                    mx-2
                    sponsor-icon
                    nav-item
                  "
                  type="button"
                  style="width: 38px; height: 38px"
                >
                  <i
                    class="fas fa-ellipsis-h text-muted p-2"
                    data-bs-toggle="dropdown"
                  ></i>
                  <!-- menu -->
                  <ul class="dropdown-menu">
                    <!-- item 1 -->
                    <li class="dropdown-item">
                      <a
                        href="#"
                        class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        "
                      >
                        <i class="far fa-window-close"></i>
                        <div class="ms-3">
                          <p class="m-0">Hide Ad</p>
                          <span class="text-muted fs-7"
                            >Never see this add again.</span
                          >
                        </div>
                      </a>
                    </li>
                    <!-- item 2 -->
                    <li class="dropdown-item">
                      <a
                        href="#"
                        class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        "
                      >
                        <i class="fas fa-exclamation-triangle"></i>
                        <div class="ms-3">
                          <p class="m-0">Report Ad</p>
                          <span class="text-muted fs-7"
                            >Tell us a problem with this add.</span
                          >
                        </div>
                      </a>
                    </li>
                    <!-- item 3 -->
                    <li class="dropdown-item">
                      <a
                        href="#"
                        class="
                          d-flex
                          align-items-center
                          text-decoration-none text-dark
                        "
                      >
                        <i class="fas fa-info-circle"></i>
                        <div class="ms-3">
                          <p class="m-0">Why am I seeing this ad?</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- contacts -->
              <hr class="m-0" />
              <div
                class="my-3 d-flex justify-content-between align-items-center"
              >
                <p class="text-muted fs-5 m-0">Contacts</p>
                <!-- icons -->
                <div class="text-muted">
                  <!-- video room -->
                  <i
                    class="fas fa-video mx-2 pointer"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#videoRoomD"
                  ></i>
                  <!-- video room modal -->
                  <div
                    class="modal fade"
                    id="videoRoomD"
                    tabindex="-1"
                    aria-labelledby="videoRoomDLabel"
                    aria-hidden="true"
                    data-bs-backdrop="false"
                  >
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content bg-dark">
                        <!-- header -->
                        <div class="modal-header border-0">
                          <button
                            type="button"
                            class="btn-close btn-close-white"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <!-- body -->
                        <div
                          class="
                            modal-body
                            d-flex
                            flex-column
                            align-items-center
                            justify-content-center
                          "
                          style="min-height: 400px"
                        >
                          <i class="fas fa-video fs-0"></i>
                          <h3 class="text-white">Schedule A Room For Later</h3>
                          <p class="text-white text-center w-50 mx-auto">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Ut deserunt alias laudantium itaque eius enim
                            natus culpa eligendi consectetur maiores!
                          </p>
                          <button class="btn btn-lg btn-primary rounded-pill">
                            Schedule Room
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- new chat -->
                  <i
                    class="fas fa-search mx-2 pointer"
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#newChat"
                  ></i>
                  <!-- chat settings -->
                  <i
                    class="fas fa-ellipsis-h pointer text-muted mx-2"
                    type="button"
                    data-bs-toggle="dropdown"
                  ></i>
                  <!-- chat setting dd -->
                  <ul class="dropdown-menu shadow" style="width: 18em">
                    <!-- title -->
                    <div class="p-2">
                      <h5>Chat Settings</h5>
                      <span class="text-muted fs-7"
                        >Customize your Messenger experience.</span
                      >
                    </div>
                    <hr />
                    <!-- incoming sound -->
                    <li>
                      <div
                        class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        "
                      >
                        <!-- icon -->
                        <div class="d-flex align-items-center">
                          <i class="fas fa-phone-alt me-3"></i>
                          <p class="m-0">Incoming call sounds</p>
                        </div>
                        <!-- toggle -->
                        <div class="form-check form-switch m-0">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="flexSwitchCheckChecked"
                            checked
                          />
                          <label
                            class="form-check-label"
                            for="flexSwitchCheckChecked"
                          ></label>
                        </div>
                      </div>
                    </li>
                    <!-- message sound -->
                    <li>
                      <div
                        class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        "
                      >
                        <!-- icon -->
                        <div class="d-flex align-items-center">
                          <i class="fas fa-volume-off me-4 fs-4"></i>
                          <p class="m-0">Message sounds</p>
                        </div>
                        <!-- toggle -->
                        <div class="form-check form-switch m-0">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="flexSwitchCheckChecked"
                            checked
                          />
                          <label
                            class="form-check-label"
                            for="flexSwitchCheckChecked"
                          ></label>
                        </div>
                      </div>
                    </li>
                    <!-- popup message -->
                    <li>
                      <div
                        class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        "
                      >
                        <!-- icon -->
                        <div class="d-flex align-items-center">
                          <i class="fas fa-spinner me-3"></i>
                          <p class="m-0">Pop-up new messages</p>
                        </div>
                        <!-- toggle -->
                        <div class="form-check form-switch m-0">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="flexSwitchCheckChecked"
                            checked
                          />
                          <label
                            class="form-check-label"
                            for="flexSwitchCheckChecked"
                          ></label>
                        </div>
                      </div>
                      <span class="ms-5 text-muted fs-7"
                        >Automatically open new messages.</span
                      >
                    </li>
                    <hr class="m-0" />
                    <!-- item 1 -->
                    <li>
                      <div
                        class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        "
                      >
                        <!-- icon -->
                        <div class="d-flex align-items-center">
                          <i class="fas fa-toggle-off me-3"></i>
                          <p class="m-0">Turn Off Active Status</p>
                        </div>
                      </div>
                    </li>
                    <!-- item 2 -->
                    <li>
                      <div
                        class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        "
                      >
                        <!-- icon -->
                        <div class="d-flex align-items-center">
                          <i class="far fa-comment-alt me-3"></i>
                          <p class="m-0">Message Request</p>
                        </div>
                      </div>
                    </li>
                    <!-- item 3 -->
                    <li>
                      <div
                        class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        "
                      >
                        <!-- icon -->
                        <div class="d-flex align-items-center">
                          <i class="fas fa-share-square me-3"></i>
                          <p class="m-0">Message delivery settings</p>
                        </div>
                      </div>
                    </li>
                    <!-- item 4 -->
                    <li>
                      <div
                        class="
                          dropdown-item
                          d-flex
                          align-items-center
                          justify-content-between
                        "
                      >
                        <!-- icon -->
                        <div class="d-flex align-items-center">
                          <i class="fas fa-shield-alt me-3"></i>
                          <p class="m-0">Block settings</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- friend 1 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat1"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                    <div>
                      <div class="popover-body d-flex p-2">
                        <div>
                          <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                        </div>
                        <div >
                          <h5>Mike</h5>
                          <div class="d-flex">
                            <i class="fas fa-user-friends m-1 text-muted"></i>
                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                          </div>
                          <div class="d-flex">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/4"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Mike</p>
                </div>
              </li>
              <!-- friend 2 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat2"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://source.unsplash.com/random/2" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tuan</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/2"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Tuan</p>
                </div>
              </li>
              <!-- friend 3 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat3"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                              <div>
                                <div class="popover-body d-flex p-2">
                                  <div>
                                    <img src="https://source.unsplash.com/random/3" alt="avatar" class="pop-avatar"  />
                                  </div>
                                  <div >
                                    <h5>Jerry</h5>
                                    <div class="d-flex">
                                      <i class="fas fa-user-friends m-1 text-muted"></i>
                                      <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                    </div>
                                    <div class="d-flex">
                                    <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                    <p>Studies at MIT</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/3"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Jerry</p>
                </div>
              </li>
              <!-- friend 4 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat4"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tony</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/4"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Tony</p>
                </div>
              </li>
              <!-- friend 5 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat5"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                      <div>
                        <div class="popover-body d-flex p-2">
                          <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar" class="pop-avatar"  />
                          </div>
                          <div >
                            <h5>Phu</h5>
                            <div class="d-flex">
                              <i class="fas fa-user-friends m-1 text-muted"></i>
                              <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                            </div>
                            <div class="d-flex">
                            <i class="fas fa-graduation-cap m-1 text-muted"></i>
                            <p>Studies at MIT</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/5"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Phu</p>
                </div>
              </li>
              <!-- friend 6 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat1"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                                  <div>
                                    <div class="popover-body d-flex p-2">
                                      <div>
                                        <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                                      </div>
                                      <div >
                                        <h5>Mike</h5>
                                        <div class="d-flex">
                                          <i class="fas fa-user-friends m-1 text-muted"></i>
                                          <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                        </div>
                                        <div class="d-flex">
                                        <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                        <p>Studies at MIT</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/4"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Mike</p>
                </div>
              </li>
              <!-- friend 7 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat2"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                                        <div>
                                          <div class="popover-body d-flex p-2">
                                            <div>
                                              <img src="https://source.unsplash.com/random/2" alt="avatar" class="pop-avatar"  />
                                            </div>
                                            <div >
                                              <h5>Tuan</h5>
                                              <div class="d-flex">
                                                <i class="fas fa-user-friends m-1 text-muted"></i>
                                                <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                              </div>
                                              <div class="d-flex">
                                              <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                              <p>Studies at MIT</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/2"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Tuan</p>
                </div>
              </li>
              <!-- friend 8 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat3"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                                            <div>
                                              <div class="popover-body d-flex p-2">
                                                <div>
                                                  <img src="https://source.unsplash.com/random/3" alt="avatar" class="pop-avatar"  />
                                                </div>
                                                <div >
                                                  <h5>Jerry</h5>
                                                  <div class="d-flex">
                                                    <i class="fas fa-user-friends m-1 text-muted"></i>
                                                    <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                                  </div>
                                                  <div class="d-flex">
                                                  <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                                  <p>Studies at MIT</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/3"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Jerry</p>
                </div>
              </li>
              <!-- friend 9 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat4"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                                        <div>
                                          <div class="popover-body d-flex p-2">
                                            <div>
                                              <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                                            </div>
                                            <div >
                                              <h5>Tony</h5>
                                              <div class="d-flex">
                                                <i class="fas fa-user-friends m-1 text-muted"></i>
                                                <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                              </div>
                                              <div class="d-flex">
                                              <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                              <p>Studies at MIT</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/4"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Tony</p>
                </div>
              </li>
              <!-- friend 10 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat5"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                                    <div>
                                      <div class="popover-body d-flex p-2">
                                        <div>
                                          <img src="https://source.unsplash.com/random/5" alt="avatar" class="pop-avatar"  />
                                        </div>
                                        <div >
                                          <h5>Phu</h5>
                                          <div class="d-flex">
                                            <i class="fas fa-user-friends m-1 text-muted"></i>
                                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                          </div>
                                          <div class="d-flex">
                                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                          <p>Studies at MIT</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/5"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Phu</p>
                </div>
              </li>
              <!-- friend 11 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat1"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                    <div>
                      <div class="popover-body d-flex p-2">
                        <div>
                          <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                        </div>
                        <div >
                          <h5>Mike</h5>
                          <div class="d-flex">
                            <i class="fas fa-user-friends m-1 text-muted"></i>
                            <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                          </div>
                          <div class="d-flex">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/4"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Mike</p>
                </div>
              </li>
              <!-- friend 12 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat2"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://source.unsplash.com/random/2" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tuan</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/2"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Tuan</p>
                </div>
              </li>
              <!-- friend 13 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat3"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                              <div>
                                <div class="popover-body d-flex p-2">
                                  <div>
                                    <img src="https://source.unsplash.com/random/3" alt="avatar" class="pop-avatar"  />
                                  </div>
                                  <div >
                                    <h5>Jerry</h5>
                                    <div class="d-flex">
                                      <i class="fas fa-user-friends m-1 text-muted"></i>
                                      <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                    </div>
                                    <div class="d-flex">
                                    <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                    <p>Studies at MIT</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/3"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Jerry</p>
                </div>
              </li>
              <!-- friend 14 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat4"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                          <div>
                            <div class="popover-body d-flex p-2">
                              <div>
                                <img src="https://source.unsplash.com/random/4" alt="avatar" class="pop-avatar"  />
                              </div>
                              <div >
                                <h5>Tony</h5>
                                <div class="d-flex">
                                  <i class="fas fa-user-friends m-1 text-muted"></i>
                                  <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                                </div>
                                <div class="d-flex">
                                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                                <p>Studies at MIT</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/4"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Tony</p>
                </div>
              </li>
              <!-- friend 15 -->
              <li
                class="dropdown-item rounded my-2 px-0"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat5"
              >
                <!-- avatar -->
                <div
                  class="d-flex align-items-center mx-2 chat-avatar"
                  data-bs-custom-class="chat-box"
                  data-bs-container="body"
                  data-bs-toggle="popover"
                  data-bs-placement="left"
                  data-bs-trigger="hover"
                  data-bs-content='
                      <div>
                        <div class="popover-body d-flex p-2">
                          <div>
                            <img src="https://source.unsplash.com/random/5" alt="avatar" class="pop-avatar"  />
                          </div>
                          <div >
                            <h5>Phu</h5>
                            <div class="d-flex">
                              <i class="fas fa-user-friends m-1 text-muted"></i>
                              <p>2 mutual friends: <span class="fw-bold">Jerry</span> and <span class="fw-bold">Phu</span></p>
                            </div>
                            <div class="d-flex">
                            <i class="fas fa-graduation-cap m-1 text-muted"></i>
                            <p>Studies at MIT</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    '
                  data-bs-html="true"
                >
                  <div class="position-relative">
                    <img
                      src="https://source.unsplash.com/random/5"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                    <span
                      class="
                        position-absolute
                        bottom-0
                        translate-middle
                        border border-light
                        rounded-circle
                        bg-success
                        p-1
                      "
                      style="left: 75%"
                    >
                      <span class="visually-hidden"></span>
                    </span>
                  </div>
                  <p class="m-0">Phu</p>
                </div>
              </li>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================= Chat Icon ================= -->
    <div
      class="fixed-bottom right-100 p-3"
      style="z-index: 6; right: initial;"
      type="button"
      data-bs-toggle="modal"
      data-bs-target="#newChat"
    >
      <i class="fas fa-edit bg-white rounded-circle p-3 shadow"></i>
    </div>
    <script src="./bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./main.js"></script>
  </body>
</html>

