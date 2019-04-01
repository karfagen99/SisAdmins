<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<title>SisAdminsTeam</title>
<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
<link href="css/style_admin.css" rel="stylesheet">
</head>
<body>
<div class="header">
<h3>SisAdminsTeam</h3>
<hr>
<div class="nav">
<div class="aut">
<ul>
<?php if(isset($_SESSION['logged_user'])) : ?>
Вы авторизованы как: <?php echo $_SESSION['logged_user']->login; ?>
<li><a href="/logout.php"><button>Выйти</button></a></li> 
<?php else : ?>
<li><a href="/login.php"><button>Sign in</button></a><br></li>
<li><a href="/signup.php"><button>Sign up</button></a></li>
<h2>Вы не авторизованы!</h2>
<?php endif;?>
</ul>
</ul>
</div>
<ul>
<li><a href="index.php"><button type="button">Главная</button></a></li>
<li><a href="team.php"><button type="button">Команда</button></a></li>
<li><a href="materials.php"><button type="button">Материалы</button></a></li>
<li><a href="admins.php"><button type="button">Админка</button></a></li>
</div>
</div>

</div>
<hr width="700em">
<div class="nav1">
<div style="text-align: center;text-indent: 7em;"><a href="#"><button type="button">Добавить новость</button></a> | <a href="#"><button type="button">Добавить материал</button></a> | <a href="#"><button type="button">Добавить карточку</button></a></div></p></div></div>

<div class="content">


<div class="text">Quisque eleifend efficitur turpis vitae aliquam. Duis a lectus sem. Vestibulum lectus magna, ullamcorper eu turpis eget, feugiat mollis enim. Aliquam porta blandit lectus sit amet elementum. Nunc commodo, libero non scelerisque suscipit, ligula quam auctor odio, sit amet eleifend leo diam ut ante.
<div class="change"><a href="#"><button type="button">Change</button></a></div>
<div class="delete"><a href="#"><button type="button">Delete</button></a></div>
</div>
<div class="text">Quisque eleifend efficitur turpis vitae aliquam. Duis a lectus sem. Vestibulum lectus magna, ullamcorper eu turpis eget, feugiat mollis enim. Aliquam porta blandit lectus sit amet elementum. Nunc commodo, libero non scelerisque suscipit, ligula quam auctor odio, sit amet eleifend leo diam ut ante.
<div class="change"><a href="#"><button type="button">Change</button></a></div>
<div class="delete"><a href="#"><button type="button">Delete</button></a></div>
</div>
<div class="text">Quisque eleifend efficitur turpis vitae aliquam. Duis a lectus sem. Vestibulum lectus magna, ullamcorper eu turpis eget, feugiat mollis enim. Aliquam porta blandit lectus sit amet elementum. Nunc commodo, libero non scelerisque suscipit, ligula quam auctor odio, sit amet eleifend leo diam ut ante.
<div class="change"><a href="#"><button type="button">Change</button></a></div>
<div class="delete"><a href="#"><button type="button">Delete</button></a></div>
</div>


</div>
</body>
