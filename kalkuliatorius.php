<form action="" method="get">

<input type="text" name="X" id="iksas" value="<?= $_GET['X'] ?? '' ?>">
<input type="text" name="Y" id="igrekas" value="<?php echo $_GET['Y'] ?? '' ?>">



<!-- <input type="submit" name="_1" value="sum"> -->
<button type="submit" name="Action" value="+">Sumuoti</button>
<button type="submit" name="Action" value="-">Minusuoti</button>

</form>

<?php

// if(!empty($_GET)) {

if(isset($_GET['X']) && isset($_GET['Action']) && isset($_GET['Y'])) {
    echo $_GET['X']. $_GET['Action']. $_GET['Y']; 
    if($_GET['Action'] == '+') {
        echo '<h1>'.((int)$_GET['X']+(int)$_GET['Y']).'</h1>';
    }
    if($_GET['Action'] == '-') {
        echo '<h1>'.((int)$_GET['X']-(int)$_GET['Y']).'</h1>';
    }  
} else {
    echo 'Iveskite skaiciukus.';
}

_dc($_GET);


