<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "mysql305.phy.lolipop.lan";
$username = "LAA1516370";
$password = "Piitasu2024";
$dbname = "LAA1516370-piitasu";

// フォームからのデータを取得
$providedUsername = isset($_POST["userName"]) ? $_POST["userName"] : '';
$providedPassword = isset($_POST["password"]) ? $_POST["password"] : '';
$providedEmail = isset($_POST["email"]) ? $_POST["email"] : '';
$first_name_kanji = isset($_POST["first_name_kanji"]) ? $_POST["first_name_kanji"] : '';
$first_name_furigana = isset($_POST["first_name_furigana"]) ? $_POST["first_name_furigana"] : '';
$last_name_kanji = isset($_POST["last_name_kanji"]) ? $_POST["last_name_kanji"] : '';
$last_name_furigana = isset($_POST["last_name_furigana"]) ? $_POST["last_name_furigana"] : '';
$address = isset($_POST["address"]) ? $_POST["address"] : '';
$postal_code = isset($_POST["postal_code"]) ? $_POST["postal_code"] : '';
$phone_number = isset($_POST["phonenumber"]) ? $_POST["phonenumber"] : '';

// ハッシュ化 SHA-256
$hashedPassword = hash("sha256", $providedPassword);

// データベースに接続
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("データベース接続エラー: " . $mysqli->connect_error);
}

// トランザクションを開始
$mysqli->begin_transaction();

// ユーザーテーブルへの挿入クエリ
$stmtUser = $mysqli->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
$stmtUser->bind_param("sss", $providedUsername, $hashedPassword, $providedEmail);

// ユーザーテーブルに挿入
if ($stmtUser->execute()) {
    // ユーザーテーブルへの挿入が成功した場合
    $user_id = $stmtUser->insert_id;

    // 顧客テーブルへの挿入クエリ
    $stmtCustomer = $mysqli->prepare("INSERT INTO users_kokyaku (user_id, first_name_kanji, first_name_furigana, last_name_kanji, last_name_furigana, address, postal_code, phone_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmtCustomer->bind_param("isssssss", $user_id, $first_name_kanji, $first_name_furigana, $last_name_kanji, $last_name_furigana, $address, $postal_code, $phone_number);

    // 顧客テーブルに挿入
    $stmtCustomer->execute();

    // トランザクションをコミット
    $mysqli->commit();

    // リダイレクト
    header("Location: ../login.html");
} else {
    // ユーザーテーブルへの挿入が失敗した場合43

    // トランザクションをロールバック
    $mysqli->rollback();

    echo "データベースエラー: " . $stmtUser->error;
    header("Location: ../form.html");
}

// ステートメントをクローズ
$stmtUser->close();
?>




