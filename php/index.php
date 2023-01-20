<?php
//変数・・・一時的にデータを保持できる箱
//title=変数　＝＝代入　””の中文字列 echo=出力
$title = "PHP練習";
$num = 1;
echo $title;
echo "<br>";
echo $num;
echo "<br>";
$name = "武田";
echo "{$title}  私の名前は{$name}です";
echo "<br>";

//四則演算
//足し算
$num = 10 + 5;
echo $num;
echo "<br>";
//引き算
$num = 10 - 5;
echo $num;
echo "<br>";
//掛け算
$num = 2 * 2;
echo $num;
echo "<br>";
//割り算
$num = 8 / 4;
echo $num;
echo "<br>";

//配列
//フルーツのarray(配列)
$fruits = array('いちご', 'みかん', 'りんご');
echo $fruits[0];
echo "<br>";
echo $fruits[1];
echo "<br>";
echo $fruits[2];
echo "<br>";
?>

<?php //ループを抜ける
$array = ['いちご', 'さくらんぼ', 'みかん', 'りんご', 'ばなな'];
foreach($array as $bbbb) {
    if ($bbbb == "みかん") {//もし、＄bbbbがみかんの時
        break;//みかんの時breakするためその前の’いちご/さくらんぼ’だけ表示される。それ以降は表示されない
    }
    echo($bbbb);//$bbbを記入したら
    echo"<br>";
}
?>



<?php //headerを呼び出す　include＝加える　header.phpを加える
include('header.php'); ?>
<?php //footerを呼び出す　footer.phpを加える
include('footer.php'); ?>




<?php
//isset=設定（変数に値（文字・式）が入っているか確認して計算する
if (isset($_GET['aaaa'])) {
    switch ($_GET['aaaa']) {
        case '-'://引き算の場合
            //答え　左ー右
            $answer = $_GET['left'] - $_GET['right'];
            break;
        case '*'://掛け算の場合
            $answer = $_GET['left'] * $_GET['right'];
            break;
        case '/'://割り算の場合
            $answer = $_GET['left'] / $_GET['right'];
            break;
        case '+'://足し算の場合
        default:
            $answer = $_GET['left'] + $_GET['right'];
            break;
    }
} else {//他のものの時
    $answer = '計算結果なし';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>test</title>
</head>
<body>
<form action="index.php" method="GET">
    <input type="text" name="left" required autofocus/>
    <select name="aaaa">
        <option value="+" selected>+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="right" required/>
    <input type="submit" value="計算する">
</form>
<p><?php echo $answer; ?></p>
</body>
</html>

<?php echo"<br>"; ?>

