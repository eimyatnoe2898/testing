<?php
    include "includes/person.inc.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP OOP</title>
    <meta charset="UTF-8">
    <meta name="author" content="Ei Myatnoe Aung">
    <!-- <meta name="keywords" content="Mentor, Mentee, WSU, science"> 
    <meta name="description" content="Mentor Program Survey website"> -->
    <!-- <meta http-equiv="refresh" content="30"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <script src="index.js"></script> -->
</head>

<body>

    <?php
        $name = "Daniel";
        $eyeColor = "Blue";
        $age = 24;
        $person1 = new Person($name, $eyeColor, $age);
        $person1->setName($name);
        echo $person1->first;

        $pet1name = "Kiki";
        $pet1 = new Pet($pet1name, $person1 );
        echo $pet1->getName();
        echo $pet1->showOwner();
        // echo $person1->owner();
    ?>
</body>
</html>



