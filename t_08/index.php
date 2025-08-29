<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function get_anonymous($name, $alias, $affiliation) {
            return new class($name, $alias, $affiliation) {
                private $name;
                private $alias;
                private $affiliation;
            
                public function __construct($name, $alias, $affiliation) {
                    $this->name = $name;
                    $this->alias = $alias;
                    $this->affiliation = $affiliation;
                }
            
                public function getName() {
                    return $this->name;
                }
            
                public function getAlias() {
                    return $this->alias;
                }
            
                public function getAffiliation() {
                    return $this->affiliation;
                }
            };
        }

        $mandarin = get_anonymous("Unknown", "Mandarin", "Ten Rings");
        echo $mandarin->getName();
        echo $mandarin->getAlias();
        echo $mandarin->getAffiliation();
    ?>
</body>
</html>