<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // Foodクラスを定義する
       class Food {
        // プロパティを定義する
           public $name;
           public $price;

        // priceプロパティの値を出力するメソッド
            public function show_price() {
            echo $this->price;
            }

        // コンストラクタ
        public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
        }
       }

        // Animalクラスを定義する
        class Animal {
            // プロパティを定義する
            public $name;
            public $height;
            public $weight;

            // heightプロパティの値を出力するメソッド
            public function show_height() {
            echo $this->height;
            }

            // コンストラクタ
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        // Foodインスタンス化
        $food = new Food('ラーメン', 1200);

        // Animalインスタンス化
        $animal = new Animal('dog', 5, 50);

        // インスタンス$foodと$animalの各プロパティの値を出力する
        print_r($food);
        print_r($animal);

        // メソッドの呼び出し
        $food->show_price();
        $animal->show_height();
       ?>
   </p>
</body>

</html>