<link rel="stylesheet" href="style.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$userid = $_POST['userid'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$rightid1 = $_POST['rightid1'];
$rightid2 = $_POST['rightid2'];
$rightid3 = $_POST['rightid3'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkAnswer($option, $rightid) {
    if ($option == $rightid) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>
<p><?php echo $userid; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    checkAnswer($option1, $rightid1);
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    checkAnswer($option2, $rightid2);
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    checkAnswer($option3, $rightid3);
?>