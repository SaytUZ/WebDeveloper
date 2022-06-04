<?

include_once("./db.php");

$userInfoAll = userInfo();
$photos = $_FILES['avatar'];

foreach ($photos['name'] as $key => $value) {
    $rand_name = md5(time()-"$key");
    $photoExt = pathinfo($value, PATHINFO_EXTENSION);
    $photoName = "{$userInfoAll['user_login']}-$rand_name.$photoExt";
    $photoDirName = "./img/users/$photoName";
    if ($value) {
        $addUserPhotos = addUserPhotos($photoDirName);
    }
    if ($addUserPhotos) {
        move_uploaded_file($photos["tmp_name"][$key], ".$photoDirName");
    }
    
}

header("Location:/?route=edit");

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";