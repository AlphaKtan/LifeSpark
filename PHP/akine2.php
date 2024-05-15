<?php '../header.php';?>
<?php
$points = 0;

if(isset($_POST['question1'])) {
    $points += $_POST['question1'];
}

if(isset($_POST['question2'])) {
    $points += $_POST['question2'];
}

if(isset($_POST['question3'])) {
    $points += $_POST['question3'];
}

if(isset($_POST['question4'])) {
    $points += $_POST['question4'];
}

if(isset($_POST['question5'])) {
    $points += $_POST['question5'];
}

if(isset($_POST['question6'])) {
    $points += $_POST['question6'];
}

if(isset($_POST['question7'])) {
    $points += $_POST['question7'];
}

if(isset($_POST['question8'])) {
    $points += $_POST['question8'];
}

if(isset($_POST['question9'])) {
    $points += $_POST['question9'];
}

if(isset($_POST['question10'])) {
    $points += $_POST['question10'];
}

if($points > 35) {
    echo "お勧めのアウトドアジャンルは山登りやトレッキングです！";
} elseif($points > 25) {
    echo "お勧めのアウトドアジャンルは水泳やカヌーなどの水辺でのアクティビティです！";
} elseif($points > 15) {
    echo "お勧めのアウトドアジャンルはキャンプやバーベキューを楽しむことです！";
} elseif($points > 5) {
    echo "お勧めのアウトドアジャンルは釣りやハンティングなどの野外でのアクティビティです！";
} else {
    echo "お勧めのアウトドアジャンルは森林浴や自然観察など、リラックスしながら自然を楽しむことです！";
}
?>

<?php '../footer.php';?>