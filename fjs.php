
function like(e) {
var id=e.target.id;
var idf=id+'l';
var xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      console.log(this.response);
      var a="<span>"+this.response+" </span>";
        if (this.response.length<10) {
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



function test_audio(e,s) {

    var file=e.target.files;
    console.log(e);
    console.log(e.target);
    console.log(file);
    console.log(file[0]);
    console.log(file[0]['type']);

if (
  (file[0]['type'] != "audio/mp3")&&
  (file[0]['type'] != "audio/wav")&&
  (file[0]['type'] != "audio/3gp")&&
  (file[0]['type'] != "audio/m4a")&&
  (file[0]['type'] != "audio/m3u")&&
  (file[0]['type'] != "audio/ogg")&&
  (file[0]['type'] != "audio/wma")&&
  (file[0]['type'] != "audio/mpeg")
   ){
        if (s!=0) {
          window.alert("ce fichier n'est pas audio!");
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



function test_images_videosp(e) {

  if (!test_image(e,0)) {
    if (!test_video(e,0)) {
      if (!test_audio(e,0)) {
        window.alert("ce fichier n'est pas un media acceptable!");
          return false;
      } else {
      document.getElementById('post').placeholder='fichier(s) sélectionné(s)!';
      return true;
      }
    }else{
      document.getElementById('post').placeholder='fichier(s) sélectionné(s)!';
      return true;
    }
  }else{
      document.getElementById('post').placeholder='fichier(s) sélectionné(s)!';
      return true;
    }
  
}

function color(id,cl) {
  console.log("open");
  var color='';
  color=document.getElementById(cl).value;
  console.log(color);
  if (cl == 'text-color') {
    document.getElementById('post').style.color=color;
  } else {
    document.getElementById('post').style.backgroundColor=color;
  }
}


function test_av(e) {

  if (!test_image(e,0)) {
    window.alert("le fichier  sélectionné n'est pas une image!");
  }else{
      //document.getElementById('subav').style.display='flex';
      document.getElementById('subav').classList.remove("d-none");
      document.getElementById('subav').classList.add('d-flex');
  }
}