<link rel="stylesheet" href="css/style_signup.css">


<div class="main">

<?php

//used https://redbeanphp.com/index.php?p=/crud

require "db.php";
$data = $_POST;

if (isset($data['do_signup'])) {
    $errors = array();
    if (trim($data['login']) == '') {
        $errors[] = 'Введите логин';
    }

    if (trim($data['email']) == '') {
        $errors[] = 'Введите email';
    }

    if ($data['password'] == '') {
        $errors[] = 'Введите пароль';
    }

    if ($data['password_2'] != $data['password']) {
        $errors[] = 'Повторный пароль введен неверно';
    }

    //reg on existing login/email denied
    if (R::count('users', "login = ?", array($data['login'])) > 0) {
        $errors[] = 'Пользователь с таким логином уже существует';
    }

    if (R::count('users', "email = ?", array($data['email'])) > 0) {
        $errors[] = 'Пользователь с такой почтой уже существует';
    }

    if (empty($errors)) {
        //all ok reg suc
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        //pass saves crypted
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        R::store($user);
        echo '<div style="color: green;">Регистрация прошла успешно. Переход на страницу <a href="login.php">авторизации</a></div><hr>';

    } else {
        echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
    }

}

?>

<form action="signup.php" method="POST">

    <p>
        <p><strong>Ваш логин:</strong></p>
        <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </p>

    <p>
        <p><strong>Ваш Email:</strong></p>
        <input type="email" name="email" value="<?php echo @$data['email']; ?>">
    </p>

    <p>
        <p><strong>Ваш пароль:</strong></p>
        <input type="password" name="password" value="<?php echo @$data['password']; ?>">
    </p>

    <p>
        <p><strong>Повторите пароль:</strong></p>
        <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
    </p>

    <p>
        <button type="submit" name="do_signup">Зарегистрироваться</button>
    </p>
</form>
</div>