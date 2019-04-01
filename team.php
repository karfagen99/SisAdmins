<!DOCTYPE html>
<meta charset="UTF-8">
<head>
<title>SisAdminsTeam</title>
<link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
<link href="css/style_team.css" rel="stylesheet">
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

<div class="content"> <hr width="700em">


<div class="block">
<a href="#"><foto class="foto" style="background-image: url(img/nologo.png);
margin-top: 0;"></foto></a>
<p class="text">
Мы - не большая группа людей связанная общими интересами, в частности в сфере IT.
Начали свое существование 25 августа 2018 года.
<p>Нас можно найти:
<br><br>

<div class="navi" style="text-align: center;text-indent: 7em;"><a href="https://discord.gg/8BQwnD"><button type="button">Discord</button></a> | <a href="https://gitlab.com/sisadmins"><button type="button">Gitlab</button></a> | <a href="https://sisadmins.slack.com/"><button type="button">Slack</button></a>
 </p></div>


<div-block>
<div class="block" style="margin-right: 30px;">
<foto style="background-image: url(img/valery.png); border-radius: 15%;"></foto>
<p><strong>Имя:</strong> Валера
<p><strong>Возраст:</strong> 16
<p><strong>Город:</strong> Вятские Поляны
<p><strong>Никнейм:</strong> karfagen
<p><strong>Должность:</strong> Верстальщик
<p><strong>Знания:</strong> HTML / CSS / PHP(В процессе)
<div class="block-first">
<a href="https://vk.com/maybuk97"><button type="button">Vk</button></a><br>
<a href="https://steamcommunity.com/id/neshark/"><button type="button">Steam</button></a><br>
<a href="https://github.com/karfagen99"><button type="button">Github</button></a><br>


</div>
</div>
<div class="block"><foto style="background-image: url(img/karl.png); border-radius: 15%;"></foto>
<p><strong>Имя:</strong> Александр
<p><strong>Возраст:</strong> 22 
<p><strong>Город:</strong> Омск
<p><strong>Никнейм:</strong> Karl Stein / Geriler
<p><strong>Должность:</strong> Основатель / тимлид
<p><strong>Знания:</strong> C / C++ / C# / Java / Python / PHP / SQL / JS / HTML / CSS /
<div class="block-first">
<a href="#"><button type="button">Vk</button></a><br>
<a href="https://steamcommunity.com/id/alex_geriler"><button type="button">Steam</button></a><br>
<a href="https://github.com/Geriler"><button type="button">Github</button></a><br>
<a href="https://gitlab.com/Geriler"><button type="button">Gitlab</button></a><br>


</div>
</div>
<div class="block" style="margin-left: 30px;">
<foto style="background-image: url(img/ann.png); border-radius: 15%;"></foto>
<p><strong>Имя:</strong> Анна
<p><strong>Возраст:</strong> 18
<p><strong>Город:</strong> Омск
<p><strong>Никнейм:</strong> AnnaEvgrashina
<p><strong>Должность:</strong> Генератор идей
<p><strong>Знания:</strong> C / Java / PHP / HTML / CSS
<div class="block-first">
<a href="https://vk.com/id266865734"><button type="button">Vk</button></a><br>
<a href="https://github.com/AnnaEvgrashina"><button type="button">Github</button></a><br>
<a href="https://gitlab.com/AnnaEvgrashina"><button type="button">Gitlab</button></a><br>

</div>
</div>
</div-block>


</div>

</body>