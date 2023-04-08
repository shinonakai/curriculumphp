<p><?php echo date("Y/m/d", time()).の運勢は; ?></p>

<?php 
    $my_number = $_GET["my_number"];
    $index = mt_rand(0, strlen($my_number) -1);
    $fortune = substr($my_number, $index, 1);

    echo 選ばれた数字は.$fortune;

    switch ($fortune) {
        case 0:
            echo "<p>凶</p>";
            break;
        case 1:
        case 2:
        case 3:
            echo "<p>小吉</p>";
            break;
        case 4:
        case 5:
        case 6:
            echo "<p>中吉</p>";
            break;
        case 7:
        case 8:
            echo "<p>吉</p>";
            break;
        case 9:
            echo "<p>大吉</p>";
            break;
        default:
            echo "<p>不明なエラーが発生しました。</p>";
            break;
    }
?>