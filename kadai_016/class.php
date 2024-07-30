<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="UTF-8">
</head>

<body>
  <p>
    <?php
    class Food
    {
      // プロパティの定義
      private $name;
      private $price;

      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      public function show_price()
      {
        echo $this->price . '<br>';
      }
    }

    class Animal
    {
      //  プロパティの定義
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height()
      {
        echo $this->height . '<br>';
      }
    }

    $potato = new Food('potato', 250);
    $dog = new Animal('dog', 60, 5000);

    print_r($potato);
    echo '<br>';
    print_r($dog);

    echo '<br>';

    $potato->show_price();
    $dog->show_height();
    ?>
  </p>
</body>

</html>