<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getPriceItem($items) {
        $currentItems = array_keys($items);
        $currentValues = array_values($items);
        $totalPrice = 0;

        for($i = 0; $i < count($currentValues); $i++) {
            echo "$currentItems[$i] - ";
            echo "$currentValues[$i]$<br>"; 
            $totalPrice += $currentValues[$i];
        }

        echo "Total Price - $totalPrice$";
    } 

    getPriceItem([
        "Apple" => 0.6,
        "Phone" => 1400,
        "Sofa" => 400,
        "Orange" => 0.8
    ]);
    ?>
</body>
</html>