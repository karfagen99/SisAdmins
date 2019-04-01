<?php

require "db.php";

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<title>SisAdminsTeam</title>
 <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
 <link href="css/style_index.css" rel="stylesheet">
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

<!-- </ul></div>
<div class="logo">
<a href="#"><img src="img/valery.png" width="42" height="42" ></a>
--> </div>
</div>


<hr width="700em">
<div class="content">
  	<div class="dobavit">
     <button type="button">Добавить</button>
 </div>
<?php include ("blocks/content.php");?>
</div>
</body>


