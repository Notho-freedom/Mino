import cgi

form = cgi.FieldStorage()
print("Content-Type: text/html; charset=utf-8\n")

print(form.getvalue("name"))

html=
"""
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
</head>
<body>
<form method="POST" action="av.php">
<li class="dropdown-item p-1 rounded d-flex" title="click on this picture to change">

<span class="image-upload">
<label for="av">
<input id="av" type="file" name="avt" class="hide-upload" onchange="test_av(event)"/>
<img src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>" alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover"/>
<i class="fas fa-camera position-absolute" style="margin-left: -30px;top: 57px !important;"></i>
</label>
</span>

<div class="me-2" style="margin-left:30px;">
<p class="m-0"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
<p class="m-0 text-muted">See your profile</p>
</div>
<button type="submit" class="btn btn-primary pull-right d-none" id="subav" name='avatar'>Change</button>
</li>
</form>
</body>
</html>
"""

print(html)