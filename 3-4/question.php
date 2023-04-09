<link rel="stylesheet" href="style.css">

<?php
//POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
    $choices1 = ["80", "22", "20", "21"];
    $choices2 = ["PHP", "Python", "JAVA", "HTML"];
    $choices3 = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
    $rightanswer1 = $choices1[0];
    $rightanswer2 = $choices2[3];
    $rightanswer3 = $choices3[1];
?>

<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action = "answer.php" method = "post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
    foreach($choices1 as $value1)
    echo '<input type="radio" name="option1" value="'.$value1.'">'.$value1;
?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
    foreach($choices2 as $value2)
    echo '<input type="radio" name="option2" value="'.$value2.'">'.$value2;
?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
    foreach($choices3 as $value3)
    echo '<input type="radio" name="option3" value="'.$value3.'">'.$value3;
?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="rightid1" value="<?php echo $rightanswer1;?>" >
<input type="hidden" name="rightid2" value="<?php echo $rightanswer2;?>" >
<input type="hidden" name="rightid3" value="<?php echo $rightanswer3;?>" >
<input type="hidden" name="userid" value="<?php echo $my_name;?>" >
<br>
<input type="submit" value="回答する" />
</form>