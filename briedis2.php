
<!-- <?php -->
    // Mano variantas
    // if (isset($_POST['Action']) && !isset($_POST['briedis'])) {
    //     $result = 'Tai pasirink kažką';
    //     echo '<h1>Tai pasirink kažką!</h1>';
    // }
    // if (isset($_POST['briedis']) && isset($_POST['Action'])) {
    //     if ($_POST['briedis'] == $_POST['Action']) {
    //         echo '<h1>TEISINGAI!</h1>';
    //     } else {
    //         echo '<h1>NETEISINGAI!!</h1>';
    //     }
    // }


    // Destytojo variantas

//     if (isset($_POST['button']) && !isset($_POST['briedis'])) {
//         $result = 'Tai pasirink kažką';
//     }
//     if(isset($_POST['briedis'])){
//         if(($_POST['briedis']) == 3){
//             $result = 'Teisingai';
//         } else {
//             $result = 'Blogai';
//         }
//     } else {
//         $result = 'Pradekite testa';
//     }

// ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Briedis</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://localhost/grazus/briedis.js" defer></script>
</head>
<body>
<h1><?= $result?></h1>
    <div class="briedis">
        <img src="https://www.atviraklaipeda.lt/wp-content/uploads/brie960.jpg" alt="Briedis"><br>
        <h1>Atspek kas tai</h1>

        <form action="" method="post">

            <label for="_1">Asilas</label><input type="radio" name="briedis" id="_1" value="1"><br>
            <label for="_2">Kiaule</label><input type="radio" name="briedis" id="_2" value="2"><br>
            <label for="_3">Briedis</label><input type="radio" name="briedis" id="_3" value="3"><br>
            <label for="_4">Zasis</label><input type="radio" name="briedis" id="_4" value="4"><br>

            <button type="submit" name="Action" value="3">Speti!</button>
            <button type="submit" name="button" value="pressed" id="button">Speti!</button>
        
        </form>
    </div>

</body>
</html> -->