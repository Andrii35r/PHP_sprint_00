<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Avenger {
            public string $name;
            private string $alias;
            public string $gender;
            public int $age;
            private array $pover;
            
            public function __construct(string $name, string $alias, string $gender, int $age, array $pover) {
                $this->name = $name;
                $this->alias = $alias;
                $this->gender = $gender;
                $this->age = $age;
                $this->pover = $pover;
            }

            public function __toString() {
                return "$this->name, $this->gender, $this->age";
            }

            public function __invoke() {
                $powers = implode(", ", $this->pover);
                return " <br> $this->alias, $powers";
            }
         }

        $iron = new Avenger("Tony Stark", "Iron Man", "male", 38, ["Intelegent", "Durabilyty", "Magnetism"]);
        echo $iron;
        echo $iron();
    ?>
</body>
</html>