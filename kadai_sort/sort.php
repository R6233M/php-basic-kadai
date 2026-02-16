<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        function sort_2way($array, $order) {
            if ($order === true){
                echo '昇順でソートします。<br>';
                sort($array, SORT_NUMERIC);
                foreach ($array as $key => $value) {
                echo "$value<br>";
                }
            }
            else {
                echo '降順でソートします。<br>';
                rsort($array, SORT_NUMERIC);
                foreach ($array as $key => $value) {
                echo "$value<br>";
                }
            }
        }

        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>