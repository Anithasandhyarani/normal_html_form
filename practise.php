

    <?php
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    for ($i = 0; $i < count($cars); $i++) {
        echo "car is: " . $cars[$i][0] . ",no :" . $cars[$i][1] . ",speed :" . $cars[$i][2] ."<br>";
    }
    ?>
