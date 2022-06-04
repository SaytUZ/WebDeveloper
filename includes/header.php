<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/all.css">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <div class="wrap">
        <header class="header">
            <a href="/" class="logo">WEBDEVELOPER</a>
            <? if(!isset($_SESSION['id'])): ?>
            <div class="singIn">
                <?foreach ($pages as $key => $value): ?>
                    <?if(!isset($value['icon'])):?>
                        <a href="?route=<?=$key?>" class="singIn__link"><?=$value['name']?></a>
                    <?endif;?>
                <?endforeach;?>
            </div>
            <? else: ?>
            <div class="user">
                <div class="user__profile">
                    <img src="<?=$userInfo['img_path']?>" alt="" class="user__profile-img">
                    <h4 class="user__profile-name"><?=$userInfo['user_name']?></h4>
                </div>
                <ul class="user__menu">
                    <li><a href="https:/t.me/errorcrazy" class="user__menu-link"><i class="fab fa-telegram-plane"></i>телеграмма</a></li>
                    <li><a href="https://www.instagram.com/azizbek.akhmedoff" class="user__menu-link"><i class="fab fa-instagram"></i>инстаграм</a></li>
                    <li><a href="/?route=edit" class="user__menu-link"><i class="fal fa-cog"></i>Настройка</a></li>
                    <li><a href="../includes/user-out.php" class="user__menu-link"><i class="far fa-external-link"></i>Выход</a></li>
                </ul>
            </div>
            <? endif; ?>
        </header>