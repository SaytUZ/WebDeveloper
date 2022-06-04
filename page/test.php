
        
<main class="main">
    <section class="head">
        <h2 class="head__title"><?=$pageTitle?></h2>
        <p class="head__date"><?=$pageDate?></p>
    </section>
    <? 
    //    $name = "Jhon";
    //    echo 'Salom ' . $name;
    // //    echo "<h1>Salom $name</h1>";
    // echo "<br>";
    // echo "Salom $name";
    
    
    // echo "<br>";
    // $arr = [1, 2, 3, 4, 5];
    
    // echo "<pre>";
    // // var_dump($arr);
    // print_r($arr);
    // echo "</pre>";
        
    // $arr = ['html', 'css', 'js', 'php', 'nodejs'];
    // for ($i=0; $i < count($arr); $i++) { 
    //     echo $arr[$i] . "<br>";
    // }
    
    // $a = 6;
    // if ($a > 6) {
    //     echo "$a > 6";
    // }else if($a < 6){
    //     echo "$a < 6";
    // }elseif($a == 6){
    //     echo "$a = 6";
    // }else {
    //     echo "Error";
    // }
    
    // echo date("d z W M t Y");
    
    // 2022-yil 30-Aprel 14:01 
    // date_default_timezone_set("Asia/Tashkent");
    // echo date("Y-\y\i\l d-F H:i");
        
    ?>
    
    <!-- <select>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select> -->
    
    <?
        
        // $obj = [
        //     "name" => "Jhon",
        //     "age" => "12",
        //     "address" => [
        //         "city" => "Tashkent",
        //         "phone" => "234234233245",
        //     ],
        // ];
        
        // foreach ($obj as $key => $value) {
        //     if (gettype($value) == 'array') {
        //         foreach ($value as $key2 => $qiymat) {
        //             echo $key2 . " => " . $qiymat . "<br>";
        //         }
        //     }else{
        //         echo $key . " => " . $value . "<br>";
        //     }
        // }
    ?>
    
    
    <form action="" method="POST">
        <label for="ism">Ism</label>
        <br>
        <input id="ism" type="text" placeholder="Name" name="name">
        <br>
        <label for="familiya">Familiya</label>
        <br>
        <input id="familiya" type="text" placeholder="Surname" name="surname">
        <br>
        <br>
        <button type="submit">Send</button>
    </form>
    <?
        $tag = htmlspecialchars($_POST['name']);
        echo "Ism = " . $tag;
        echo "<br>";
        echo "Familya = " . $_POST['surname'];
    ?>
    
</main>