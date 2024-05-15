<?php '../header.php';?>
<?php
switch ($_REQUEST['meal']){
    case 'ライトプラン':
        echo '貸出5ジャンルまで';
        break;
    case 'スタンダートプラン':
        echo '貸出７ジャンルまで';
        break;
}
echo 'をご提供します'
?>
<?php '../footer.php';?>