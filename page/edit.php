<main class="main">
    <section class="head">
        <h2 class="head__title"><?=$userInfo['user_login']?></h2>
        <p class="head__date"><?=$pageDate?></p>
    </section>
    <img src="<?=$userInfo['img_path']?>" alt="" class="user-img">
    <br><br>
    <form action="./includes/user-avatar.php" method="POST" enctype="multipart/form-data" class="userForm">
        <h3>Добавить фотографию</h3>
        <input type="file" name="avatar[]" accept="image/jpeg,image/jpg,image/png,image/svg,image/gif,image/webp" multiple>
        <button class="form__btn">Добавить</button>
        <br>
    </form>
    <form action="./includes/user-edit-photos.php" method="POST" class="avatars">
        <? foreach ($getPhotos as $key => $value): ?>
            <label class="avatars__label">
                <img src="<?= $value['img_path']?>" alt="" class="avatars__img">
                <input class="avatars__input" type="radio" value="<?= $value['img_id']?>" name="avatars-check" <?= $value['img_select'] == '1' ? "checked" : ''?>>
                <span class="avatars__check"><i class="far fa-check"></i></span>
                <a class="avatars__trash" href="../includes/user-del-photos.php?trash=<?= $value['img_id']?>"><i class="far fa-trash-alt"></i></a>
            </label>
        <? endforeach; ?>
        <div class="avatars__btn">
            <button class="form__btn">Изменить фотографию</button>
        </div>
    </form>
    <form action="./includes/user-edit-info.php" class="set-logo" method="POST">
        <fieldset class="set-login__fieldset">
            <legend>Изменить инфo</legend>
            <input type="text" name="login" value="<?=$userInfo['user_login']?>">
            <input type="text" name="name" value="<?=$userInfo['user_name']?>">
            <button class="form__btn">Изменить лoгин</button>
        </fieldset>
    </form>
</main>
